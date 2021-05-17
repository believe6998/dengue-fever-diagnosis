@extends('layouts.app')
@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', [
    'f_image_code' => 'banner_product_detail',
    'f_title'=> $product ? $product->name : '',
    'f_parent_url' => '/products',
    'f_parent_title' => 'Cửa hàng',
    'f_children_title'=> $product ? $product->name : ''
    ])
    {{-- BANNER END --}}
    <div class="page-container show_breadcrumb">
      <div id="main-content" class="container">
        <div class="row">
          {{-- LEFT CONTENT --}}
          <div id="primary" class="site-content col-sm-9 col-xs-12">
            <div class="woocommerce-notices-wrapper"></div>
            <div
              id="product-3416"
              class="product type-product post-3416 status-publish first instock product_cat-sport-shoes has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
            >
              @isset($product)
                <div class="details-img">
                  <div class="images">
                    {{--@todo show sale or hot state--}}
                    <div class="conditions-box">
                      @if($product->discount != 0)
                        <span class="onsale">Sale</span>
                      @endif
                    </div>
                    {{--@todo @trungnq using product avatar--}}
                    <div data-thumb="{{URL::asset('/images/medium/'.$product->images[0])}}"
                         class="woocommerce-product-gallery__image">
                      <a
                        href="{{URL::asset('/images/medium/'.$product->images[0])}}"
                        class="woocommerce-main-image cloud-zoom zoom on_pc" id='product_zoom'
                        data-rel="position:'inside',showTitle:0,titleOpacity:0.5,lensOpacity:0.5,fixWidth:362,fixThumbWidth:72,fixThumbHeight:72,adjustX: 0, adjustY:-4"
                      >
                        <img
                          width="548" height="548"
                          src="{{URL::asset('/images/medium/'.$product->images[0])}}"
                          class="attachment-shop_single size-shop_single wp-post-image wp-post-image" alt="" title=""
                          data-caption=""
                          data-src="{{URL::asset('/images/medium/'.$product->images[0])}}"
                          data-large_image="{{URL::asset('/images/medium/'.$product->images[0])}}"
                          data-large_image_width="600" data-large_image_height="600"
                        />
                      </a>
                    </div>
                    <div class="ftc_lightbox">
                      <a
                        href="{{URL::asset('/images/large/'.$product->images[0])}}"
                        class="swipebox"
                        title="Adidas Performance"
                      >
                        <span class="full-light">Fullscreen</span>
                        <img
                          width="548"
                          height="548"
                          src="{{URL::asset('/images/large/'.$product->images[0])}}"
                          {{--@todo @trungnq using image size 548x548--}}
                          class="attachment-shop_single size-shop_single wp-post-image wp-post-image"
                          alt="" title=""
                          data-caption=""
                          data-src="{{URL::asset('/images/large/'.$product->images[0])}}"
                          data-large_image="{{URL::asset('/images/large/'.$product->images[0])}}"
                          data-large_image_width="600"
                          data-large_image_height="600"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="thumbnails ftc-slider loaded">
                    <ul class="details_thumbnails owl-carousel">
                      {{--@todo @trungnq using product images--}}
                      @for($i=0;$i<count($product->images);$i++)
                        <li
                          data-thumb="{{URL::asset('/images/small/'.$product->images[$i])}}"
                          {{--@todo @trungnq using image size 100x100--}}
                          class="woocommerce-product-gallery__image"
                        >
                          <a
                            href="{{URL::asset('/images/small/'.$product->images[$i])}}"
                            class="zoom first cloud-zoom-gallery  swipebox" title="Adidas Performance"
                            data-rel="useZoom: 'product_zoom', smallImage: '{{URL::asset('/images/small/'.$product->images[$i])}}'"
                          >
                            <img
                              loading="lazy" width="100" height="100"
                              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                              class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title=""
                              data-lazy-src="{{URL::asset('/images/small/'.$product->images[$i])}}"
                              {{--@todo @trungnq using image size 100x100--}}
                            />
                            <noscript>
                              <img
                                width="100" height="100"
                                src="{{URL::asset('/images/small/'.$product->images[$i])}}"
                                {{--@todo @trungnq using image size 100x100--}}
                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                title=""
                              />
                            </noscript>
                          </a>
                        </li>
                      @endfor
                    </ul>
                  </div>
                </div>
                <div class="summary entry-summary">
                  <h1 class="product_title entry-title">{{$product->name}}</h1>
                  <p class="availability stock in-stock" data-original="In Stock" data-class="in-stock">
                    <span>{{$product->quantity}} sản phẩm</span>
                  </p>
                  {{--                  <div class="ftc_excerpt">--}}
                  {{--                    <div class="collapsed-content">--}}
                  {{--                      Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no--}}
                  {{--                      quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre. Aenean convallis--}}
                  {{--                      egestas massa ac rho...--}}
                  {{--                    </div>--}}
                  {{--                    <div class="full-content">--}}
                  {{--                      <p>--}}
                  {{--                        Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo--}}
                  {{--                        maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre. Aenean convallis egestas--}}
                  {{--                        massa ac rhoncus. Integer iaculis et erat id auctor.--}}
                  {{--                      </p>--}}
                  {{--                    </div>--}}
                  {{--                    <a href="#" id="readMore">Read more</a>--}}
                  {{--                    <a href="#" id="readless" style="display: none">Read less</a>--}}
                  {{--                  </div>--}}
                  <p class="price">
                    @if($product->discount != 0)
                      <del>
                        <span class="woocommerce-Price-amount amount">
                          {{number_format($product->compare_price)}}&emsp14;<u>đ</u>
                        </span>
                      </del>
                      &emsp;
                    @endif
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        {{number_format($product->price)}}&emsp14;<u>đ</u>
                      </span>
                    </ins>
                  </p>
                  <form class="cart">
                    <div class="quantity">
                      <div class="quantity-title">Số lượng:</div>
                      <input type="button" value="-" class="minus"/>
                      <input
                        type="number" step="1" min="1" max="{{$product->quantity}}"
                        name="quantity" value="1" title="Qty"
                        class="input-text qty text" size="4"
                        pattern="[0-9]*" inputmode="numeric"
                      />
                      <input type="button" value="+" class="plus"/>
                    </div>
                    <button
                      type="button"
                      name="add-to-cart"
                      class="single_add_to_cart_button button alt"
                      data-product_id="{{$product->id}}"
                    >
                      Thêm vào giỏ hàng
                    </button>
                  </form>
                  <div class="clear"></div>
                  <div class="content">
                    <span>
                      Danh mục:&emsp14;
                      @foreach($categories as $category)
                        <a href="{{url('/products?category='.$category->id)}}" rel="tag">{{$category->name}}</a>,
                        &emsp14;
                      @endforeach
                    </span>
                    <span class="cat-links"></span>
                  </div>
                </div>
                <div>
                  <div class="woocommerce-tabs wc-tabs-wrapper">
                    <ul class="tabs wc-tabs">
                      <li class="description_tab">
                        <a href="#tab-description">Thông tin chi tiết</a>
                      </li>
                    </ul>
                    <div class="panel entry-content wc-tab" id="tab-description">
                      <div class="ftc_desciption_tab">
                        <div class="desciption_content"></div>
                        <div class="">
                          <p>
                            {!! $product->description !!}
                          </p>
                        </div>
                        {{--<a href="#" id="readmore_des">Read more</a>--}}
                        {{--<a href="#" id="readless_des" style="display: none">Read less</a>--}}
                      </div>
                    </div>
                  </div>
                </div>
              @endisset
              @empty($product)
                <h3>Nội dung yêu cầu không được tìm thấy!</h3>
              @endempty
            </div>
          </div>
          {{-- LEFT CONTENT END --}}
          {{-- RIGHT CONTENT --}}
          <aside id="right-sidebar" class="ftc-sidebar col-sm-3 col-xs-12">
            {{-- PRODUCT RECENTLY --}}
            {{-- PRODUCT RECENTLY END --}}
            <section id="ftc_single_image-19" class="widget-container ftc-effect-image">
              <h3 class="widget-title product_title hidden"></h3>
              <div class="ftc-smooth-image smooth-image ftc-smooth">
                <a title="" target="_blank" href="/">
                  <img
                    loading="lazy" alt="" title="" class="img"
                    src="https://i.pinimg.com/originals/33/e0/c5/33e0c5ff9c271eb7bfeb0fe7b0b91d68.jpg"
                    data-lazy-src="../../wp-content/uploads/2017/12/img-widget.jpg"
                  >
                  <noscript>
                    <img alt="" title="" class="img" src="../../wp-content/uploads/2017/12/img-widget.jpg">
                  </noscript>
                </a>
              </div>
            </section>
          </aside>
          {{-- RIGHT CONTENT END --}}
        </div>
        {{-- RELATED PRODUCTS --}}
        <div class="related products">
          <h2>
            <span class="bg-heading">Sản phẩm liên quan</span>
          </h2>
          <div class="owl-carousel-related-product products owl-carousel">
            @foreach($related_products as $related_product)
              @include('fragment.product-related', ['f_product'=>$related_product])
            @endforeach
          </div>
        </div>
        {{-- RELATED PRODUCTS END --}}
      </div>
    </div>
  </div>
