<!DOCTYPE html>
<html>

<head>
  <title>採用情報</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/logo.png">
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet/less" type="text/css" href="menu.less" />

  <!-- bootstrap-css -->
  <!-- Custom CSS -->
  <link href="{{ asset('css/header_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/footer_style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/service_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/recruit_styles.css') }}" rel='stylesheet' type='text/css' />

  <!--font-awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <div class="container ">
    <div class="whole-border">
      <div class="row">
        {{-- <script>
          $(function () {
            $("#headerPage").load("header.html");
            $("#footerPage").load("footer.html");
          });
        </script> --}}
        <!--============================= start nav bar ================================-->
        @include('layouts.header')
        <!--============================= start nav bar ================================-->
        <div id="headerPage"></div>
        <!--============================= end navabr ================================-->
        <!--============================= banner top section  ================================-->


        <section class="recruit_banner_part">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 col-xl-12">
                <div class="banner-image-top">
                  <img src="{{asset('images/recruit_banner1.PNG')}}" class="img-fluid" alt="Interview Banner"/>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--============================= System Development Section Article ================================-->
        <div class="col-lg-12 col-xl-12">
          <section class="interview_banner_part2">
            <div class="container">
              <div class="row ">
                <div class="col-lg-3 col-xl-3">
                  <div class="banner_left-title">
                    <h3 class="text-da mb-2">採用情報</h3>
                    <h5>RECRUIT</h5>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-5 interview-text mx-auto">
                  <div class="">
                    <h1>GET</h1>
                    <h1>YOUR FUTURE</h1>
                    <h1>WITH</h1>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="text-center mt-4 pb-4">
                    <img src="{{asset('images/logo-i.PNG')}}" class="img-fluid mb-2"/>
                    <p class="mb-1">株式会社コルジスの採用情報についてのページです。</p>
                    <p class="mb-1">コルジスでは、キャリア採用 (中途採用)・新卒採用を積極的に行っています。</p>
                    <p>私たちと一緒にテクノロジーの力で働き方の新常識をつくりませんか。 </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>



        <!--============================= Interview Section Article ================================-->

        <!-- <div class="col-lg-12 col-xl-12">
                <section class="interview_blog_section pd-20">
                    <div class="container">

                        <div class="row ">

                            <div class="col-lg-3 col-xl-3">

                                <div class="banner_left-title">

                                    <h3 class="text-da mb-2">社員インタビュー</h3>
                                    <h5>INTERVIEW</h5>

                                </div>

                            </div>
                            </div>
                            <div class="row ">

                                <div class="col-lg-3 col-xl-3">
                                    <div class="dark-bg-img-sec"></div>

                                </div>
                                <div class="col-lg-9 col-xl-9">

                                    <div class="interview_blog-text">

                                        <h3>リアル店舗の全在庫商品の一元管</h3>
                                        <p>i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。 </p>
                                        <p>業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップ </p>
                                        <p>と物流倉庫、リアル店舗の全在庫商品の一元管理が可能です。</p>
                                        <p> i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。</p>
                                        <p>業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップ</p>
                                        <p>と物流葉庫、リアル店舗の全在庫商品の一元管理が可能です。i-Managerは企</p>
                                        <p>業のビジネスを強力にサポートする・簡易販売管理システム。 </p>

                                    </div>

                                </div>





                            </div>


                        </div>
                </section>
            </div> -->



        <!--============================= Interview Section Article2 ================================-->

        <!-- <div class="col-lg-12 col-xl-12">
                <section class="interview_blog_section pd-20">
                    <div class="container">
                        <div class="row ">

                            <div class="col-lg-3 col-xl-3">
                                <div class="dark-bg-img-sec"></div>

                            </div>
                            <div class="col-lg-9 col-xl-9">

                                <div class="interview_blog-text">

                                    <h3>リアル店舗の全在庫商品の一元管</h3>
                                    <p>i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。 </p>
                                    <p>業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップ </p>
                                    <p>と物流倉庫、リアル店舗の全在庫商品の一元管理が可能です。</p>
                                    <p> i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。</p>
                                    <p>業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップ</p>
                                    <p>と物流葉庫、リアル店舗の全在庫商品の一元管理が可能です。i-Managerは企</p>
                                    <p>業のビジネスを強力にサポートする・簡易販売管理システム。 </p>

                                </div>

                            </div>





                        </div>


                    </div>
                </section>
            </div> -->
        <!--============================= System Development Section Article ================================-->
        <!--============================= start 1st Article ================================-->
        <!--============================= end 1st Article ================================-->
        <!--============================= 6th menu End ================================-->
        <!--============================= 7th menu start ================================-->
        <!--============================= 7th menu End ================================-->
        <!-- / footer -->
        <!--main content end-->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  @include('layouts.footer')
        <div id="footerPage"></div>

        <!--[if lte IE 8]>
        <script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <!-- Latest compiled and minified CSS -->
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>