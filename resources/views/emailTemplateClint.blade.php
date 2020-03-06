<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email for Clint</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
  <style>
    .box-dark {
      width: 13px;
      height: 13px;
      background-color: #333;
      color: #fff;
      margin-right: 5px;
      float: left;
    }
    .tr_style{
      display: inline-flex; 
      align-items: center;
      width: 180px;
    }
  </style>
</head>
<body>

<div class="container">
  <br>
  <h4>下記の内容で受け付けました。ご確認ください。</h4>
  <hr>           
  <table class="table table-borderless">
    <tbody>
      <tr>
        
        <td class="tr_style"> <span class="box-dark"></span> 受付日時</td>
        <td>{{$dateJP}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span> お名前・御社名</td>
        <td>{{$name}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span> 住所</td>
        <td>{{$address}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span> 電話番号</td>
        <td>{{$phoneNumber}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span> メールアドレス</td>
        <td>{{$email}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span>  お問い合わせ内容</td>
        <td>{{$state}}</td>
      </tr>
      <tr>
        <td class="tr_style"> <span class="box-dark"></span>  連絡事項</td>
        <td style="white-space: pre-wrap;">{{$msg}}</td>
      </tr>
      
    </tbody>
  </table>
</div>
<p style="text-align: center">----Colgis----</p>

</body>
</html>
