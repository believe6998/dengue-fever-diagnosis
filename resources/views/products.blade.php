@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', ['f_image_code' => 'banner_products', 'f_title'=>'Cửa hàng', 'f_children_title'=>'Cửa hàng'])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="page-container container ">
      <div class="row">
        <!-- Left Sidebar -->
        <aside id="left-sidebar" class="ftc-sidebar col-sm-3 col-xs-12">
          <section id="ftc_product_categories-22" class="widget-container ftc-product-categories-widget">
            <div class="widget-title-wrapper">
              <a class="block-control" href="javascript:void(0)"></a>
              <h3 class="widget-title product_title">Danh mục</h3></div>
            <div class="ftc-product-categories-list">
              <ul class="product-categories">
                @foreach($share_categories as $category)
                  <li class="cat-item {{isset($category['children']) ? 'cat-parent' : ''}}">
                    <span class="icon-toggle"></span>
                    <a
                      class="und_filter_product {{$filter['category'] == $category['id'] ? 'active' : ''}}"
                      data-type="category"
                      data-value="{{$category['id']}}"
                    >{{$category['name']}}</a>
                    @isset($category['children'])
                      <ul class="children">
                        @foreach($category['children'] as $sub_category)
                          <li class="cat-item ">
                            <span class="icon-toggle"></span>
                            <a
                              class="und_filter_product {{$filter['category'] == $category['id'] ? 'active' : ''}}"
                              data-type="category"
                              data-value="{{$sub_category['id']}}"
                            >{{$sub_category['name']}}</a>
                          </li>
                        @endforeach
                      </ul>
                    @endisset
                  </li>
                @endforeach
              </ul>
              <div class="clear"></div>
            </div>
          </section>
          <section id="text-51" class="widget-container widget_text">
            <div class="widget-title-wrapper">
              <a class="block-control" href="javascript:void(0)"></a>
              <h3 class="widget-title product_title">Lọc</h3></div>
            <div class="textwidget"></div>
          </section>
          {{--          <section--}}
          {{--            id="yith-woo-ajax-navigation-3"--}}
          {{--            class="widget-container yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">--}}
          {{--            <div class="widget-title-wrapper">--}}
          {{--              <a class="block-control" href="javascript:void(0)"></a>--}}
          {{--              <h3 class="widget-title product_title">Thương hiệu</h3></div>--}}
          {{--            <ul class="yith-wcan-list yith-wcan">--}}
          {{--              @foreach($brands as $brand)--}}
          {{--                <li class="{{in_array($brand->id, $filter['brands']) ? 'chosen' : ''}}">--}}
          {{--                  <a--}}
          {{--                    class="und_filter_product"--}}
          {{--                    data-type="brands"--}}
          {{--                    data-value="{{$brand->id}}"--}}
          {{--                  >{{$brand->name}}</a>--}}
          {{--                </li>--}}
          {{--              @endforeach--}}
          {{--            </ul>--}}
          {{--          </section>--}}
          <section id="woocommerce_price_filter-45" class="widget-container woocommerce widget_price_filter">
            <div class="widget-title-wrapper">
              <a class="block-control" href="javascript:void(0)"></a>
              <h3 class="widget-title product_title">Giá</h3></div>
            <form>
              <div class="price_slider_wrapper">
                <div class="pricer-slider"></div>
                <div class="price_slider_amount" data-step="10">
                  <button
                    type="button"
                    class="button und_button_filter"
                    data-min_price="{{$filter['min_price']}}"
                    data-max_price="{{$filter['max_price']}}"
                  >Lọc
                  </button>
                  <div class="price_label">
                    Giá:
                    <span class="from currency">{{$filter['min_price']}}</span>&emsp14;-&emsp14;
                    <span class="to currency">{{$filter['max_price']}}</span>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <section id="ftc_single_image-18" class="widget-container ftc-effect-image">
            <h3 class="widget-title product_title hidden"></h3>
            <div class="ftc-smooth-image smooth-image ftc-smooth">
              <a title="" target="_blank" href="index-options=0-1-3.html#">
                <img
                  loading="lazy" alt="" title="" class="img"
                  src="https://i.pinimg.com/originals/33/e0/c5/33e0c5ff9c271eb7bfeb0fe7b0b91d68.jpg"
                  data-lazy-src="https://demo.themeftc.com/ornaldo/wp-content/uploads/2017/12/img-widget.jpg"
                >
              </a>
            </div>
          </section>
        </aside>
        <div id="main-content" class="col-sm-9 col-xs-12">
          <div id="primary" class="site-content">
            <div class="before-loop-wrapper">
              <div class="woocommerce-notices-wrapper"></div>
              <nav class="grid_list_nav">
                <a href="products" id="grid" title="Grid view">&#8862;
                  <span>Grid view</span>
                </a>
                <a href="products" id="list" title="List view">&#8863;
                  <span>List view</span>
                </a>
              </nav>
              <p class="woocommerce-result-count">
                Hiển thị 1&ndash;12 của {{$products->total()}} kết quả</p>
              <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" style="display: none">
                  <option value="menu_order" selected='selected'>Mặc định</option>
                  <option value="date">Ngày cập nhật</option>
                  <option value="price">Giá: thấp tới cao</option>
                  <option value="price-desc">Giá: cao tới thấp</option>
                </select>
                <span class="orderby-title">Sắp xếp theo:</span>
                <ul class="orderby">
                  <li>
                    <span class="orderby-current"> {{$config['sorts'][$filter['orderby']]}}</span>
                    <ul class="dropdown">
                      @foreach($config['sorts'] as $sort)
                        <li>
                          <a class="und_filter_product" data-type="orderby" data-value="{{$loop->index}}">
                            {{$sort}}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                </ul>
              </form>
            </div>
            <!-- Top Sidebar -->
            <div class="woocommerce columns-3">
              <div class="products owl-carousel">
                @foreach($products as $product)
                  <div class="ftc-product product">
                    <div class="images lazy-loading">
                      <a href="{{url('/products', $product->slug)}}">
                        <span class="cover_image">
                          <img
                            loading="lazy"
                            width="270"
                            height="270"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20270'%3E%3C/svg%3E"
                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                            alt=""
                            data-lazy-sizes="(max-width: 270px) 100vw, 270px"
                            data-lazy-src="{{URL::asset('/images/medium/'.$product->thumbnail)}}"
                          />
                        </span>
                        <span class="hover_image">
                        <img
                          loading="lazy" width="270" height="270"
                          src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20270'%3E%3C/svg%3E"
                          class="product-hover-image wp-post-image" alt=""
                          data-lazy-sizes="(max-width: 270px) 100vw, 270px"
                          data-lazy-src="{{URL::asset('/images/medium/'.$product->thumbnail)}}"
                        />
                        </span>
                      </a>
                      @if($product->discount !== 0)
                        <div class="conditions-box">
                          <span class="onsale">Sale</span>
                        </div>
                      @endif
                      <div class="group-button-product">
                        <div
                          data-product_id="{{$product->id}}"
                          class="add-to-cart add_to_cart_button"
                        >
                          <a
                            rel="nofollow"
                            class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                            <span class="ftc-tooltip button-tooltip">Thêm vào giỏ</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item-description">
                      <h3 class="product_title product-name">
                        <a href="{{url('/products', $product->slug)}}">{{$product->name}}</a>
                      </h3>
                      <span class="price">
                        @if($product->discount != 0)
                          <del>
                            <span class="woocommerce-Price-amount amount currency">
                              {{$product->compare_price}}
                            </span>
                          </del>
                        @endif
                        <ins>
                          <span class="woocommerce-Price-amount amount">
                            <span class="currency">{{$product->price}}<u>đ</u></span>
                          </span>
                        </ins>
                      </span>
                      {{--                      <div class="short-description list" style="display: none">--}}
                      {{--                        {!! $product->description !!}--}}
                      {{--                      </div>--}}
                      <div class="meta_info">
                        <div
                          data-product_id="{{$product->id}}"
                          class="add-to-cart add_to_cart_button"
                        >
                          <a rel="nofollow"
                             class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                            <span class="ftc-tooltip button-tooltip">Thêm vào giỏ</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="after-loop-wrapper">
              {{$products->appends($_GET)->links('vendor.pagination.default')}}
              <button class="onewave-products-load-more hidden">
                <span class="load-more">Hiện thêm</span>
              </button>
              <span class="page-load-status"><p class="infinite-scroll-request">Loading...</p><p
                  class="infinite-scroll-last">Không có sản phẩm nào</p></span>
            </div>
          </div>
        </div>
        <!-- Right Sidebar -->
      </div>
    </div>
    {{-- CONTENT END --}}
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

  <script>
    const min_price = {!! $config['min_price'] !!};
    const max_price = {!! $config['max_price'] !!};
    const default_min_price = {!! $filter['min_price'] !!};
    const default_max_price = {!! $filter['max_price'] !!};

    $('.pricer-slider').slider({
      range: true,
      min: min_price,
      step: 1000,
      max: max_price,
      values: [default_min_price, default_max_price],
      slide: function (event, ui) {
        const btn = $('.und_button_filter');
        btn.attr('data-min_price', ui.values[0])
        btn.attr('data-max_price', ui.values[1])
        $('.price_label span.from').html(ui.values[0].toLocaleString('vi-VN', {style: 'currency', currency: 'VND'}));
        $('.price_label span.to').html(ui.values[1].toLocaleString('vi-VN', {style: 'currency', currency: 'VND'}));
      }
    });
  </script>
@endsection
