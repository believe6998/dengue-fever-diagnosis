@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', ['f_image_code' => 'banner_about_us', 'f_title'=>'Về chúng tôi', 'f_children_title'=>'Về chúng tôi'])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-742" class="post-742 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid about-us vc_custom_1494840085149 ftc-row-wide">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="ftc-heading heading-1 style-1"><h1>Thương hiệu Gosport</h1></div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  vc_custom_1490005130015">
                      <div class="wpb_wrapper">
                        <p>Thể thao là ADN, là nguyên liệu cho mọi hoạt động sống.</p>
                        <p>Gosport tin rằng: Có sức khỏe tốt là điều kiện cần cho một cuộc sống hạnh phúc.</p>
                        <p>Gosport lấy khách hàng làm trung tâm. Gia tăng giá trị sống cho khách hàng.</p>
                        <p>Gosport liên tục thay đổi, phát triển để mang lại những sản phẩm thương hiệu và công nghệ mới
                          tới tay khách hàng.</p>
                        <p>Chất lượng dịch vụ là yếu tố tiên quyết trong mọi giao dịch khách hàng.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ab-img wpb_column vc_column_container vc_col-sm-6">
                  <div class="wpb_wrapper">
                    <div class="ftc-smooth-image smooth-image ftc-smooth">
                      <img loading="lazy" width="570" height="233"
                           src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20570%20233'%3E%3C/svg%3E"
                           class="img wp-post-image" alt=""
                           data-lazy-srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1.jpg 570w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-270x110.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-548x224.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-300x123.jpg 300w"
                           data-lazy-sizes="(max-width: 570px) 100vw, 570px"
                           data-lazy-src="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1.jpg"/>
                      <noscript>
                        <img width="570" height="233"
                             src="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1.jpg"
                             class="img wp-post-image" alt=""
                             srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1.jpg 570w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-270x110.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-548x224.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/03/about-story-1-300x123.jpg 300w"
                             sizes="(max-width: 570px) 100vw, 570px"/>
                      </noscript>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row wpb_row vc_row-fluid about-us ftc-row-wide">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="ftc-heading heading-1 style-1"><h1>Dịch vụ của chúng tôi</h1></div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                  <div class="wpb_wrapper">
                    <div
                      class="vc_progress_bar wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_progress-bar-color-bar_grey">
                      <div class="vc_general vc_single_bar vc_progress-bar-color-bar_orange"><small class="vc_label">Wordpress</small>
                        <span class="vc_bar animated" data-percentage-value="100" data-value="100"></span>
                      </div>
                      <div class="vc_general vc_single_bar vc_progress-bar-color-bar_orange"><small class="vc_label">Photoshop</small>
                        <span class="vc_bar animated" data-percentage-value="80" data-value="80"></span>
                      </div>
                      <div class="vc_general vc_single_bar vc_progress-bar-color-bar_orange"><small class="vc_label">HTML/CSS</small>
                        <span class="vc_bar animated" data-percentage-value="90" data-value="90"></span>
                      </div>
                      <div class="vc_general vc_single_bar vc_progress-bar-color-bar_orange"><small class="vc_label">Other</small>
                        <span class="vc_bar animated" data-percentage-value="50" data-value="50"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                        <p>Chúng tôi cung cấp sản phẩm thể thao thương hiệu có chất lượng, dịch vụ đảm bảo nhất</p>
                        <p>Chúng tôi cung cấp dịch vụ tư vấn miễn phí bao gồm: tư vấn Décor HomeGym, Set up Fitness,
                          Công nghệ EMS, Công nghệ Golf 3D,…</p>
                        <p>Chúng tôi cam kết tạo ra giá trị thực và đáp ứng tốt nhất nhu cầu khách hàng</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main>
        </div>
      </div>
    </div>
    {{-- CONTENT END --}}
  </div>
@endsection