@endsection

@section('js-import')
  <script>
    $(document).ready(function () {
      $('.details_thumbnails.owl-carousel').owlCarousel({
        margin: 0,
        nav: true,
        dots: false,
        navElement: 'div',
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        lazyLoad: true,
      })
      $('.owl-carousel-related-product').owlCarousel({
        loop: true,
        margin: 15,
        // autoplay: true,
        smartSpeed: 500,
        nav: true,
        dots: false,
        navElement: 'div role="presentation"',
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        lazyLoad: true,
        responsive: {0: {items: 2}, 768: {items: 3}, 1200: {items: 4}}
      })
    })
  </script>
  <script>
    $(document).ready(function () {
      var wc_single_product_params = {}
      $('body').on('init', '.wc-tabs-wrapper, .woocommerce-tabs', function () {
        $('.wc-tab, .woocommerce-tabs .panel:not(.panel .panel)').hide()
        var hash = window.location.hash
        var url = window.location.href
        var $tabs = $(this).find('.wc-tabs, ul.tabs').first()
        if (hash.toLowerCase().indexOf('comment-') >= 0 || hash === '#reviews' || hash === '#tab-reviews') {
          $tabs.find('li.reviews_tab a').click()
        } else if (url.indexOf('comment-page-') > 0 || url.indexOf('cpage=') > 0) {
          $tabs.find('li.reviews_tab a').click()
        } else if (hash === '#tab-additional_information') {
          $tabs.find('li.additional_information_tab a').click()
        } else {
          $tabs.find('li:first a').click()
        }
      }).on('click', '.wc-tabs li a, ul.tabs li a', function (e) {
        e.preventDefault()
        var $tab = $(this)
        var $tabs_wrapper = $tab.closest('.wc-tabs-wrapper, .woocommerce-tabs')
        var $tabs = $tabs_wrapper.find('.wc-tabs, ul.tabs')
        $tabs.find('li').removeClass('active')
        $tabs_wrapper.find('.wc-tab, .panel:not(.panel .panel)').hide()
        $tab.closest('li').addClass('active')
        $tabs_wrapper.find($tab.attr('href')).show()
      }).on('click', 'a.woocommerce-review-link', function () {
        $('.reviews_tab a').click()
        return !0
      }).on('init', '#rating', function () {
        $('#rating').hide().before('<p class="stars">\
						<span>\
							<a class="star-1" href="#">1</a>\
							<a class="star-2" href="#">2</a>\
							<a class="star-3" href="#">3</a>\
							<a class="star-4" href="#">4</a>\
							<a class="star-5" href="#">5</a>\
						</span>\
					</p>')
      }).on('click', '#respond p.stars a', function () {
        var $star = $(this)
          , $rating = $(this).closest('#respond').find('#rating')
          , $container = $(this).closest('.stars')
        $rating.val($star.text())
        $star.siblings('a').removeClass('active')
        $star.addClass('active')
        $container.addClass('selected')
        return !1
      }).on('click', '#respond #submit', function () {
        var $rating = $(this).closest('#respond').find('#rating')
          , rating = $rating.val();
        if ($rating.length > 0 && !rating && wc_single_product_params.review_rating_required === 'yes') {
          window.alert(wc_single_product_params.i18n_required_rating_text);
          return !1
        }
      })

      $('.wc-tabs-wrapper, .woocommerce-tabs, #rating').trigger('init')

      var ProductGallery = function ($target, args) {
        this.$target = $target;
        this.$images = $('.woocommerce-product-gallery__image', $target)
        if (0 === this.$images.length) {
          this.$target.css('opacity', 1)
          return
        }
        $target.data('product_gallery', this);
        this.flexslider_enabled = $.isFunction($.fn.flexslider) && wc_single_product_params.flexslider_enabled;
        this.zoom_enabled = $.isFunction($.fn.zoom) && wc_single_product_params.zoom_enabled;
        this.photoswipe_enabled = typeof PhotoSwipe !== 'undefined' && wc_single_product_params.photoswipe_enabled;
        if (args) {
          this.flexslider_enabled = !1 === args.flexslider_enabled ? !1 : this.flexslider_enabled;
          this.zoom_enabled = !1 === args.zoom_enabled ? !1 : this.zoom_enabled;
          this.photoswipe_enabled = !1 === args.photoswipe_enabled ? !1 : this.photoswipe_enabled
        }
        if (1 === this.$images.length) {
          this.flexslider_enabled = !1
        }
        this.initFlexslider = this.initFlexslider.bind(this)
        this.initZoom = this.initZoom.bind(this)
        this.initZoomForTarget = this.initZoomForTarget.bind(this)
        this.initPhotoswipe = this.initPhotoswipe.bind(this)
        this.onResetSlidePosition = this.onResetSlidePosition.bind(this)
        this.getGalleryItems = this.getGalleryItems.bind(this)
        this.openPhotoswipe = this.openPhotoswipe.bind(this)
        if (this.flexslider_enabled) {
          this.initFlexslider(args.flexslider)
          $target.on('woocommerce_gallery_reset_slide_position', this.onResetSlidePosition)
        } else {
          this.$target.css('opacity', 1)
        }
        if (this.zoom_enabled) {
          this.initZoom();
          $target.on('woocommerce_gallery_init_zoom', this.initZoom)
        }
        if (this.photoswipe_enabled) {
          this.initPhotoswipe()
        }
      };
      ProductGallery.prototype.initFlexslider = function (args) {
        var $target = this.$target
          , gallery = this;
        var options = $.extend({
          selector: '.woocommerce-product-gallery__wrapper > .woocommerce-product-gallery__image',
          start: function () {
            $target.css('opacity', 1)
          },
          after: function (slider) {
            gallery.initZoomForTarget(gallery.$images.eq(slider.currentSlide))
          }
        }, args);
        $target.flexslider(options);
        $('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image:eq(0) .wp-post-image').one('load', function () {
          var $image = $(this);
          if ($image) {
            setTimeout(function () {
              var setHeight = $image.closest('.woocommerce-product-gallery__image').height();
              var $viewport = $image.closest('.flex-viewport');
              if (setHeight && $viewport) {
                $viewport.height(setHeight)
              }
            }, 100)
          }
        }).each(function () {
          if (this.complete) {
            $(this).trigger('load')
          }
        })
      }

      ProductGallery.prototype.initZoom = function () {
        this.initZoomForTarget(this.$images.first())
      }

      ProductGallery.prototype.initZoomForTarget = function (zoomTarget) {
        if (!this.zoom_enabled) {
          return !1
        }
        var galleryWidth = this.$target.width()
          , zoomEnabled = !1;
        $(zoomTarget).each(function (index, target) {
          var image = $(target).find('img');
          if (image.data('large_image_width') > galleryWidth) {
            zoomEnabled = !0;
            return !1
          }
        });
        if (zoomEnabled) {
          var zoom_options = $.extend({
            touch: !1
          }, wc_single_product_params.zoom_options);
          if ('ontouchstart' in document.documentElement) {
            zoom_options.on = 'click'
          }
          zoomTarget.trigger('zoom.destroy');
          zoomTarget.zoom(zoom_options);
          setTimeout(function () {
            if (zoomTarget.find(':hover').length) {
              zoomTarget.trigger('mouseover')
            }
          }, 100)
        }
      }

      ProductGallery.prototype.initPhotoswipe = function () {
        if (this.zoom_enabled && this.$images.length > 0) {
          this.$target.prepend('<a href="#" class="woocommerce-product-gallery__trigger">🔍</a>')
          this.$target.on('click', '.woocommerce-product-gallery__trigger', this.openPhotoswipe)
          this.$target.on('click', '.woocommerce-product-gallery__image a', function (e) {
            e.preventDefault()
          });
          if (!this.flexslider_enabled) {
            this.$target.on('click', '.woocommerce-product-gallery__image a', this.openPhotoswipe)
          }
        } else {
          this.$target.on('click', '.woocommerce-product-gallery__image a', this.openPhotoswipe)
        }
      }

      ProductGallery.prototype.onResetSlidePosition = function () {
        this.$target.flexslider(0)
      }

      ProductGallery.prototype.getGalleryItems = function () {
        var $slides = this.$images
          , items = [];
        if ($slides.length > 0) {
          $slides.each(function (i, el) {
            var img = $(el).find('img');
            if (img.length) {
              var large_image_src = img.attr('data-large_image')
                , large_image_w = img.attr('data-large_image_width')
                , large_image_h = img.attr('data-large_image_height')
                , item = {
                src: large_image_src,
                w: large_image_w,
                h: large_image_h,
                title: img.attr('data-caption') ? img.attr('data-caption') : img.attr('title')
              };
              items.push(item)
            }
          })
        }
        return items
      }

      ProductGallery.prototype.openPhotoswipe = function (e) {
        e.preventDefault();
        var pswpElement = $('.pswp')[0], items = this.getGalleryItems(), eventTarget = $(e.target), clicked;
        if (eventTarget.is('.woocommerce-product-gallery__trigger') || eventTarget.is('.woocommerce-product-gallery__trigger img')) {
          clicked = this.$target.find('.flex-active-slide')
        } else {
          clicked = eventTarget.closest('.woocommerce-product-gallery__image')
        }
        var options = $.extend({
          index: $(clicked).index(),
          addCaptionHTMLFn: function (item, captionEl) {
            if (!item.title) {
              captionEl.children[0].textContent = ''
              return !1
            }
            captionEl.children[0].textContent = item.title
            return !0
          }
        }, wc_single_product_params.photoswipe_options)
        var photoswipe = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options)
        photoswipe.init()
      }

      $.fn.wc_product_gallery = function (args) {
        new ProductGallery(this, args || wc_single_product_params)
        return this
      }

      $('.woocommerce-product-gallery').each(function () {
        $(this).trigger('wc-product-gallery-before-init', [this, wc_single_product_params])
        $(this).wc_product_gallery(wc_single_product_params)
        $(this).trigger('wc-product-gallery-after-init', [this, wc_single_product_params])
      })
    })
  </script>
@endsection
