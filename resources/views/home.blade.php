@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-911" class="post-911 page type-page status-publish hentry">
              {{-- BANNER --}}
              <div
                class="vc_row wpb_row vc_row-fluid slider-home3 vc_custom_1567495355583 ftc-row-wide"
                data-vc-full-width="true"
                data-vc-full-width-init="false"
              >
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper"><p class="rs-p-wp-fix"></p>
                    <rs-module-wrap
                      id="rev_slider_55_1_wrapper" data-source="gallery"
                      style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:"
                    >
                      <rs-module id="rev_slider_55_1" style="display:none;" data-version="6.1.2">
                        <rs-slides>
                          <rs-slide
                            data-key="rs-196" data-title="Slide"
                            data-thumb="{{ get_dynamic_image($dynamic_images, 'slider_image_1', 'slider_1.png') }}"
                            data-duration="6000ms" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;"
                          >
                            <img
                              loading="lazy"
                              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201170%20570'%3E%3C/svg%3E"
                              title="slider7.jpg" width="1170" height="570" data-bg="p:80% 0%;"
                              class="rev-slidebg" data-no-retina
                              data-lazy-src="{{ get_dynamic_image($dynamic_images, 'slider_image_1', 'slider_1.png') }}"
                            >
                            <noscript>
                              <img
                                src="{{ get_dynamic_image($dynamic_images, 'slider_image_1', 'slider_1.png') }}"
                                title="slider7.jpg" width="1170" height="570" data-bg="p:80% 0%;"
                                class="rev-slidebg" data-no-retina
                              >
                            </noscript>
                            <rs-layer
                              id="slider-55-slide-196-layer-1"
                              data-type="text"
                              data-color="#444444||#444444||#ffffff||#ffffff"
                              data-rsp_ch="on"
                              data-xy="x:l,l,l,c;xo:60px,60px,60px,0;y:m;yo:-37px;"
                              data-text="s:48,48,48,35;l:55;fw:600;a:left,left,inherit,left;"
                              data-frame_0="o:1;tp:600;"
                              data-frame_0_chars="x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power4.easeInOut;st:620;sp:1210;sR:620;"
                              data-frame_1_chars="d:10;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:3830;"
                              data-frame_999_mask="u:t;"
                              style="z-index:5;font-family:Montserrat;text-transform:uppercase;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_1', 'text1', 'Have a nice sale')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-196-layer-5"
                              data-type="text"
                              data-color="#444444||#444444||#ffffff||#ffffff"
                              data-rsp_ch="on"
                              data-xy="x:l,l,l,c;xo:60px,60px,60px,0;y:m;yo:-82px;"
                              data-text="s:16;l:26;fw:500;a:left,left,inherit,left;"
                              data-frame_0="o:1;tp:600;"
                              data-frame_0_chars="x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power4.easeInOut;st:620;sp:1210;sR:620;"
                              data-frame_1_chars="d:10;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:3630;"
                              data-frame_999_mask="u:t;"
                              style="z-index:7;font-family:Montserrat;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_1', 'text2', 'Online Exclusive')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-196-layer-6"
                              data-type="text"
                              data-color="#444444||#444444||#ffffff||#ffffff"
                              data-rsp_ch="on"
                              data-xy="x:l,l,l,c;xo:60px,60px,60px,0;y:m;yo:10px;"
                              data-text="s:16;l:34;fw:500;a:left,left,inherit,inherit;"
                              data-frame_0="x:-175%;o:1;tp:600;"
                              data-frame_0_mask="u:t;x:100%;"
                              data-frame_1="tp:600;e:Power3.easeOut;st:1720;sp:1450;sR:1720;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="x:left;skX:45px;tp:600;e:nothing;st:w;sR:4300;"
                              style="z-index:6;font-family:Montserrat;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_1', 'text3', 'Up to 70% off! Four days left !')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-196-layer-9"
                              data-src=""
                              class="rev-btn rev-withicon"
                              data-type="button"
                              data-color="rgba(255,255,255,1)"
                              data-xy="x:l,l,l,c;xo:60px,60px,60px,0;y:m;yo:73px;"
                              data-text="s:13,13,13,12;l:30;a:center;"
                              data-rsp_bd="off"
                              data-padding="l:15,15,15,10;"
                              data-frame_0="y:bottom;o:1;rX:-20deg;rY:-20deg;tp:600;"
                              data-frame_1="tp:600;e:Power3.easeOut;st:2390;sp:1500;sR:2390;"
                              data-frame_999="o:0;tp:600;e:Power2.easeIn;st:w;sp:1000;sR:4040;"
                              data-frame_hover="bgc:#cd5f49;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;"
                              style="z-index:5;background-color:#f02034;font-family:Arial, Helvetica, sans-serif;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                            >
                              <a
                                href="{{get_dynamic_image_content($dynamic_images, 'slider_image_1', 'url_go_to', '/products')}}">
                                {{get_dynamic_image_content($dynamic_images, 'slider_image_1', 'url_title', 'Shop now')}}
                                <i class="fa-angle-double-right"></i>
                              </a>
                            </rs-layer>
                          </rs-slide>
                          <rs-slide
                            data-key="rs-197" data-title="Slide"
                            data-thumb="{{get_dynamic_image($dynamic_images, 'slider_image_2', 'slider_2.png')}}"
                            data-duration="6000ms" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;"
                          >
                            <img
                              loading="lazy"
                              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201170%20570'%3E%3C/svg%3E"
                              title="sl2-h3.jpg" width="1170" height="570" data-bg="p:10% 0%;" class="rev-slidebg"
                              data-no-retina
                              data-lazy-src="{{get_dynamic_image($dynamic_images, 'slider_image_2', 'slider_2.png')}}"
                            >
                            <noscript>
                              <img
                                src="{{get_dynamic_image($dynamic_images, 'slider_image_2', 'slider_2.png')}}"
                                title="sl2-h3.jpg" width="1170" height="570" data-bg="p:10% 0%;"
                                class="rev-slidebg" data-no-retina
                              >
                            </noscript>
                            <rs-layer
                              id="slider-55-slide-197-layer-1"
                              data-type="text"
                              data-color="#444444"
                              data-rsp_ch="on"
                              data-xy="x:c;y:m;yo:-63px;"
                              data-text="s:48,48,38,30;l:55;ls:8px,8px,6px,0;fw:600;a:left,left,inherit,left;"
                              data-frame_0="o:1;tp:600;"
                              data-frame_0_chars="x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power4.easeInOut;st:620;sp:1210;sR:620;"
                              data-frame_1_chars="d:10;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:3430;"
                              data-frame_999_mask="u:t;"
                              style="z-index:9;font-family:Montserrat;text-transform:uppercase;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_2', 'text1', 'A BRAND ARRIVALS')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-197-layer-5"
                              data-type="text"
                              data-color="#444444"
                              data-rsp_ch="on"
                              data-xy="x:c;y:m;yo:1px;"
                              data-text="s:24,24,24,20;l:55;ls:5px;fw:500;a:left,left,inherit,left;"
                              data-frame_0="o:1;tp:600;"
                              data-frame_0_chars="x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power4.easeInOut;st:620;sp:1210;sR:620;"
                              data-frame_1_chars="d:10;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:3330;"
                              data-frame_999_mask="u:t;"
                              style="z-index:10;font-family:Montserrat;text-transform:uppercase;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_2', 'text2', 'MINIMAL & MODERN LOOK')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-197-layer-10"
                              class="rev-btn rev-withicon"
                              data-type="button"
                              data-color="rgba(255,255,255,1)"
                              data-xy="x:c;y:m;yo:73px;"
                              data-text="s:13;l:30;a:center;"
                              data-rsp_bd="off"
                              data-padding="l:15;"
                              data-frame_0="x:-175%;o:1;tp:600;"
                              data-frame_0_mask="u:t;x:100%;"
                              data-frame_1="tp:600;e:Power3.easeOut;st:2430;sp:1500;sR:2430;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="x:-100%;tp:600;st:w;sp:1000;sR:4000;"
                              data-frame_999_mask="u:t;"
                              data-frame_hover="bgc:#cd5f49;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;"
                              style="z-index:11;background-color:#f02034;font-family:Arial, Helvetica, sans-serif;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                            >
                              <a
                                href="{{get_dynamic_image_content($dynamic_images, 'slider_image_2', 'url_go_to', '/products')}}">
                                {{get_dynamic_image_content($dynamic_images, 'slider_image_2', 'url_title', 'Shop now')}}
                                <i class="fa-angle-double-right"></i>
                              </a>
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-197-layer-17"
                              data-type="image"
                              data-rsp_ch="on"
                              data-xy="xo:771px,642px,472px,210px;yo:206px,231px,268px,257px;"
                              data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                              data-dim="w:430px,355px,269px,255px;h:220px,181px,137px,130px;"
                              data-frame_999="o:0;st:w;"
                              style="z-index:4;font-family:Montserrat;"
                            >
                            </rs-layer>
                          </rs-slide>
                          <rs-slide
                            data-key="rs-198" data-title="Slide"
                            data-thumb="{{get_dynamic_image($dynamic_images, 'slider_image_3', 'slider_3.png')}}"
                            data-duration="6000ms" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;"
                          >
                            <img
                              loading="lazy"
                              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201170%20570'%3E%3C/svg%3E"
                              title="sl3-h3.jpg" width="1170" height="570" data-bg="p:left center;"
                              class="rev-slidebg" data-no-retina
                              data-lazy-src="{{get_dynamic_image($dynamic_images, 'slider_image_3', 'slider_3.png')}}"
                            >
                            <noscript>
                              <img
                                src="{{get_dynamic_image($dynamic_images, 'slider_image_3', 'slider_3.png')}}"
                                title="sl3-h3.jpg" width="1170" height="570" data-bg="p:left center;"
                                class="rev-slidebg" data-no-retina
                              >
                            </noscript>
                            <rs-layer
                              id="slider-55-slide-198-layer-1"
                              data-type="text"
                              data-rsp_ch="on"
                              data-xy="x:r,r,r,c;xo:60px,60px,60px,0;y:m;yo:-37px;"
                              data-text="s:48,48,48,35;l:55;fw:600;a:left,left,inherit,left;"
                              data-frame_0="sX:2;sY:2;tp:600;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power2.easeOut;st:620;sp:1000;sR:620;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:5340;"
                              data-frame_999_mask="u:t;"
                              style="z-index:7;font-family:Montserrat;text-transform:uppercase;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_3', 'text1', 'Shop New arrivals')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-198-layer-5"
                              data-type="text"
                              data-rsp_ch="on"
                              data-xy="x:r,r,r,c;xo:60px,60px,60px,0;y:m;yo:-82px;"
                              data-text="l:26;fw:500;a:left,left,inherit,left;"
                              data-frame_0="o:1;tp:600;"
                              data-frame_0_chars="x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
                              data-frame_0_mask="u:t;"
                              data-frame_1="tp:600;e:Power4.easeInOut;st:620;sp:1210;sR:620;"
                              data-frame_1_chars="d:10;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="y:100%;sX:0.7;sY:0.7;rZ:0deg;tp:600;st:w;sR:4430;"
                              data-frame_999_mask="u:t;"
                              style="z-index:11;font-family:Montserrat;text-transform:uppercase;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_3', 'text2', 'From $10')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-198-layer-6"
                              data-type="text"
                              data-rsp_ch="on"
                              data-xy="x:r,r,r,c;xo:60px,60px,60px,0;y:m;yo:10px;"
                              data-text="s:16;l:34;fw:500;a:left,left,inherit,inherit;"
                              data-frame_0="x:-175%;o:1;tp:600;"
                              data-frame_0_mask="u:t;x:100%;"
                              data-frame_1="tp:600;e:Power3.easeOut;st:1720;sp:1450;sR:1720;"
                              data-frame_1_mask="u:t;"
                              data-frame_999="x:left;skX:45px;tp:600;e:nothing;st:w;sR:4300;"
                              style="z-index:10;font-family:Montserrat;"
                            >
                              {{get_dynamic_image_content($dynamic_images, 'slider_image_3', 'text3', 'Mini Store Design')}}
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-198-layer-10"
                              class="rev-btn rev-withicon"
                              data-type="button"
                              data-color="rgba(255,255,255,1)"
                              data-xy="x:r,r,r,c;xo:60px,60px,60px,0;y:m;yo:73px;"
                              data-text="s:13;l:30;a:center;"
                              data-rsp_bd="off"
                              data-padding="l:15;"
                              data-frame_0="x:200px;skX:-85px;tp:600;"
                              data-frame_1="tp:600;e:Power4.easeOut;st:2330;sp:1500;sR:2330;"
                              data-frame_999="y:-100%;tp:600;e:nothing;st:w;sR:4100;"
                              data-frame_999_mask="u:t;"
                              data-frame_hover="bgc:#cd5f49;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;"
                              style="z-index:12;background-color:#f02034;font-family:Arial, Helvetica, sans-serif;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                            >
                              <a
                                href="{{get_dynamic_image_content($dynamic_images, 'slider_image_3', 'url_go_to', '/products')}}">
                                {{get_dynamic_image_content($dynamic_images, 'slider_image_3', 'url_title', 'Shop now')}}
                                <i class="fa-angle-double-right"></i>
                              </a>
                            </rs-layer>
                            <rs-layer
                              id="slider-55-slide-198-layer-16"
                              data-type="image"
                              data-rsp_ch="on"
                              data-xy="xo:735px,565px,425px,277px;yo:318px,323px,288px,311px;"
                              data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                              data-dim="w:290px,239px,232px,166px;h:211px,174px,169px,121px;"
                              data-frame_999="o:0;st:w;"
                              style="z-index:5;font-family:Montserrat;"
                            >
                            </rs-layer>
                          </rs-slide>
                        </rs-slides>
                        <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                      </rs-module>
                    </rs-module-wrap>
                  </div>
                </div>
              </div>
              {{-- BANNER END --}}
              <div class="vc_row-full-width"></div>
              {{-- BANNER 2 --}}
              <div
                class="vc_row wpb_row vc_row-fluid single-img-home4 vc_custom_1512974067575 ftc-row-wide"
                data-vc-full-width="true" data-vc-full-width-init="false"
              >
                <div class="wpb_column vc_column_container vc_col-sm-3">
                  <div class="wpb_wrapper">
                    <a
                      class="ftc-smooth-image smooth-image ftc-smooth"
                      href="{{get_dynamic_image_content($dynamic_images, 'home_image_1', 'url_go_to', '/products?category=7')}}"
                      title="{{get_dynamic_image_content($dynamic_images, 'home_image_1', 'url_title', '')}}"
                    >
                      <img
                        loading="lazy" width="270" height="400"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20400'%3E%3C/svg%3E"
                        class="img wp-post-image" alt=""
                        data-lazy-sizes="(max-width: 270px) 100vw, 270px"
                        data-lazy-src="{{get_dynamic_image($dynamic_images, 'home_image_1', 'home_image_1.png')}}"
                      />
                    </a>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-9">
                  <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1512835915925">
                      <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">
                            <a
                              class="ftc-smooth-image smooth-image ftc-smooth"
                              href="{{get_dynamic_image_content($dynamic_images, 'home_image_2', 'url_go_to', '/products?category=2')}}"
                              title="{{get_dynamic_image_content($dynamic_images, 'home_image_2', 'url_title', '')}}"
                            >
                              <img
                                loading="lazy" width="570" height="185"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20570%20185'%3E%3C/svg%3E"
                                class="img wp-post-image"
                                alt=""
                                data-lazy-sizes="(max-width: 570px) 100vw, 570px"
                                data-lazy-src="{{get_dynamic_image($dynamic_images, 'home_image_2', 'home_image_2.png')}}"
                              />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">
                            <a
                              class="ftc-smooth-image smooth-image ftc-smooth"
                              href="{{get_dynamic_image_content($dynamic_images, 'home_image_3', 'url_go_to', '/products?category=4')}}"
                              title="{{get_dynamic_image_content($dynamic_images, 'home_image_3', 'url_title', '')}}"
                            >
                              <img
                                loading="lazy" width="270" height="185"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20185'%3E%3C/svg%3E"
                                class="img wp-post-image"
                                alt=""
                                data-lazy-src="{{get_dynamic_image($dynamic_images, 'home_image_3', 'home_image_3.png')}}"
                              />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid sing-img-right">
                      <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">
                            <a
                              class="ftc-smooth-image smooth-image ftc-smooth"
                              href="{{get_dynamic_image_content($dynamic_images, 'home_image_4', 'url_go_to', '/products?category=3')}}"
                              title="{{get_dynamic_image_content($dynamic_images, 'home_image_4', 'url_title', '')}}"
                            >
                              <img
                                loading="lazy" width="270" height="185"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20185'%3E%3C/svg%3E"
                                class="img wp-post-image"
                                alt=""
                                data-lazy-src="{{get_dynamic_image($dynamic_images, 'home_image_4', 'home_image_4.png')}}"
                              />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">
                            <a
                              class="ftc-smooth-image smooth-image ftc-smooth"
                              href="{{get_dynamic_image_content($dynamic_images, 'home_image_5', 'url_go_to', '/products?category=5')}}"
                              title="{{get_dynamic_image_content($dynamic_images, 'home_image_5', 'url_title', '')}}"
                            >
                              <img
                                loading="lazy" width="570" height="185"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20570%20185'%3E%3C/svg%3E"
                                class="img wp-post-image"
                                alt=""
                                data-lazy-sizes="(max-width: 570px) 100vw, 570px"
                                data-lazy-src="{{get_dynamic_image($dynamic_images, 'home_image_5', 'home_image_5.png')}}"
                              />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- BANNER 2 END --}}
              <div class="vc_row-full-width"></div>
              {{-- LATEST ITEMS --}}
              <div
                class="vc_row wpb_row vc_row-fluid lastest-product vc_custom_1512959546045 ftc-row-wide"
                data-vc-full-width="true" data-vc-full-width-init="false"
              >
                <div class="home3 wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12 vc_custom_1512964861892">
                  <div class="wpb_wrapper">
                    <div class="vc_tta-container" data-vc-action="collapse"><h2>Sản phẩm mới</h2>
                      <div
                        class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-tabs-position-top  default_no_border"
                      >
                        <div class="vc_tta-tabs-container">
                          <ul class="vc_tta-tabs-list">
                            <li class="vc_tta-tab vc_active" data-vc-tab>
                              <a href="index.html#1452940958434-1e0e69a8-f72d" data-vc-tabs data-vc-container=".vc_tta">
                                <span class="vc_tta-title-text">Tất cả</span>
                              </a>
                            </li>
                            @foreach($categories as $category)
                              <li class="vc_tta-tab" data-vc-tab>
                                <a href="{{url('/products?category='.$category->id)}}">
                                  <span class="vc_tta-title-text">{{$category->name}}</span>
                                </a>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                          <div class="vc_tta-panels">
                            <div
                              class="vc_tta-panel vc_active"
                              id="1452940958434-1e0e69a8-f72d"
                              data-vc-content=".vc_tta-panel-body"
                            >
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title">
                                  <a
                                    href="index.html#1452940958434-1e0e69a8-f72d" data-vc-accordion
                                    data-vc-container=".vc_tta-container"
                                  >
                                    <span class="vc_tta-title-text">All</span>
                                  </a>
                                </h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="woocommerce">
                                  <div
                                    class="ftc-product-slider ftc-slider ftc-shortcode " data-slider="1"
                                    data-columns="4" data-autoplay="0"
                                    data-nav="1" data-dots="0" data-margin="30" data-desksmall_items="4"
                                    data-tablet_items="3" data-tabletmini_items="3" data-mobile_items="2"
                                    data-mobilesmall_items="2"
                                  >
                                    <div class="header-title"></div>
                                    <div class="meta-slider loading">
                                      <div class="products owl-carousel">
                                        @for($i = 0; $i < count($latest_products); $i+=2)
                                          <div class="ftc-products">
                                            @include('fragment.product', ['f_product'=>$latest_products[$i]])
                                            @include('fragment.product', ['f_product'=>$latest_products[$i+1]])
                                          </div>
                                        @endfor
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
              {{-- LATEST ITEMS END --}}
              <div class="vc_row-full-width"></div>
              {{-- INTRODUCE --}}
              <div
                class="vc_row wpb_row vc_row-fluid banner2 vc_custom_1512959359375 ftc-row-wide"
                data-vc-full-width="true" data-vc-full-width-init="false"
              >
                <div class="wpb_column vc_column_container vc_col-sm-4">
                  <div class="wpb_wrapper">
                    <div class="ftc-smooth-image smooth-image ftc-smooth">
                      <img
                        loading="lazy" width="570" height="410"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20570%20410'%3E%3C/svg%3E"
                        class="img wp-post-image" alt=""
                        data-lazy-srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3.jpg 570w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-270x194.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-548x394.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-300x216.jpg 300w"
                        data-lazy-sizes="(max-width: 570px) 100vw, 570px"
                        data-lazy-src="../wp-content/uploads/2017/12/img3.jpg"
                      />
                      <noscript>
                        <img
                          width="570" height="410" src="../wp-content/uploads/2017/12/img3.jpg"
                          class="img wp-post-image" alt=""
                          srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3.jpg 570w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-270x194.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-548x394.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img3-300x216.jpg 300w"
                          sizes="(max-width: 570px) 100vw, 570px"
                        />
                      </noscript>
                    </div>
                  </div>
                </div>
                <div class="text-content wpb_column vc_column_container vc_col-sm-8">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                        <div class="text-nobg">
                          <h2>CÂU HỎI THƯỜNG GẶP</h2>
                          {{--<h2>E &#8211; COMMERCE</h2>--}}
                          <div class="text-bg">
                            <div class="text-background">
                              <a class="intro-box block" href="javascript:void(0)">
                                <span class="intro-top"><span class="fa fa-empire">.</span></span>
                                <span class="intro-bottom">
                                  <span class="title_intro">Gosport là thương hiệu nước nào?</span>
                                  <span class="content_intro">
                                    Gosport là thương hiệu thể thao Việt Nam được xây dựng để cung cấp những sản phẩm chất lượng nhất từ các thương hiệu thể thao nổi tiếng.
                                  </span>
                                </span>
                              </a>
                            </div>
                            <div class="text-background">
                              <a class="intro-box block" href="javascript:void(0)">
                                <span class="intro-top"> <span class="fa fa-dribbble">.</span> </span>
                                <span class="intro-bottom">
                                  <span class="title_intro">Nguyên tắc về sản phẩm mà Gosport cung cấp?</span>
                                  <span class="content_intro">
                                    Với kinh nghiệm của Gosport trên thị trường thể thao Việt Nam, cùng với trải nghiệm của khách hàng trên thị trường, sản phẩm được lựa chọn kỹ càng từ những hãng thương hiệu thể thao nổi tiếng, chất lượng sản phẩm đã qua kiểm định đảm bảo lưu thông và an toàn, dịch vụ tư vấn mang tính trung lập phù hợp với nhu cầu, mang lại giá trị lớn nhất cho khách hàng.
                                  </span>
                                </span>
                              </a>
                            </div>
                            <div class="text-background">
                              <a class="intro-box block" href="javascript:void(0)">
                                <span class="intro-top"> <span class="fa fa-comments-o">.</span></span>
                                <span class="intro-bottom">
                                  <span class="title_intro">
                                    Dịch vụ vận chuyển được thực hiện có lâu hay không?
                                  </span>
                                  <span class="content_intro">
                                    Các đơn hàng sẽ được thỏa thuận về thời gian giao hàng, phương thức giao hàng, lắp đặt cụ thể phù hợp với hoàn cảnh nhằm đảm bảo thuận tiện nhất với khách hàng.
                                  </span>
                                </span>
                              </a>
                            </div>
                            <div class="text-background">
                              <a class="intro-box block" href="javascript:void(0)">
                                <span class="intro-top"> <span class="fa fa-diamond">.</span></span>
                                <span class="intro-bottom">
                                  <span class="title_intro">
                                    Điều khách biệt lớn nhất khi mua hàng qua Gosport là gì ?
                                  </span>
                                  <span class="content_intro">
                                    Chỉ những sản phẩm tốt nhất, dịch vụ tốt nhất được thực hiện qua Gosport. Gosport từ chối cung cấp dòng sản phẩm được đánh giá kém tiêu chuẩn, kém chất lượng, không đầy giấy tờ lưu thông.
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- INTRODUCE END --}}
              <div class="vc_row-full-width"></div>
              {{-- SALE PRODUCTS --}}
              <div
                class="vc_row wpb_row vc_row-fluid lastest-product vc_custom_1512959659876 ftc-row-wide"
                data-vc-full-width="true" data-vc-full-width-init="false"
              >
                <div class="home3 wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12 vc_custom_1512959910789">
                  <div class="wpb_wrapper">
                    <div class="vc_tta-container" data-vc-action="collapse"><h2>Sale</h2>
                      <div
                        class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-tabs-position-top  default_no_border">
                        <div class="vc_tta-tabs-container">
                          <ul class="vc_tta-tabs-list">
                            <li class="vc_tta-tab vc_active" data-vc-tab>
                              <a href="index.html#1512835031231-e17f0c64-1a55" data-vc-tabs data-vc-container=".vc_tta">
                                <span class="vc_tta-title-text">Tất cả</span>
                              </a>
                            </li>
                            @foreach($categories as $category)
                              <li class="vc_tta-tab" data-vc-tab>
                                <a href="{{url('/products?category='.$category->id)}}">
                                  <span class="vc_tta-title-text">{{$category->name}}</span>
                                </a>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                          <div class="vc_tta-panels">
                            <div
                              class="vc_tta-panel vc_active" id="1512835031231-e17f0c64-1a55"
                              data-vc-content=".vc_tta-panel-body"
                            >
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title">
                                  <a
                                    href="index.html#1512835031231-e17f0c64-1a55" data-vc-accordion
                                    data-vc-container=".vc_tta-container"
                                  >
                                    <span class="vc_tta-title-text">All</span>
                                  </a>
                                </h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="woocommerce">
                                  <div
                                    class="ftc-product-slider ftc-slider ftc-shortcode" data-slider="1"
                                    data-columns="5" data-autoplay="0"
                                    data-nav="1" data-dots="0" data-margin="30" data-desksmall_items="4"
                                    data-tablet_items="3" data-tabletmini_items="3" data-mobile_items="2"
                                    data-mobilesmall_items="2"
                                  >
                                    <div class="header-title"></div>
                                    <div class="meta-slider loading">
                                      <div class="products owl-carousel">
                                        @foreach($sale_products as $sale_product)
                                          @include('fragment.product', ['f_product'=>$sale_product])
                                        @endforeach
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
              {{-- SALE PRODUCTS END --}}
              <div class="vc_row-full-width"></div>
              <div class="vc_row wpb_row vc_row-fluid single-img-home3-full vc_custom_1512976813756 ftc-row-wide"
                   data-vc-full-width="true" data-vc-full-width-init="false">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="ftc-smooth-image smooth-border-image ftc-smooth">
                      <img
                        loading="lazy" width="1170"
                        height="200"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201170%20200'%3E%3C/svg%3E"
                        class="img wp-post-image" alt=""
                        data-lazy-srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6.jpg 1170w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-270x46.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-548x94.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-300x51.jpg 300w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-768x131.jpg 768w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-1024x175.jpg 1024w"
                        data-lazy-sizes="(max-width: 1170px) 100vw, 1170px"
                        data-lazy-src="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6.jpg"
                      />
                      <noscript>
                        <img
                          width="1170" height="200"
                          src="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6.jpg"
                          class="img wp-post-image" alt=""
                          srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6.jpg 1170w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-270x46.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-548x94.jpg 548w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-300x51.jpg 300w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-768x131.jpg 768w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/single6-1024x175.jpg 1024w"
                          sizes="(max-width: 1170px) 100vw, 1170px"
                        />
                      </noscript>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row-full-width"></div>
              {{-- BLOGS --}}
              <div class="vc_row wpb_row vc_row-fluid blog-home vc_custom_1512959407698 ftc-row-wide"
                   data-vc-full-width="true" data-vc-full-width-init="false">
                <div class="home3 wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                        <div class="content_title">
                          <p>THE LAST IN THIS WEEK</p>
                          <h4 class="title_block title_font">FROM OUR BLOG</h4>
                        </div>
                      </div>
                    </div>
                    <div
                      class="ftc-sb-blogs ftc-slider  ftc-shortcode"
                      data-atts="{&quot;slider&quot;:1,&quot;masonry&quot;:0,&quot;categories&quot;:&quot;15,20,10,19,1,22&quot;,&quot;limit&quot;:&quot;5&quot;,&quot;orderby&quot;:&quot;none&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;columns&quot;:2,&quot;title&quot;:&quot;1&quot;,&quot;thumbnail&quot;:&quot;1&quot;,&quot;author&quot;:&quot;0&quot;,&quot;date&quot;:&quot;1&quot;,&quot;comment&quot;:&quot;0&quot;,&quot;excerpt&quot;:&quot;1&quot;,&quot;readmore&quot;:&quot;1&quot;,&quot;view&quot;:&quot;0&quot;,&quot;excerpt_words&quot;:&quot;20&quot;,&quot;nav&quot;:&quot;0&quot;,&quot;auto_play&quot;:&quot;0&quot;,&quot;margin&quot;:30,&quot;load_more&quot;:0,&quot;desksmall_items&quot;:&quot;2&quot;,&quot;tablet_items&quot;:&quot;2&quot;,&quot;tabletmini_items&quot;:&quot;2&quot;,&quot;mobile_items&quot;:&quot;2&quot;,&quot;mobilesmall_items&quot;:&quot;1&quot;,&quot;nonce&quot;:&quot;d3038713b3&quot;}"
                      data-nonce="d3038713b3"
                    >
                      <div class="meta-slider loading">
                        <div class="blogs owl-carousel">
                          @foreach($articles as $item)
                            <article class="post-wrapper first-child">
                              <header class="post-img">
                                <a class="blog-image" href="{{url('/blog/detail',$item->slug)}}">
                                  <img
                                    loading="lazy" width="870" height="870"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20870%20870'%3E%3C/svg%3E"
                                    class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image wp-post-image"
                                    alt="{{$item->title}}"
                                    {{--data-lazy-srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                                    data-lazy-sizes="(max-width: 870px) 100vw, 870px"
                                    data-lazy-src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                                  />
                                  <noscript>
                                    <img
                                      width="870" height="870"
                                      src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                                      class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image wp-post-image"
                                      alt="{{$item->title}}"
                                      {{--srcset="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                                      sizes="(max-width: 870px) 100vw, 870px"
                                    />
                                  </noscript>
                                </a>
                              </header>
                              <div class="post-info">
                                <header class="entry-header">
                                  <div class="date-time date-time-meta">
                                    <i class="fa fa-clock-o"></i> {{$item->created_at}}
                                  </div>
                                  <h3 class="product_title blog-title entry-title">
                                    <a href="{{url('/blog/detail',$item->slug)}}">{{$item->title}}</a>
                                  </h3>
                                </header>
                                <div class="clear"></div>
                                <div class="entry-content"><p>{{$item->content_review}}</p></div>
                                <a href="{{url('/blog/detail',$item->slug)}}" class="button-readmore">Xem chi tiết</a>
                              </div>
                            </article>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- BLOGS END --}}
              <div class="vc_row-full-width"></div>
            </article>
          </main>
        </div>
      </div>
    </div>
  </div>
@endsection
