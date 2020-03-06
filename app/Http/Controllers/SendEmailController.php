<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class SendEmailController extends Controller
{
    private $fixed_mail_to_support = "hp@colgis.co.jp";
    private $fixed_mail_from = "hp@colgis.co.jp";
    private $sub_for_support = "【 HP 】お問い合わせ受付";
    private $sub_for_custommer = "【 コルジス 】お問い合わせ有り難うございました。";

    public function contactus()
    {
        
        return view('contactus');
    }
    
    public function sendmail(Request $request)
    {
        $state = $request->inputState;
        $name = $request->inputConactName;
        $address = $request->inputAddress;
        $email = $request->inputEmailAddress;
        $phoneNumber = $request->inputPhoneNumber;
        $message = $request->message;

        // date in japanis formate start
            $days = array("日","月","火","水","木","金","土");
            $date = @date('Y 年 m 月 d 日 (').($days[@date("w")]).(') ').@date('H:i:s');
            // $date = date('Y') . ' 年 ' . date('m') . ' 月 ' . date('d') . ' 日 ' . date('D') . '  ' . date("H:i:s");
            // dd($date);
        // date in japanis formate end
        
        $data = array(
            'state' => $request->inputState,
            'name' => $request->inputConactName, 
            'address' => $request->inputAddress,
            'email' => $request->inputEmailAddress,
            'phoneNumber' => $request->inputPhoneNumber,
            'msg' => $request->message,
            'dateJP' => $date
        );
        
        // for multiple email start
            // $toemails  = [$this->mail_to, 'nahidcse244@gmail.com'];
            $input_mail_to = $request->inputEmailAddress;
        // for multiple email end

        // mail for custommer start 
            Mail::send('emailTemplateClint', $data, function ($message) use ($input_mail_to ,$name,$state) {
                
                $message->to($input_mail_to)
                ->subject($this->sub_for_custommer)->from($this->fixed_mail_from, 'コルジス　お問い合わせ受付');

            });
        // mail for custommer end
        
        // mail for Support start 
            Mail::send('emailTemplateSupport', $data, function ($message) use ($input_mail_to ,$name,$state) {
                    
                $message->to($this->fixed_mail_to_support)
                ->subject($this->sub_for_support)->from($input_mail_to);

            });
        // mail for Support end

        // return back()->with('message', 'Thank You for contuct With us');
        return response()->json(['success' => '送信しました。']);
    }

    public function temp()
    {
        return view('emailTemplateClint');
    }
}
