<!DOCTYPE html>
<html>

<head>
  <title>お問い合せ</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/logo.png">
  <!-- bootstrap-css -->
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  <link rel="stylesheet/less" type="text/css" href="menu.less" />

  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/header_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/footer_style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/service_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/recruit_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/contact_styles.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/related_companies_styles.css') }}" rel='stylesheet' type='text/css' />

  <!-- //font-awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

  <style>
    .error_msg {
      color: red;
      font-size: 12px;
    }

    .error_input {
      border: 1px solid red !important;
    }
  </style>

</head>

<body>

  <div class="container ">
    <div class="whole-border">
      <div class="row">
        <script>
          // $(function () {
          //   $("#headerPage").load("header.html");
          //   $("#footerPage").load("footer.html");
          // });
        </script>
        <!--============================= start nav bar ================================-->
        {{-- <div id="headerPage"></div> --}}
        @include('layouts.header')
        <!--============================= end navabr ================================-->
        <!--============================= Contact us title left  ================================-->
        <section class="contact_banner_part">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 col-xl-12">
                <div class="banner-image-top">
                  <img src="images/contact1.jpg" class="img-fluid" alt="Contact Bannar">
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="col-lg-12 col-xl-12">
          <section class="contact-us-section">
            <div class="container">
              <div class="row ">
                <div class="col-lg-4 col-xl-4">
                  <div class="banner_left-title">
                    <h3 class="text-da mb-2">お問い合わせ</h3>
                    <h5>CONTACT</h5>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="contact-us-form pd-20">
            <div class="container">
              <div class="row ">
                <div class="col-lg-12">
                  <div class="form-wrapper">
                    <form id="contactus_form">
                      @csrf
                      <div class="form-group row">
                        <label for="inputContentQuery" class="col-sm-3 col-form-label">お問い合わせ内容 <span
                            class="text-danger">※</span></label>
                        <div class="col-sm-9">
                          <select id="inputState" name="inputState" class="form-control" maxlength="100">
                            <option value="WMS(iManager.Link Drive)について" selected="">WMS(iManager.Link Drive)について
                            </option>
                            <option value="システム開発(定期購入特化型ECシステム)について">システム開発(定期購入特化型ECシステム)について</option>
                            <option value="システム開発(東西物流分散の物流システム)について">システム開発(東西物流分散の物流システム)について</option>
                            <option value="その他システム開発について">その他システム開発について</option>
                            <option value="資料請求">資料請求</option>
                            <option value="その他">その他</option>
                          </select>
                          <span id="state_error_msg" class="error_msg"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputConactName" class="col-sm-3 col-form-label">ご担当者様名 <span
                            class="text-danger">※</span></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputConactName" name="inputConactName"
                            placeholder="ご担当者様名" maxlength="100">
                          <span id="name_error_msg" class="error_msg"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputAddress" class="col-sm-3 col-form-label">ご住所</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputAddress" name="inputAddress"
                            placeholder="ご住所" maxlength="100">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmailAddress" class="col-sm-3 col-form-label">ご連絡先メールアドレス <span
                            class="text-danger">※</span></label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmailAddress" name="inputEmailAddress"
                            maxlength="100" placeholder="ご連絡先メールアドレス">
                          <span id="email_error_msg" class="error_msg"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhoneNumber" class="col-sm-3 col-form-label"> 電話番号</label>
                        <div class="col-sm-9">
                          {{-- <input type="number" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber"
                            placeholder="電話番号" maxlength="13"> --}}
                            <input type="text" class="form-control" id="inputPhoneNumber" oninput="this.value = this.value.replace(/[^0-9]{1,}[-]{1}/g, '').replace(/(\..*)\./g, '$1');" onkeypress="return (event.charCode ==45 || (event.charCode >= 48 && event.charCode <= 57))" name="inputPhoneNumber" placeholder="電話番号" maxlength="13">
                            <!-- <input type="text" class="form-control" id="inputPhoneNumber" oninput="this.value = this.value.replace(/[^0-9]{1,}[-]{1}/g, '').replace(/(\..*)\./g, '$1');" onkeypress="return (event.charCode ==45 || (event.charCode >= 48 && event.charCode <= 57))" name="inputPhoneNumber" placeholder="電話番号" maxlength="13"> -->
                            <span id="tel_error_msg" class="error_msg"></span>
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label for="message" class="col-sm-3 col-form-label"> 連絡事項</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="message" name="message" rows="6"
                            style="white-space: pre-wrap;"></textarea>
                        </div>
                      </div>

                      <div class="col-lg-12 col-xl-12 mb-5">
                        <div class="d-flex justify-content-center mt-2 action-button-wrap ">
                          <a href="#" onclick="showData()" class="action-button animate navy_blue">確認画面へ</a>
                        </div>
                      </div>

                      {{-- data show modal start here --}}
                      <div class="modal fade" id="contactSubmitModal">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4>確認画面</h4>
                            </div>
                            <div class="modal-body p-4">
                              <div class="mb-4">
                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>お問い合わせ内容 </span><span class="text-danger">※</span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span id="modal_inputState"></span>
                                  </div>
                                </div>

                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>ご担当者様名 </span><span class="text-danger">※</span>
                                  </div>
                                  <div class="col-sm-8">
                                      <div style="width: 100%; float: left;">
                                    <span id="modal_inputConactName" style="width: 100%; float: left;white-space:normal; word-break:break-all;"></span>
                                </div>
                                  </div>
                                </div>

                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>ご住所</span>
                                  </div>
                                  <div class="col-sm-8">
                                    <div style="width: 100%; float: left;">

                                    <span id="modal_inputAddress" style="width: 100%; float: left;white-space:normal; word-break:break-all;"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>ご連絡先メールアドレス </span><span class="text-danger">※</span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span id="modal_inputEmailAddress"></span>
                                  </div>
                                </div>

                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>電話番号</span>
                                  </div>
                                  <div class="col-sm-8">
                                    <span id="modal_inputPhoneNumber"></span>
                                  </div>
                                </div>

                                <div class="row mb-2">
                                  <div class="col-sm-4">
                                    <span>連絡事項</span>
                                  </div>
                                  <div class="col-sm-8">

                                    <div style="width: 100%; float: left;">
                                    <span style="white-space:normal; word-break:break-all;width: 100%; float: left;" id="modal_message"></span>
                                    </div>
                                </div>
                                </div>
                              </div>

                              <div class="float-right">
                                <button type="button" class="btn" data-dismiss="modal"
                                  style="background: #10395C;color: #fff;letter-spacing: .5px;font-size: 16px;padding: 3px 12px;"><i
                                    class="fas fa-angle-left"></i> 戻る</button>
                                <button type="button" id="confirmId" class="btn"
                                  style="background: #10395C;color: #fff;letter-spacing: .5px;font-size: 16px;padding: 3px 12px;">送信
                                  <i class="fas fa-angle-right"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- data show modal end here --}}

                      {{-- success modal start here --}}
                      <div class="modal fade" id="submitConfModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div class="text-center justify-content-center py-4">
                                <h5 id="successMsg"></h5>
                              </div>
                              <button type="button" onclick=" location.reload();" class="btn float-right"
                                style="background: #10395C;color: #fff;letter-spacing: .5px;font-size: 16px;padding: 3px 12px;">閉じる
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- success modal end here --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>



        <!--============================= Contact us title left  ================================-->

        <div class="col-lg-12 col-xl-12">
          <section class="interview_blog_section pd-20">
            <div class="container">
              <div class="row ">
                <div class="col-lg-12 col-xl-12">
                  <div class="contact-text-wrap">
                    <span class="info-text display-6">情報の取り扱いについて</span>
                    <p>当お問い合わせフォームにおいて当社が知り得たお客様の情報は、原則として「弊社サービス情報の提供」、又は「弊社に対するご要望」に関する回答のために利用致します。</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        @include('layouts.footer')

        <!--[if lte IE 8]>
        <script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <!-- Latest compiled and minified CSS -->
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> --}}

  <script src="{{ asset('js/jquery.validate.js') }}"></script>
  <script>
    /* show data on modal start*/
      function showData() {

        if ($("#inputState").val() && $("#inputConactName").val() && $("#inputEmailAddress").val() && IsTel($("#inputPhoneNumber").val())==true && IsEmail($("#inputEmailAddress").val())==true )
        {

          $("#state_error_msg,#name_error_msg,#email_error_msg").html('');
          $("#inputState,#inputConactName,#inputEmailAddress").removeClass("error_input");

          var inputState = $("#inputState").val();
          var inputConactName = $("#inputConactName").val();
          var inputAddress = $("#inputAddress").val();
          var inputEmailAddress = $("#inputEmailAddress").val();
          var inputPhoneNumber = $("#inputPhoneNumber").val();
          var message = $("#message").val();

          $("#modal_inputState").html(inputState);
          $("#modal_inputConactName").html(inputConactName);
          $("#modal_inputAddress").html(inputAddress);
          $("#modal_inputEmailAddress").html(inputEmailAddress);
          $("#modal_inputPhoneNumber").html(inputPhoneNumber);
          $("#modal_message").html(message);

          $("#contactSubmitModal").modal('show');
        }
        else
        {
          if (!$("#inputState").val()) {
              $("#inputState").addClass("error_input");
              $("#state_error_msg").text("この項目は必須です。");
          }else{
              $("#inputState").removeClass("error_input");
              $("#state_error_msg").html('');
          }
          if (!$("#inputConactName").val()) {
              $("#inputConactName").addClass("error_input");
              $("#name_error_msg").text("この項目は必須です。");
          }else{
              $("#inputConactName").removeClass("error_input");
              $("#name_error_msg").html('');
          }
          if (!$("#inputEmailAddress").val()) {
              $("#inputEmailAddress").addClass("error_input");
              $("#email_error_msg").text("この項目は必須です。");

          }else{
            if(IsEmail($("#inputEmailAddress").val())==false){
              $("#inputEmailAddress").addClass("error_input");
              $("#email_error_msg").text("メールアドレスの形式が正しくありません。");
            }else{
              $("#inputEmailAddress").removeClass("error_input");
              $("#email_error_msg").html('');
            }
          }

          if(IsTel($("#inputPhoneNumber").val())==false){
              $("#inputPhoneNumber").addClass("error_input");
              $("#tel_error_msg").text("tel formate wrong..");
            }else{
              $("#inputPhoneNumber").removeClass("error_input");
              $("#tel_error_msg").html('');
            }

        }

      }
      /* email validation start*/
        function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email)) {
            return false;
          }else{
            return true;
          }
        }
      /* email validation end*/

      /* email validation start*/
      function IsTel(tel) {
          var regex = /^[0-9-]*$/;
          if(!regex.test(tel)) {
            return false;
          }else{
            return true;
          }
        }
      /* email validation end*/

    /* show data on modal end*/

    /* sent email start*/
      $('#confirmId').on("click", function(){
        $('#contactSubmitModal').hide();
        $('.modal-backdrop').hide();

        var _token = '{{ csrf_token() }}';
        var myData = $('#contactus_form').serialize();

        $.ajax({
            url:"{{route('sendmail')}}",
            method:"post",
            data: myData,
            success:function (response) {
                // console.log(response['success']);
                if (response['success']) {
                  $('#contactus_form')[0].reset();
                  $("#successMsg").text(response['success']);
                  $('#submitConfModal').modal('show');
                } else {
                  $('#contactus_form')[0].reset();
                  $("#successMsg").text('Failed to Sent Email');
                  $('#submitConfModal').modal('show');
                }
            }
        });

      });
    /* sent email end*/
  </script>

</body>

</html>
