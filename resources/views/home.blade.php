@extends('layouts.app')

@section('content')
  <div id="main-content" class="site-main-content">
    <section class="site-content-area">

      <!--BANNER-->
      <div class="uni-banner">
        <div class="uni-owl-one-item owl-carousel owl-theme">
          <div class="item">
            <div class="uni-banner-img uni-background-6"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Hãy để chúng tôi bảo vệ sức khỏe của bạn</h1>
                  <p>
                    Chúng tôi là Hệ thống Y tế phi lợi nhuận do Học viện KTQS đầu tư phát triển với sứ mệnh "Chăm sóc
                    bằng tài năng, y đức và sự thấu cảm".
                    <br>
                    Một sản phẩm của học viện Kỹ thuật Quân sự.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="uni-banner-img uni-background-5"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Let us protect your health</h1>
                  <p>
                    Quy tụ đội ngũ chuyên gia, bác sĩ, dược sĩ và điều dưỡng được đào tạo bài bản đến chuyên sâu tại
                    Việt nam và nhiều nước có nên y học phát triển như Mỹ, Anh, Pháp... Luôn lấy người bệnh là trung
                    tâm, Vinmec cam kết mang lại dịch vụ chăm sóc sức khỏe toàn diện và chất lượng cao cho khách hàng.
                    <br>
                    Một sản phẩm của học viện Kỹ thuật Quân sự.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="uni-banner-img uni-background-7"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Let us protect your health</h1>
                  <p>
                    Tại Bệnh viện HVKTQS Hà Nội, quý khách sẽ được trải nghiệm các dịch vụ chăm sóc sức khỏe chất lượng
                    cao đạt tiêu chuẩn quốc tế.
                    <br>
                    Một sản phẩm của học viện Kỹ thuật Quân sự.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--BOOK APPOINTMENTS-->
{{--      <div class="uni-home-2-book-appointment uni-background-3">--}}
{{--        <div class="container">--}}
{{--          <div class="uni-home-title">--}}
{{--            <h3>Đặt lịch khám</h3>--}}
{{--          </div>--}}
{{--          <form action="#">--}}
{{--            <div class="row">--}}
{{--              <div class="col-md-4">--}}
{{--                <div class="input-group form-group">--}}
{{--                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>--}}
{{--                  <input type="text" class="form-control" name="name" value="" placeholder="your name">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                <div class="input-group form-group">--}}
{{--                  <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>--}}
{{--                  <input type="tel" class="form-control" name="phone" value="" placeholder="phone number">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                <div class="input-group form-group">--}}
{{--                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>--}}
{{--                  <input type="email" class="form-control" name="email" value="" placeholder="email">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                <div class="form-group">--}}
{{--                  <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">--}}
{{--                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>--}}
{{--                    <input name="date1" class="form-control" type="text" value="12-02-2017">--}}
{{--                    <span class="input-group-addon btn"><i class="fa fa-angle-down" id="ti-calendar1"--}}
{{--                                                           aria-hidden="true"></i></span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                <div class="input-group form-group">--}}
{{--                  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>--}}
{{--                  <input type="text" class="form-control" name="note" value="" placeholder="Note">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-md-4">--}}
{{--                <button class="vk-btn vk-btn-send">Đặt lịch khám</button>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}

      <!--DEPARTMENTS-->
      <div class="uni-hơm-1-department">
        <div class="container">
          <div class="uni-home-title">
            <h3>Các khoa</h3>
            <div class="uni-underline"></div>
          </div>
          <div class="uni-shortcode-icon-box-1">
            <div class="row">
              <div class="col-md-4  col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-5.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>TIM MẠCH</h4>
                    <p>Khoa Tim mạch của Bệnh viện HVKTQS Hà Nội bao gồm đội ngũ bác sỹ tim mạch nội khoa và bác sĩ can
                      thiệp tim mạch.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-4.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>THẦN KINH</h4>
                    <p>Với phương châm tận tụy và hết mình vì người bệnh, Chuyên khoa Nội thần kinh luôn hướng tới quy
                      trình thăm khám, chẩn đoán và điều trị bệnh đạt tiêu chuẩn quốc tế. Hệ thống phòng khám khang
                      trang, trang thiết bị hiện đại, cùng đội ngũ y bác sĩ giàu kinh nghiệm, sẽ mang lại cho người bệnh
                      sự an tâm và tin tưởng tuyệt đối về chất lượng dịch vụ y tế hoàn hảo.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-3.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>CHẤN THƯƠNG - CHỈNH HÌNH</h4>
                    <p>Khoa chấn thương chỉnh hình là nơi cung cấp các giải pháp điều trị và theo dõi tất cả các tình
                      trạng bệnh chấn thương chỉnh hình. Phương châm hoạt động của Khoa chấn thương chỉnh hình FV là
                      cung cấp dịch vụ chăm sóc bệnh nhân vượt trội.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-2.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>UNG THƯ - XẠ TRỊ</h4>
                    <p>Là chuyên khoa sâu, đầu ngành tuyến cuối của Quân đội về chuyên ngành Ung thư, Xạ trị.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>NHÃN KHOA</h4>
                    <p>Khoa Mắt và Phẫu thuật khúc xạ – Bệnh viện HVKTQS cung cấp dịch vụ khám và điều trị toàn diện các
                      bệnh lý về mắt cho bệnh nhân ở mọi lứa tuổi.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>HÔ HẤP</h4>
                    <p>Thu dung, cấp cứu và điều trị các bệnh thuộc chuyên khoa lao và bệnh phổi cho các đối tượng là
                      quân nhân, chính sách, BHYT và bệnh nhân nhân dân..</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--OUR SERVICES-->
      <div class="uni-home-2-our-services">
        <div class="uni-our-services-2 uni-background-4">
          <div class="container">
            <div class="uni-home-title">
              <h3>Dịch vụ của chúng tôi</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-our-service-2-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="tab-nav">
                    <ul class="nav-pills nav-stacked">
                      <li class="active"><a href="#tab_a" data-toggle="pill">Phẫu thuật tim mạch</a></li>
                      <li><a href="#tab_b" data-toggle="pill">Phẫu thuật ghép giác mạc</a></li>
                      <li><a href="#tab_c" data-toggle="pill">Kiểm tra sức khỏe toàn thân</a></li>
                      <li><a href="#tab_d" data-toggle="pill">Chẩn đoán và điều trị ung thư</a></li>
                      <li><a href="#tab_e" data-toggle="pill">Điều trị viêm da</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_a">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Phẫu thuật Tim Lồng Ngực</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Phẫu thuật tim – lồng ngực là phương pháp điều trị ngoại khoa đối với các bệnh ảnh
                                hưởng đến các cơ quan bên trong ngực.
                                Đây thường được coi là phương pháp điều trị các bệnh về tim và phổi. Bác sĩ phẫu thuật
                                tim mạch được đào tạo để thực hiện
                                các ca phẫu thuật tim, phổi, thành ngực và cơ hoành. Các bác sĩ phẫu thuật được đào tạo
                                về chuyên khoa tim lồng ngực có thể
                                tiến hành điều trị các bệnh về tim như phẫu thuật bắc cầu động mạch vành và cấy ghép
                                tim.

                                Đối với phương pháp truyền thống, để tiếp cận ngực, bác sĩ phẫu thuật phải rạch một
                                đường 10 – 15cm (đường mổ) trên ngực.
                                Đây vẫn là phương pháp tiêu chuẩn trong một số tình trạng bệnh nhất định ở ngực, bao gồm
                                phẫu thuật ung thư phổi, nhưng nó
                                mang tính xâm lấn, cần có vết mổ lớn và lan rộng xuống phần xương sườn. Tuy đây là
                                phương pháp thường gặp nhất nhưng lại gây
                                ra chấn thương ngực lớn hơn, đau hơn và lâu phục hồi hơn để thực hiện các hoạt động cơ
                                bản.

                                Nhờ chuyên môn này, kỹ thuật tiên tiến này cho phép các bác sĩ phẫu thuật điều trị an
                                toàn nhiều loại bệnh về ngực như:
                              </p>
                              <ul>
                                <li>
                                  Gây dính màng phổi
                                </li>
                                <li>
                                  Bóc viêm mủ màng phổi
                                </li>
                                <li>
                                  Phẫu thuật giảm thể tích phổi để điều trị phổi thũng khí nặng
                                </li>
                                <li>
                                  Cắt bỏ các khối u trung thất
                                </li>
                                <li>
                                  Phẫu thuật ung thư phổi
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_b">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img1.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Phẫu thuật ghép giác mạc</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Phẫu thuật ghép giác mạc là phương pháp duy nhất để giảm tỷ lệ mù lòa do bệnh lý giác
                                mạc.
                                Phẫu thuật ghép giác mạc là phương pháp thay thế một phần hoặc toàn bộ chiều dày của
                                giác mạc
                                bị mờ đục bằng giác mạc lành, mang lại độ trong suốt của giác mạc, nhằm mục đích tăng
                                thị lực của mắt bị bệnh.
                                Tùy vào tình tình bệnh cụ thể để các bác sĩ đưa ra phác đồ điều trị phù hợp, điều trị
                                bằng thuốc hoặc phẫu thuật.
                                Phẫu thuật ghép giác mạc được tiến hành khi mắc các bệnh:
                              </p>
                              <ul>
                                <li>
                                  Giác mạc hình chóp (bề mặt giác mạc trở thành hình nón, gây mờ mắt)
                                </li>
                                <li>
                                  Bệnh loạn dưỡng giác mạc bẩm sinh di truyền
                                </li>
                                <li>
                                  Giác mạc bị thủng hoặc dọa thủng
                                </li>
                                <li>
                                  Sẹo giác mạc (do nhiễm trùng hoặc chấn thương)
                                </li>
                                <li>
                                  Viêm, loét giác mạc
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_c">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img2.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Kiểm tra sức khỏe toàn thân</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Hình thức khám linh hoạt: Khám tại Bệnh viện hoặc tại cơ quan, đơn vị. Khám
                                tất cả các ngày trong tuần kể cả ngày nghỉ. Quy trình khám khoa học, khép kín
                                và chuyên biệt giúp khách hàng không phải chờ đợi lâu. Sau khi có kết quả khám
                                tổng thể các Bác sỹ sẽ tư vấn và đưa ra những lời khuyên, khuyến cáo về sức khỏe,
                                giúp mọi người hiểu rõ thực trạng sức khỏe của mình để có biện pháp dự phòng, điều trị
                                tốt nhất.
                              </p>
                              <ul>
                                <li>
                                  Gói kiểm tra sức khỏe cơ bản (Gói 1): Chi phí chỉ từ 1.290.960đ/ người
                                </li>
                                <li>
                                  Gói kiểm tra sức khỏe nâng cao (Gói 2): Chi phí từ 1.844.880đ/ người
                                </li>
                                <li>
                                  Gói kiểm tra sức khỏe toàn diện (Gói 3): Chi phí từ 7.864.720đ/ người
                                </li>
                                <li>
                                  Gói kiểm tra sức khỏe đặc biệt (Gói 4): Chi phí từ 46.621.900đ/ người
                                </li>
                                <li>
                                  Trung tâm khám sức khỏe định kỳ - Bệnh viện HVKTQS rất mong có cơ hội được gặp gỡ cũng
                                  như nhận được sự ủng hộ, hợp tác từ Bạn.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_d">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img3.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Chẩn đoán và điều trị ung thư</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Là Viện chuyên khoa sâu, đầu ngành tuyến cuối của Quân đội về chuyên ngành Ung thư, Xạ
                                trị.
                              </p>
                              <ul>
                                <li>
                                  Khám bệnh, chẩn đoán, thu dung, cấp cứu, điều trị bệnh nhân ung thư
                                </li>
                                <li>
                                  Tham gia thực hiện nhiệm vụ đào tạo sau đại học (tiến sĩ y học, chuyên khoa I, chuyên
                                  khoa II) thuộc chuyên ngành Ung thư, Xạ trị.
                                </li>
                                <li>
                                  Tham gia công tác chỉ đạo tuyến, huấn luyện đào tạo, hỗ trợ chuyên môn cho các đơn vị
                                  tuyến dưới trong công tác cấp cứu,
                                  điều trị về chuyên ngành Ung thư, Xạ trị toàn quân.
                                </li>
                                <li>
                                  Nghiên cứu khoa học về lĩnh vực Ung thư và Xạ trị, ứng dụng tiến bộ kỹ thuật mới, kỹ
                                  năng cao,nâng cao chất lượng chẩn đoán, cấp cứu và điều trị.
                                </li>
                                <li>
                                  Hợp tác quốc tế trong lĩnh vực đào tạo, nghiên cứu khoa học chuyên ngành để nhanh
                                  chóng hội nhập và đạt trình độ khu vực và quốc tế.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_e">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img3.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Điều trị viêm da</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Khoa Da liễu – Bệnh viện HVKTQS cũng cung cấp nhiều dịch vụ xét nghiệm và điều trị các
                                bệnh lây truyền qua đường tình dục.
                                Quy trình xét nghiệm và điều trị bệnh lây truyền qua đường tình dục ở Bệnh Viện FV được
                                thực hiện đơn giản và bảo mật.
                                Khoa Da liễu cũng cung cấp dịch vụ tư vấn và hướng dẫn về sức khỏe tình dục trên mọi
                                phương diện.
                              </p>
                              <ul>
                                <li>
                                  Ung thư da
                                </li>
                                <li>
                                  Chàm và Dị ứng
                                </li>
                                <li>
                                  Bệnh truyền nhiễm
                                </li>
                                <li>
                                  Bệnh lây truyền qua đường tình dục
                                </li>
                                <li>
                                  Bệnh lý viêm
                                </li>
                              </ul>
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

      <!--OUR DOCTOR-->
      <div class="uni-home-2-our-doctor">
        <div class="uni-shortcode-team-1">
          <div class="container">

            <div class="uni-home-title">
              <h3>Các chuyên gia</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-owl-four-item owl-carousel owl-theme">
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-5.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>adam jonson</h4>
                        <span>Bác sĩ tim mạch</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-4.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>henrik larsson</h4>
                        <span>Chuyên gia thần kinh học</span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img2.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-3.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>amanda smith</h4>
                        <span>Bác sĩ nhãn khoa</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img3.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-2.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>david martin</h4>
                        <span>Chuyên gia điều trị ung thư</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-5.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>adam jonson</h4>
                        <span>Bác sĩ tim mạch</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-4.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>henrik larsson</h4>
                        <span>Bác sĩ đa khoa</span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 COUNTER-->
      <div class="uni-home-2-counter">
        <div class="uni-shortcode-counter-2 uni-background-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-user-md" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 94</li>
                    <li class="counter-text"> bác sĩ</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-smile-o" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 792</li>
                    <li class="counter-text"> khách hàng</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 10</li>
                    <li class="counter-text"> năm kinh nghiệm</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 ICON BOXS-->
      <div class="uni-home-2-icons-box">
        <div class="uni-shortcode-icons-box-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>Các bác sĩ chuyên nghiệp</h4>
                    <div class="uni-line"></div>
                    <p>
                      Học viện Kỹ thuật Quân sự
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      Dịch vụ 24/7
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Phục vụ tận tình, chu đáo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      Thiết bị hiện đại
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Thiết bị được nhập khẩu toàn bộ mới nhất từ Mỹ.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      Bác sĩ tận tâm
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Chúng tôi luôn quan tâm đầu tiên đến sức khỏe của bệnh nhân.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      Gọi trong 10 phút
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Đội ngũ chăm sóc khách hàng chuyên sâu, tận tình.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-commenting" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      Sự giúp đỡ và hỗ trợ nhiệt thành
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Đội ngũ chăm sóc khách hàng chuyên sâu, tận tình.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--home 2 custommer say-->
      <div class="uni-home-2-custommer-say">
        <div class="uni-shortcode-testimonials-2 uni-background-3">
          <div class="container">

            <div class="uni-home-title">
              <h3>Custommer say</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-owl-two-item owl-carousel owl-theme">
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>amanda smith</h4>
                          <p class="testimonial_subtitle">Cận thị</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Tuyệt vời. Tôi đã nhìn lại được.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>adam jonson</h4>
                          <p class="testimonial_subtitle">Gãy xương</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Bệnh viện giúp tôi đi lại được bình thường.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>amanda smith</h4>
                          <p class="testimonial_subtitle">Cận thị</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Tuyệt vời. Tôi đã nhìn lại được.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>adam jonson</h4>
                          <p class="testimonial_subtitle">Gãy xương</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Bệnh viện giúp tôi đi lại được bình thường.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 LATEST POST-->
      <div class="uni-home-2-latest-post">
        <div class="container">
          <div class="uni-home-title">
            <h3>Latest Post</h3>
            <div class="uni-underline"></div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img1.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Bệnh viện Học viện Kỹ thuật Quân sự</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar"
                                                                                        aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user"
                                                                                                 aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Bệnh viện Học viện Kỹ thuật Quân sự.
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Bệnh viện Học viện Kỹ thuật Quân sự</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar"
                                                                                        aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user"
                                                                                                 aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Bệnh viện Học viện Kỹ thuật Quân sự
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img-1.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Bệnh viện Học viện Kỹ thuật Quân sự</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar"
                                                                                        aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user"
                                                                                                 aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Bệnh viện Học viện Kỹ thuật Quân sự
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
  </div>
@endsection
