<!DOCTYPE html>
<html>

<head>
  <title>会社概要</title>
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
  <link href="{{ asset('css/history_styles.css') }}" rel='stylesheet' type='text/css' />
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
    <!--     <script>
          $(function () {
            $("#headerPage").load("header.html");
            $("#footerPage").load("footer.html");
          });
        </script> -->
        <!--============================= start nav bar ================================-->
            @include('layouts.header')
        <div id="headerPage"></div>
        <!--============================= end navabr ================================-->
        <!--============================= banner top section  ================================-->


        <section class="history_banner_part" style="width: 100%;float: left;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 col-xl-12">
                <div class="banner-image-top">
                  <img src="{{asset('images/history_banner.PNG')}}" />
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--============================= System Development Section Article ================================-->
        <div class="col-lg-12 col-xl-12">
          <section class="history_banner_section">
            <div class="container">
              <div class="row ">
                <div class="col-lg-4 col-xl-4">
                  <div class="banner_left-title">
                    <h3 class="text-da mb-2">会社概要</h3>
                    <h5>COMPANY PROFILE</h5>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>



        <!--============================= Company Profile Section Article ================================-->
        <div class="col-lg-8 col-md-10 mx-auto">
          <section class="company_profile_section">
            <div class="container">
              <div class="row ">
                <div class="col-sm-12">
                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>名称</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : 株式会社 コルジス</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div> 代表者</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : 安積泰啓</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>資本金　</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : 4,050万円(および資本準備金2,200万円)</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>設立　</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : 平成7年12月</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>事業内容　</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : コンピューターネットワークの管理運営</div>
                      <div> &nbsp;&nbsp;業務用機器の開発/設計/製造/販売</div>
                      <div> &nbsp;&nbsp;マーケティング企画/開発 企業コンサルティング</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>取引銀行　</div>
                    </div>
                    <div class="col-sm-9">
                      <div> : 三井住友銀行 (伊丹支店)</div>
                      <div> &nbsp;&nbsp;東京三菱UFJ銀行 (豊中駅前支店)</div>
                      <div> &nbsp;&nbsp;千葉銀行 (幕張新都心支店)</div>
                    </div>
                  </div>


                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>決算期　</div>
                    </div>
                    <div class="col-sm-9">
                      <div>: 4月</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>住所(本社)　</div>
                    </div>
                    <div class="col-sm-9">
                      <div>: 〒261-0023 千葉県千葉市美浜区中瀬1-7-1</div>
                      <div> &nbsp;&nbsp;住友ケミカルエンジニアリングセンタービル16F</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>TEL</div>
                    </div>
                    <div class="col-sm-9">
                      <div>: 043-309-4741</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3">
                      <div>FAX</div>
                    </div>
                    <div class="col-sm-9">
                      <div>: 043-213-2707</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--============================= Map Section ================================-->
          <div class="col-lg-10 mx-auto">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=%E3%80%92261-0023%20%E5%8D%83%E8%91%89%E7%9C%8C%E5%8D%83%E8%91%89%E5%B8%82%E7%BE%8E%E6%B5%9C%E5%8C%BA%E4%B8%AD%E7%80%AC1-7-1%20%20%20%E4%BD%8F%E5%8F%8B%E3%82%B1%E3%83%9F%E3%82%AB%E3%83%AB%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E3%83%AA%E3%83%B3%E3%82%B0%E3%82%BB%E3%83%B3%E3%82%BF%E3%83%BC%E3%83%93%E3%83%AB16F&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net">timing online</a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
          </div>

        <!--============================= Company History  title Section ================================-->
        <div class="col-lg-12 col-xl-12">
          <section class="history_banner_section">
            <div class="container">
              <div class="row ">
                <div class="col-lg-4 col-xl-4">
                  <div class="banner_left-title">
                    <h3 class="text-da mb-2">沿革</h3>
                    <h5>HISTORY</h5>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--============================= Company History Section ================================-->
        <div class="col-lg-8 col-md-10 mx-auto">
          <section class="company_profile_section">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">1995-12 </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div> [有限会社ジェネシス」 設立</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right"> 1998-07</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>業務用清掃機器の開発/設計/製造/メンテナンス 等の事業開始</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right"> -09</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>ジェネシス カナダ支店を設立</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2001-05</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>コンピュータ・ソフトウェア開発事業開始</div>
                    </div>

                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2002-08</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>ASP型物流管理システムの開発完了</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2003-01</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>中小企業創造活動促進法に認定</div>
                      <div>
                        物流管理システムの販売開始
                      </div>
                      <div>
                        有限会社ライトコア (ホストサーバー管理)と業務提携 有限会社オフィス・シェルパ(ユーザーサポート)と業務提携
                      </div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-10</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>販売管理システムの販売開始</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2004-02</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>千葉営業所を設立</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-08</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>[MIT」日本エンタープライズフォーラム:ビジネスコンテスト第4回入賞</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-10</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>中小企業基盤機構 全国モデル企業に採択</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2005-01</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>千葉営業所を移転(サポートセンターを拡張)</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2006-01</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>千葉営業所・サポートセンター拡張</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-06</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>情報共有化システム「IV Link (フォー・リンク)」の開発完了</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-08</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>社名を「株式会社ジェネシス」に変更</div>
                      <div>資本金を14,000千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2007 -01</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>資本金を25,000千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-11</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>千葉営業所を幕張新都心に移転、「幕張オフィス」と改称</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2008-02</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>社名を「株式会社コルジス」に変更</div>
                      <div>本社登記を幕張オフィスに変更</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2009-12</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div> 「EC一気通貫」システム開発完了</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2010-05</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>資本金を30,000千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-12</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>資本金を35,000千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2011-01</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>資本金を37,500千円に増資</div>
                      <div>「物流/店舗/受注」連動パッケージ完成</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">-02</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>資本金を39,000千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2014-04</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div> 資本金を40,500千円に増資</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2016-08</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div> 経営革新計画 承認</div>
                      <div> 「在庫を持たずにオンデマンドでの商品流通を可能にした販売支援システムの提供」</div>
                    </div>
                  </div>

                  <div class="row mb-1">
                    <div class="col-sm-3 col-md-2">
                      <div class="text-right">2018-11</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                      <div>バングラデシュにソフト開発拠点として子会社Colgis BD Ltd 設立</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

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
