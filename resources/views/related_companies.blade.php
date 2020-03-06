<!DOCTYPE html>
<html>

<head>
  <title>関連企業</title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/logo.png" />
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet/less" type="text/css" href="menu.less" />

  <!-- bootstrap-css -->
  <!-- Custom CSS -->
  <link href="{{ asset('css/header_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/footer_style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/service_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/history_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/related_companies_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/recruit_styles.css') }}" rel='stylesheet' type='text/css' />
  <!--font-awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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

        <section class="related_com_banner_part">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 col-xl-12">
                <div class="banner-image-top">
                 <img src="{{asset('images/related_banner.PNG')}}" class="img-fluid" alt="Related Banner"/>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--============================= System Development Section Article ================================-->
        <div class="col-lg-12 col-xl-12">
          <section class="service-dark-bg-orange-section">
            <div class="container">
              <div class="row ">
                <div class="col">
                  <div class="service-titel-content">
                    <div class="service_title">
                      <h4>RELATED COMPANIES</h4>
                    </div>
                    <div class="service_text_wrap text-left text-white">
                      <p>コルジスの新しい取り組み。海外との協力関係により、</p>
                      <p>強固でコストを抑えたサービスを提供します。</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <a href="#targetPage" class="text-white">asasf</a> -->

              <div class="row text-center">
                <div class="col-md-6 col-sm-6 resp-height">
                  <div class="mx-auto" style="width: 179px; height: 310px;">
                    <a href="#targetColgis" class="text-white">
                      <div class="hexagon mx-auto" style="width: 100%;height: 100%;">
                        <div class="hex-60"></div>
                        <div class="hex0">
                          <div class="hex0-position text-white">
                              <h4>コルジス</h4>
                              <h4>BD</h4>
                              <h5>オフショア開発</h5>
                              <h5>日本語学校運営</h5>
                          </div>
                        </div>
                        <div class="hex60"></div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 col-sm-6">
                  <div class="mx-auto" style="width: 179px; height: 310px;">
                    <a href="#targetJabaIT" class="text-white">
                      <div class="hexagon mx-auto" style="width: 100%;height: 100%;">
                        <div class="hex-60"></div>
                        <div class="hex0">
                          <div class="hex0-position text-white">
                            <h4>ジャバIT</h4>
                            <h5>システム開発</h5>
                          </div>
                        </div>
                        <div class="hex60"></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--============================= Related Company 1st Block Company  ================================-->
          <div class="related_companies_container" id="targetColgis">
            <section class="rel-comp-description-section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-xl-4" style="padding-left:0;">
                    <div class="related-company-info-wrapper">
                      <div class="company-name-wrap">
                        <div class="company-name">コルジスBD</div>
                        <p class="text-right">オフショア開発、日本語学校運営</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8 col-xl-8">
                    <div class="related-company-info-wrapper">
                      <div class="company-description-wrap">
                        <p class="text-left com-p">
                          i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。
                        </p>
                        <p class="text-left com-p">
                          業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップと
                        </p>
                        <p class="text-left com-p">
                          物流倉庫、リアル店舗の全在庫商品の一元管理が可能です。
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="gallery-section">
              <div class="row">
                <div class="col">
                 <div class="gallery-wrapper">
                    <img src="{{asset('images/g1_img1.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g1_img2.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g1_img3.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g1_img4.jpg')}}" alt="Cordis BD"/>
                  </div>
                </div>
              </div>
            </section>

            <section class="gallery-section">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <div class="related-company-info-wrapper">
                      <div class="company-name-wrap">
                        <div class="company-name">コルジスBD 日本語学校</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="gallery-wrapper">
                      <img src="{{asset('images/g2_img1.jpg')}}" alt="Cordis BD"/>
                      <img src="{{asset('images/g2_img2.jpg')}}" alt="Cordis BD"/>
                    </div>
                  </div>
                </div>
            </section>

            <div class="col-lg-12 col-xl-12">
              <div class="d-flex justify-content-center mt-4 action-button-wrap ">
                <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
              </div>
            </div>

            <!--============================= Company Location Map  ================================-->

            <section class="contact-us-section">
              <div class="container">
                <div class="row ">
                  <div class="col-md-6 align-self-center">
                    <div class="comp-contact-us">
                      <ul>
                        <li>
                          <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                          </div>
                          <div class="details">
                            <span>Flat# A-5, House# 668, Road# 9, Avenue# 5, Mirpur DOHS, Dhaka-1216, Bangladesh.</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fas fa-mobile"></i>
                          </div>
                          <div class="details">
                            <span>(+88) 013-02720218</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fas fa-envelope"></i>
                          </div>
                          <div class="details">
                            <span>info@colgis-bd.com</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fab fa-facebook-square"></i>
                          </div>
                          <div class="details">
                            <span>www.facebook.com/colgisBD</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mapouter comp-contact-location">
                      <div class="gmap_canvas"><iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=colgis%20bd&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <!--============================= Related Company 2nd Block Company  ================================-->

          <div class="related_companies_container" id="targetJabaIT">
            <section class="rel-comp-description-section">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-xl-4" style="padding-left:0;">
                    <div class="related-company-info-wrapper">
                      <div class="company-name-wrap">
                        <div class="company-name">JABA IT</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8 col-xl-8">
                    <div class="related-company-info-wrapper">
                      <div class="company-description-wrap">
                        <p class="text-left com-p">
                          i-Managerは企業のビジネスを強力にサポートする・簡易販売管理システム。
                        </p>
                        <p class="text-left com-p">
                          業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップと
                        </p>
                        <p class="text-left com-p">
                          物流倉庫、リアル店舗の全在庫商品の一元管理が可能です。
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--============================= Gallery Block 1  ================================-->
            <section class="gallery-section">
              <div class="row">
                <div class="col">
                  <div class="gallery-wrapper">
                    <img src="{{asset('images/g3_img1.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g3_img2.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g3_img3.jpg')}}" alt="Cordis BD"/>
                    <img src="{{asset('images/g3_img4.jpg')}}" alt="Cordis BD"/>
                  </div>
                </div>
              </div>
            </section>

            <!--============================= Gallery block 2 ================================-->

            <!--============================= Action Button Wrap  ================================-->

            <div class="col-lg-12 col-xl-12">
              <div class="d-flex justify-content-center mt-2 action-button-wrap ">
                <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
              </div>
            </div>
          </div>
        </div>

        <!--============================= Company Profile Section Article ================================-->
        <!--============================= Map Section ================================-->
        <!--============================= Company History  title Section ================================-->
        <!--============================= Company History Section ================================-->
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
            <script
              language="javascript"
              type="text/javascript"
              src="js/flot-chart/excanvas.min.js"
            ></script
          ><![endif]-->
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