<!DOCTYPE html>
<html>

<head>
    <title> 総合メニュー</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/logo.png">
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
  


    <!-- //font-awesome icons -->
	
   

</head>

<body>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <header class="main_menu home_menu">
                    <nav class="navbar  navbar-expand-lg navbar-light navbar-default">
                        <a class="navbar-brand" href="#"> <img src="images/logo.PNG" alt="logo" /> </a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="navbar-collapse main-menu-item justify-content-end collapse"  id="navbarSupportedContent" style="">
                            <ul class="navbar-nav text-center nav">
                              <li class="nav-item">
                                    <a class="nav-link" href="{{url('/history')}}">会社概要</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/services')}}">サービス</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/related_companies')}}">関連企業</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/interview')}}">採用情報</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contactus')}}">お問い合せ</a>
                                </li>
                                <!--<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="project.html">project</a>
                                        <a class="dropdown-item" href="project_details.html">project details</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>-->

                                <li class="d-lg-block nav-item">
                                     <span class="display-6 call-section">043-309-4741</span> 
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>


    <!--============================= start nav bar ================================-->
    <!--============================= end navabr ================================-->
    <!--============================= start 1st Article ================================-->
    <!--============================= end 1st Article ================================-->
    <!--============================= 6th menu End ================================-->
    <!--============================= 7th menu start ================================-->
    <!--============================= 7th menu End ================================-->
    <!-- / footer -->
    <!--main content end-->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
</body>


</html>
