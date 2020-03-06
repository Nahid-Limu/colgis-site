<!DOCTYPE html>
<html>

<head>
  <title>サービス</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="80x32" href="images/favicon/logo.png">
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet/less" type="text/css" href="menu.less" />

  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="{{ asset('css/header_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/footer_style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/service_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/recruit_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/related_companies_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/header_styles.css') }}" rel='stylesheet' type='text/css' />

  <!-- //font-awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="whole-border content-wrap">
      <div class="row">
        <!-- <div class="col-lg-12 col-xl-12"> -->
        {{-- <script>
          $(function () {
            $("#headerPage").load("header.html");
            $("#footerPage").load("footer.html");
          });
        </script> --}}
        <!--============================= start nav bar ================================-->
        @include('layouts.header')
        <!--============================= start top navbar ================================-->
        <div id="headerPage"></div>
        <!--=============================end top navbar ================================-->



        <section class="service_banner_part">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 col-xl-12">
                <div class="service-banner-image-top">
                  <img src="{{asset('images/service_banner.PNG')}}" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="col-lg-12 col-xl-12">
          <section class="service-dark-bg-section">
            <div class="container">
              <div class="row ">

                <div class="col">
                  <div class="service-titel-content">
                    <div class="service_title">
                      <h4>SERVICE</h4>
                    </div>
                    <div class="service_text_wrap text-left text-white">
                      <p>過去18年以上の実績を誇るクラウド型物流管理システムと</p>
                      <p>究極の情報一元管理を目指す、進化し続けるシステムを提供しています。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row text-center">
                <div class="col-md-4 col-sm-12 height_m">
                  <div class="mx-auto" style="width: 174px; height: 300px;">
                    <a href="#targetLogMan" class="text-white">
                      <div class="hexagon mx-auto" style="width: 100%; height: 100%;">
                        <div class="hex-60"></div>
                        <div class="hex0">
                          <div class="hex0-position text-white">
                            <h4>WMS</h4>
                            <h5>物流管理システム</h5>
                          </div>
                        </div>
                        <div class="hex60"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 height_m">
                  <div class="mx-auto" style="width: 174px; height: 300px;">
                    <a href="#targetJavaEC" class="text-white">
                      <div class="hexagon mx-auto" style="width: 100%; height: 100%;">
                        <div class="hex-60"></div>
                        <div class="hex0">
                          <div class="hex0-position text-white">
                            <h4>ジャバEC</h4>
                            <h5>定期購入特化型EC</h5>
                          </div>
                        </div>
                        <div class="hex60"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-24 height_m">
                  <div class="mx-auto" style="width: 174px; height: 300px;">
                    <a href="#targetColSystem" class="text-white">
                      <div class="hexagon mx-auto" style="width: 100%; height: 100%;">
                        <div class="hex-60"></div>
                        <div class="hex0">
                          <div class="hex0-position text-white">
                            <h4>システム</h4>
                            <h4>開発</h4>
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
        </div>


        <div class="col-lg-12 col-xl-12">
          <div class="company_service_container_main" id="targetLogMan">
            <section class="service_details_section w-100 ">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="service-name-wrap">
                      <div class="service-name">WMS<span>物流理 システム</span></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-10 mx-auto">
                    <div class="service-name-wrap">
                      <p>&lt;メーカー・卸売業者・EC事業者&gt;</p>
                    </div>
                  </div>
                </div>

                <div class="service_info_block1">
                  <div class="container">
                    <div class="row align-items-center ">
                      <div class="col-lg-12 col-xl-12">
                        <div class="rounded-bg-text text-center">
                          会社全体の在庫と情報を一元管理
                        </div>
                        <div class="service-image-wrap text-center">
                          <img src="{{asset('images/imanager.PNG')}}" class="img-fluid"/>
                        </div>

                        <div class="service-bottom-text-area text-center">
                          <p>i-Managerは企業のビジネスを強力に サポートする在庫・簡易販売管理システム。</p>
                          <p>業務内容に合わせてカスタマイズができ、リアルタイムで各ネットショップと</p>
                          <p>物流倉庫、リアル店舗の全在庫商品の一元管理が可能です。</p>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-5">
                      <div class="col-lg-10 mx-auto">
                        <div class="row">
                          <div class="col-md-6 col-xl-6">
                            <div class="service_wrap pd-2 w-100 ">
                              <div class="service-text-top-wrap text-white">
                                <p>いつ、どこにいても、すべての方が</p>
                                <p>商品写真を見ながら、</p>
                                <p>在庫の確認および受注・出荷処理ができます。</p>
                              </div>
                              <img src="{{asset('images/s1.PNG')}}" class="img-fluid"/>
                            </div>
                          </div>

                          <div class="col-md-6 col-xl-6 w-100 ">
                            <div class="service_wrap_right pd-2">
                              <img src="{{asset('images/s2.PNG')}}" class="img-fluid"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-xl-12">
                  <div class="d-flex justify-content-center mt-2 pb-3 action-button-wrap ">
                    <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
                  </div>
                </div>
            </section>
          </div>
        </div>


        <!--=============================Company service block 2 section ================================-->
        <div class="col-lg-12 col-xl-12">
          <div class="company_service_container_main" style="box-shadow: none;">
            <section class="service_details_section w-100 ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 mx-auto">
                    <div class="service-name-wrap">
                      <!--<div class="service-name">WMS物流理 システム</div>-->
                      <p class="service_text">
                        <物流会社>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="service_info_block2">
                  <div class="row align-items-center ">
                    <div class="col-lg-12 col-xl-12">
                      <div class="rounded-bg-text text-center">
                        複数の荷主の情報を一括で共有・管理
                      </div>
                      <div class="service-image-wrap text-center">
                        <img src="{{asset('images/link_drive.PNG')}}" class="img-fluid"/>
                      </div>

                      <div class="service-bottom-text-area text-center">
                        <p>LINK Driveは企業のビジネスを強力にサポート する物流管理システム。</p>
                        <p>現場の負担を減らしながら精度の向上が可能になります。</p>
                        <p>また、荷主の業務内容に合わせてカスタマイズができ、リアルタイムで荷主の情報との連動を実現します。</p>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-lg-10 col-md-12 mx-auto">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="service_wrap_block2 pd-2 w-100 ">
                            <div class="service-text-top-wrap text-white">
                              <p>いつ、どこにいても、すべての方が</p>
                              <p>商品写真を見ながら、</p>
                              <p> 在庫の確認および受注・出荷処理ができます。</p>
                            </div>
                            <div class="row">
                              <div class="col-lg-12 col-xl-12 ">
                                <div class="service-image-section">
                                  <img src="{{asset('images/cos2.jpg')}}" class="img-fluid"/>
                                </div>
                              </div>
                          <!--<div class="col-lg-4 col-xl-4 ">
                                <div class="orange-bg-text-area text-center">
                                  <p>
                                    各商品に画像を入れ
                                    ることが出来るた
                                    >め、電話等の応対で
                                    も視覚的な情報共有
                                    がより正確になりま
                                    す。い項目の散や
                                    名前が自由に応更で
                                    きるので、より現場
                                    に合わせたカスタマ
                                    イズを実現。
                                  </p>
                                </div>
                              </div>-->
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6 w-100 ">
                          <div class="service_wrap_block2_right text-center pd-2">
                            <div class="rounded-bg-text-block">
                              実績のあるWMS を、簡単にしかも安価で導入。すぐに利用可能
                            </div>
                            <div class="rounded-bg-text-block">
                              インターネットにつながるPCがあれば余分な投資は一切不要
                            </div>
                            <div class="rounded-bg-text-block">
                              いつ、どこでも、リアルタイムな在庫確認や入出荷情報を共有
                            </div>
                            <div class="rounded-bg-text-block">
                              荷主からの問い合わせ(電話、メール、FAX)対応が減少
                            </div>
                            <div class="rounded-bg-text-block">
                              荷主それぞれの固有システムに関する要望にも個別に対応可能
                            </div>
                            <div class="rounded-bg-text-block">
                              強固なセキュリティ、万全のバックアップ体制だから安心
                            </div>

                            <div class="row mt-3">
                              <div class="col-lg-6 col-xl-6 ">
                                <div class="circle-wrap-top">
                                  <div class="option-wrapper d-inline-flex flex-row">
                                    <div class="circle-div">OPTION</div>
                                    <div class="rounded-text-wrap">一体型伝票システム</div>
                                  </div>
                                  <div class="option-wrapper-text mt-2">
                                    <p>納品書と送り状が一体化した伝票が発</p>
                                    <p>行可能。精度を高め、手間を省きます。</p>
                                  </div>
                                </div>

                                <div class="service-image-section">
                                  <img src="{{asset('images/s3.PNG')}}" class="img-fluid"/>
                                </div>
                              </div>

                              <div class="col-lg-6 col-xl-6 ">
                                <div class="circle-wrap-top">
                                  <div class="option-wrapper d-inline-flex flex-row">
                                    <div class="circle-div">OPTION</div>
                                    <div class="rounded-text-wrap">バーコード入出荷機能</div>
                                  </div>
                                  <div class="option-wrapper-text m-2">
                                    <p>バーコード管理を行うことで、</p>
                                    <p>より正確な在庫管理を行うます。</p>
                                  </div>
                                </div>

                                <div class="service-image-section">
                                  <img src="{{asset('images/s4.PNG')}}" class="img-fluid"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12 col-xl-12">
                  <div class="d-flex justify-content-center mt-4  action-button-wrap ">
                    <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
          <section class="section-gap relative" id="targetJavaEC">
            <div class="">
              <div class="system-dev-area">
                <img src="{{asset('images/business1.jpg')}}" alt="Business Image" class="img-fluid" />
                <span>ジャバEC</span>
              </div>
            </div>
          </section>
        </div>


        <div class="gallery-section-service">
          <div class="container">
            <!--============================= grey background section ================================-->
            <div class="row ">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="outline-wrap section-gap">
                  <div class="border-text text-center mb-3">定期購入特化型ECシステム </div>
                  <p class="p-t text-center mb-1">＜ジャバIT定期購入特化型ECシステム＞はリピート購入をメインとした</p>
                  <p class="p-t text-center">購入～カートシステム～物流管理までを一元管理できるシステムです。</p>
                </div>
              </div>
            </div>
            <!--============================= end grey background section ================================-->

            <div class="row mt-1">
              <div class="col-md-6 col-sm-12">
                <div class="text-center mb-2 "> <span> [トップページ]</span></div>
                <div class="gallery-image-wrapper mb-3">
                  <img src="{{asset('images/s_g_1.jpg')}}" alt="Service Gallery" class="img-fluid"/>
                </div>

              </div>
              <div class="col-md-6 col-sm-12">
                <div class="text-center mb-2 "> <span> [受注管理] </span></div>
                <div class="gallery-image-wrapper mb-3">
                  <img src="{{asset('images/s_g_2.jpg')}}" alt="Service Gallery" class="img-fluid"/>
                </div>

              </div>
            </div>
            <div class="row ">
              <div class="col-md-6 col-sm-12">
                <div class="text-center mb-2 "> <span> [商品登録] </span></div>
                <div class="gallery-image-wrapper mb-3">
                  <img src="{{asset('images/s_g_3.jpg')}}" alt="Service Gallery" class="img-fluid"/>
                </div>

              </div>
              <div class="col-md-6 col-sm-12">
                <div class="text-center mb-2 "> <span> [カスタマー対応]</span></div>
                <div class="gallery-image-wrapper mb-3">
                  <img src="{{asset('images/s_g_4.jpg')}}" alt="Service Gallery" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--============================= Company Service Image bottom  ================================-->

        <div class="contact-us-section mt-3">
          <div class="container">
            <div class="row ">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <section class="banner-bg-grey-section">
                  <div class="border-text-area">
                    <div class="border-with-text-wrap mb-3">東西物流分散の物流システム</div>
                    <p class="mb-1">東日本・西日本の物流拠点を東西に構え一元管理し</p>
                    <p>それぞれの出荷を最適化した状態で物流を振り分けコントロールします。</p>
                  </div>
                </section>
              </div>
              <div class="col-lg-12 col-xl-12">
                <div class="service-image-wrapper">
                  <img src="{{asset('images/service_img2.PNG')}}" class="img-fluid"/>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-xl-12">
          <div class="d-flex justify-content-center mt-2 action-button-wrap ">
            <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
          </div>
        </div>

        <!--============================= end Border block ================================-->


        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
          <section class="section-gap relative" id="targetColSystem">
            <div class="">
              <div class="system-dev-area">
                <img src="{{asset('images/business1.PNG')}}" alt="Business Image" class="img-fluid" />
              </div>
            </div>
          </section>
        </div>
        <!--============================= end Border block ================================-->


        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
          <div class="outline-wrap section-gap">
            <div class="border-text text-center mb-3">大手商社との開発実績あり </div>
            <p class="mb-1 text-center">モックアップ*も安価にて制作いたします。</p>
            <p class="text-center">※システムの完成イメージ</p>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="text-center">
            <u><a href="http://colgis-mockup.colgisbdwork.com" target="_blank" class="text-danger">モックアップのサンプルはこちら</a></u>
          </div>
        </div>


        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
          <section class="feature-section">
            <!--============================= mockup benefit list 1 block ================================-->
            <div class="row">
              <div class="col-lg-11 mx-auto">
                <span class="display-6 text-left ">
                  <モックアップのメリット>
                </span>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="num-wrap">
                  <div class="num-span"> <span class="counter-span">1.</span></div>
                </div>

                <div class="list-wrap mt-3">
                  <div class="list-inner-wrap"><span class="bg-counter-text"> システムモックアップを作成することにより、仕様が明確にできる。</span>
                  </div>
                  <div class="mt-2 mockup-submenu">
                    <ul>
                      <li>システム開発依頼者の要望が確実に現実化できる</li>
                      <li> 完成後に仕様でもめることがない</li>
                      <li> 開発費が明確になる</li>
                      <li>プログラマーの開発工数が低減できる</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--============================= mockup benefit list 2 block ================================-->

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="num-wrap">
                  <div class="num-span"> <span class="counter-span">2.</span></div>
                </div>

                <div class="list-wrap mt-3">
                  <div class="list-inner-wrap"><span class="bg-counter-text">
                      システムの仕様を打ち合わせする担当者の能力が低くても仕様をまとめやすい。</span></div>
                  <div class="mt-2 mockup-submenu">
                    <ul>
                      <li> 実際の完成メニューを見ながら打ち合わせができる</li>
                      <li> 何度でも容易に作り替えが可能</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!--============================= mockup benefit list 3 block ================================-->

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="num-wrap">
                  <div class="num-span"> <span class="counter-span">3.</span></div>
                </div>

                <div class="list-wrap mt-3">
                  <div class="list-inner-wrap"><span class="bg-counter-text"> 総合開発費用が低減できる。</span></div>
                  <div class="mt-2 mockup-submenu">
                    <ul>
                      <li> バングラデシュのウエブデザイナーを利用することにより<br>システムモックアップを安価で製作できる。</li>
                      <li> 仕様確定後の作業が明確化でき余分なコストが発生しにくい。</li>
                      <li> 正確な見積の作成が可能になる。</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <!--============================= mockup benefit list 4 block ================================-->
            <div class="row ">
              <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 ">
                <div class="num-wrap">
                  <div class="num-span"> <span class="counter-span">4.</span></div>
                </div>

                <div class="list-wrap mt-3 mb-3">
                  <div class="list-inner-wrap">
                    <div class="bg-counter-text"> 
                      システムモックアップの長期保管により、<br>
                      次期システム変更・開発を低価格で仕様検討が行える。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- </section>
                        </div> -->

        <div class="col-lg-12 col-xl-12 mb-5">
          <div class="d-flex justify-content-center mt-2 action-button-wrap ">
            <a href="{{url('/contactus')}}" class="action-button animate navy_blue">資料請求はこちらから</a>
          </div>
        </div>
@include('layouts.footer')
        <div id="footerPage" style="width:100%;"></div>
      </div>
    </div>
  </div>


  <!--============================= start recruitment section ================================-->
  <!--============================= end recruitment section ================================-->
  <!--============================= start 1st Article ================================-->
  <!--============================= end 1st Article ================================-->
  <!--============================= 6th menu End ================================-->
  <!--============================= 7th menu start ================================-->
  <!--============================= 7th menu End ================================-->
  <!-- / footer -->
  <!--main content end-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--[if lte IE 8]>
        <script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <!-- Latest compiled and minified CSS -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>