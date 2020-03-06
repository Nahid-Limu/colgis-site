<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
  <br>
  <h4>下記の内容で受け付けました。ご確認ください。</h4>
  <hr>           
  <table class="table table-borderless">
    <tbody>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; 受付日時</td>
        <td>{{$dateJP}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; お名前・御社名</td>
        <td>{{$name}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; 住所</td>
        <td>{{$address}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; 電話番号</td>
        <td>{{$phoneNumber}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; メールアドレス</td>
        <td>{{$email}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; お問い合わせ内容</td>
        <td>{{$state}}</td>
      </tr>
      <tr>
        <td style="font-size:15px;" class="fa">&#xf096; 連絡事項</td>
        <td style="white-space: pre-wrap;">{{$msg}}</td>
      </tr>
      
      
    </tbody>
  </table>
</div>
<p class="text-center">----Colgis----</p>

</body>
</html>
