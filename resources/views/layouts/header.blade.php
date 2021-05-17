<header id="masthead" class="site-header">
  <div class="header-ftc header-layout3">
    <div class="header-content">
      <div class="container">
        <div class="header-info">
          <div class="mobile-button">
            <div class="mobile-nav"><i class="fa fa-bars"></i></div>
          </div>
          <div class="logo-wrapper is-desktop">
            <div class="logo">
              <a href="{{url('/')}}">
                <img
                  loading="lazy"
                  src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png"
                  alt="Go Sport" title="Go Sport"
                  class="normal-logo"
                  data-lazy-src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png"
                />
                <noscript>
                  <img
                    src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png" alt="Go Sport" title="Go Sport"
                    class="normal-logo"
                  />
                </noscript>
              </a>
            </div>
          </div>
          <div class="logo-wrapper is-mobile">
            <div class="logo">
              <a href="{{url('/')}}">
                <img
                  loading="lazy"
                  src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png"
                  alt="Go Sport" title="Go Sport" class="normal-logo-mobile"
                  data-lazy-src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png"
                />
                <noscript>
                  <img
                    src="https://www.butler.org/hs-fs/hubfs/-%20BUTLER/ButlerHospital_Logo_Color.png?width=1500&name=ButlerHospital_Logo_Color.png"
                    alt="Go Sport" title="Go Sport" class="normal-logo-mobile"
                  />
                </noscript>
              </a>
            </div>
          </div>
        </div>
        <div class="navigation-primary">
          <div class="container">
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
              <div id="mega_main_menu"
                   class="primary primary_style-flat icons-right first-lvl-align-center first-lvl-separator-none direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-enable dropdowns_trigger-hover dropdowns_animation-none no-logo no-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-1-5 mega_main mega_main_menu">
                <div class="menu_holder">
                  <div class="mmm_fullwidth_container"></div>
                  <div class="menu_inner">
                    <span class="nav_logo">
                      <a class="mobile_toggle"> <span
                          class="mobile_button"> Danh mục &nbsp; <span class="symbol_menu">&equiv;</span> <span
                            class="symbol_cross">&#x2573;</span> </span> </a> </span>
                    <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                      <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home {{ Request::is('/') ? 'current-menu-ancestor current_page_ancestor' : '' }} menu-item-has-children menu-item-5286 multicolumn_dropdown default_style drop_to_right submenu_default_width columns2">
                        <a href="{{url('/')}}" class="item_link  disable_icon" tabindex="78"><i class=""></i>
                          <span
                            class="link_content"> <span class="link_text"> Trang chủ </span> </span>
                        </a>
                      </li>
                      <li
                        class="menu-item menu-item-type-post_type menu-item-object-page {{ Request::is('products') ? 'current-menu-ancestor current_page_ancestor' : '' }} menu-item-has-children menu-item-4014 multicolumn_dropdown default_style drop_to_right submenu_default_width columns3">
                        <a href="{{url('/diagnose')}}" class="item_link  disable_icon" tabindex="100"><i class=""></i>
                          <span class="link_content"> <span class="link_text"> Hỗ trợ khách hàng </span> </span>
                        </a>
                        <ul class="mega_dropdown">
                          @foreach($share_categories as $category)
                            <li
                              class="sub-style menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-3739 default_dropdown default_style drop_to_right submenu_default_width columns1"
                              style="width:33.333333333333%;">
                              <a href="/products?category={{$category['id']}}" class="item_link  disable_icon"
                                 tabindex="101"><i class=""></i>
                                <span
                                  class="link_content"> <span class="link_text">{{$category['name']}} </span> </span>
                              </a>
                              <ul class="mega_dropdown">
                                @isset($category['children'])
                                  @foreach($category['children'] as $sub_category)
                                    <li
                                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3740 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                      <a href="/products?category={{$sub_category['id']}}"
                                         class="item_link  disable_icon"
                                         tabindex="102"><i class=""></i>
                                        <span class="link_content"> <span
                                            class="link_text"> {{$sub_category['name']}}</span> </span>
                                      </a>
                                    </li>
                                  @endforeach
                                @endisset
                              </ul>
                            </li>
                          @endforeach
                        </ul>
                      </li>
                      <li
                        class="menu-item menu-item-type-post_type menu-item-object-page {{ Request::is('blog') ? 'current-menu-ancestor current_page_ancestor' : '' }} menu-item-has-children menu-item-5629 multicolumn_dropdown default_style drop_to_right submenu_default_width columns2">
                        <a href="{{url('/blog')}}" class="item_link  disable_icon" tabindex="123"><i class=""></i>
                          <span class="link_content"> <span class="link_text"> Tin tức </span> </span>
                        </a>
                      </li>
                      <li
                        class="menu-item menu-item-type-post_type menu-item-object-page {{ Request::is('contact-us') ? 'current-menu-ancestor current_page_ancestor' : '' }} menu-item-has-children menu-item-5629 multicolumn_dropdown default_style drop_to_right submenu_default_width columns2">
                        <a href="{{url('/contact-us')}}" class="item_link  disable_icon" tabindex="123"><i class=""></i>
                          <span class="link_content"> <span class="link_text"> Liên hệ </span> </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
