@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', [ 'f_image_code' => 'banner_contact_us', 'f_title'=>'Liên hệ', 'f_children_title'=>'Liên hệ' ])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-801" class="post-801 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid st-row-info-contact vc_custom_1507881303574 ftc-row-boxed">
                <div class="contact_info_map wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                        <div class="info_contact">
                          <div class="info_column address">
                            <ul>
                              <li>236 Hoàng Quốc Việt, Cổ Nhuế, Bắc Từ Liêm, Hà Nội</li>
                            </ul>
                          </div>
                          <div class="info_column phone">
                            <ul>
                              <li>Phone: 0793 245 698</li>
                            </ul>
                          </div>
                          <div class="info_column email">
                            <ul>
                              <li>Email:
                                <a href="mailto:MTA@gmail.com">MTA@gmail.com</a>
                              </li>
                              <li>Web:
                                <a href="{{url('/home')}}">MTA</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row wpb_row vc_row-fluid vc_custom_1509504150823 ftc-row-wide">
                <div class="blank-column wpb_column vc_column_container vc_col-sm-3">
                  <div class="wpb_wrapper"></div>
                </div>
                <div class="contact_form wpb_column vc_column_container vc_col-sm-6">
                  <div class="wpb_wrapper">
                    <div role="form" class="wpcf7" id="wpcf7-f9-p801-o1" lang="vi-VN" dir="ltr">
                      <h3 style="text-align: center; margin: 6px">ĐĂNG KÝ TƯ VẤN</h3>
                      <div class="screen-reader-response">
                        @isset($success)
                          {{$success}}
                        @endisset
                      </div>
                      <form method="post" class="wpcf7-form" data-toggle="validator" action="/contact-us">
                        @method('POST')
                        @csrf
                        <p>
                          <label>
                            <span class="wpcf7-form-control-wrap your-name">
                              <input
                                placeholder="Tên*" required
                                type="text" name="name" value="{{old('name')}}" size="40"
                                class="wpcf7-form-control wpcf7-text"
                              />
                              <span class="text-danger">{{$errors->first('name')}}</span>
                            </span>
                          </label>
                        </p>
                        <p>
                          <label>
                            <span class="wpcf7-form-control-wrap your-email">
                              <input
                                placeholder="Email*" required
                                type="email" name="email" value="{{old('email')}}" size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                              />
                              <span class="text-danger">{{$errors->first('email')}}</span>
                            </span>
                          </label>
                        </p>
                        <p>
                          <label>
                            <span class="wpcf7-form-control-wrap your-phone">
                              <input
                                placeholder="Số điện thoại*" required
                                type="text" name="phone" size="40" value="{{old('phone')}}"
                                class="wpcf7-form-control wpcf7-text"
                              />
                              <span class="text-danger">{{$errors->first('phone')}}</span>
                            </span>
                          </label>
                        </p>
                        <p>
                          <label>
                            <span class="wpcf7-form-control-wrap your-message">
                              <textarea
                                name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                placeholder="Triệu chứng*" required
                              >{{old('content')}}</textarea>
                              <span class="text-danger">{{$errors->first('content')}}</span>
                            </span>
                          </label>
                        </p>
                        <p>
                          <input type="submit" value="Gửi thông tin" class="wpcf7-form-control wpcf7-submit"/>
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="blank-column wpb_column vc_column_container vc_col-sm-3">
                  <div class="wpb_wrapper"></div>
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
