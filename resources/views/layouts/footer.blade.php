<footer id="colophon" class="site-footer">
  <div class="widget-column footer-top">
    <div class="container">
      <div id="ftc_footer-118" class="widget ftc-footer">
        <div class="vc_row wpb_row vc_row-fluid newsletter-footer vc_custom_1562560560816 ftc-row-wide">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="wpb_wrapper" style="background-color: #2c2c2c">
              <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1536074651828 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                          <div class="text-half"><h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                            <p>Để lại thông tin liên lạc của bạn, chúng tôi sẽ liên hệ tư vấn cho bạn.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="foot-home wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  vc_custom_1562747890004">
                        <div class="wpb_wrapper">
                          <div id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1765">
                            <div class="mc4wp-form-fields">
                              <input
                                id="mc4wp-input-phone-1" type="number"
                                name="phone" placeholder="Nhập số điện thoại"
                              />
                              <p class="submit-footer"><input id="mc4wp-submit-1" type="submit" value="Gửi"/></p>
                            </div>
                            <div class="mc4wp-response">
                              <div class="mc4wp-alert mc4wp-error">
                                <p id="mc4wp-alert-1"></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="widget-column footer-middle">
    <div class="container">
      <div id="ftc_footer-113" class="widget ftc-footer">
        <div class="vc_row wpb_row vc_row-fluid footer-middle-1 vc_custom_1567481311068 ftc-row-wide">
          <div class="ft-mid-contact-h1 wpb_column vc_column_container vc_col-sm-9">
            <div class="wpb_wrapper">
              <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper"><h4 class="widget-title heading-title">Liên hệ</h4>
                  <div class="info-com">
                    <ul class="no-padding info-company">
                      <li>
                        <i class="fa fa-map-marker"></i>Địa chỉ:
                        <span class="footer-info">
                          236 Hoàng Quốc Việt, Cổ Nhuế, Bắc Từ Liêm, Hà Nội
                        </span>
                      </li>
                      <li>
                        <i class="fa fa-phone"></i>Điện thoại: <span class="footer-info">0793.245.698</span>
                      </li>
                      <li>
                        <i class="fa fa-clock-o"></i>
                        <p class="open">Giờ mở cửa:</p>
                        <p class="footer-p">T2 - CN: <span class="footer-info">8:00 AM - 5:30 PM</span></p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="wpb_wrapper">
              <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                  <h4 class="widget-title heading-title">Site map</h4>
                  <ul class="no-padding bullet">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li><a href="{{url('/diagnose')}}">Tư vấn</a></li>
                    <li><a href="{{url('/blog')}}">Tin tức</a></li>
                    <li><a href="{{url('/contact-us')}}">Liên hệ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="widget-column footer-bottom">
    <div class="container">
      <div id="ftc_footer-114" class="widget ftc-footer">
        <div class="vc_row wpb_row vc_row-fluid footer-bot vc_custom_1537414440462 ftc-row-wide">
          <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="wpb_wrapper">
              <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                  <div class="copy-com" style="color: #999999;">© 2020. All rights reserved.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@section('js-import')
  <script>
    $(document).ready(function () {
      $('#mc4wp-submit-1').click(function () {
        let phone = $('#mc4wp-input-phone-1').val()
        if (phone == '' || phone.length < 10) {
          $('#mc4wp-alert-1').text('Số điện thoại không đúng định dạng!')
          return
        }
        let _token = $('meta[name="csrf-token"]').attr('content')
        $.ajax({
          url: "/contact-us/add",
          type: "POST",
          data: {phone: phone, _token: _token},
          success: function (response) {
            console.log(response)
            if (response && response.success) {
              $('#mc4wp-alert-1').text('Gửi liên hệ thành công!')
              $('#mc4wp-input-phone-1').val('')
            } else {
              $('#mc4wp-alert-1').text(response.message)
            }
          },
          error: function () {
            $('#mc4wp-alert-1').text('Có lỗi xảy ra vui lòng thử lại sau!')
          }
        })
      })
    })
  </script>
@endsection
