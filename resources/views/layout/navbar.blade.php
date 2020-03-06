<!-- <div class="topnav fixed-top" style="overflow: hidden">
  <a class="" href="#home"><b>COLGIS</b></a>
  <div class="topnav-right">
    <a href="#search">会社概要</a>
    <a href="{{url('/service')}}">サービス</a>
    <a href="{{url('/related_companies')}}">関連企業</a>
    <a href="{{url('/history')}}">採用情報</a>
    <a href="{{url('/contact')}}">お問い合せ</a>
    <a href="#about">043-309-4741</a>
  </div>
</div> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #1c2f54;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #1c2f54;
  color: white;
}

.topnav .icon {
  display: none;
}
.topnav-right {
  float: right;
}

@media screen and (max-width: 800px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 800px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav fixed-top" id="myTopnav">
  <a href="#home" class="active">COLGIS</a>
  <div class="topnav-right">
    <a href="{{url('/service')}}">会社概要</a>
    <a href="{{url('/service')}}">サービス</a>
    <a href="{{url('/related_companies')}}">関連企業</a>
    <a href="{{url('/history')}}">採用情報</a>
    <a href="{{url('/contact')}}">お問い合せ</a>
    <a href="#">043-309-4741</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
