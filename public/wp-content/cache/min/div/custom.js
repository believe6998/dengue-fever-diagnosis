(function ($) {
  "use strict";
  $('.swipebox').swipebox({
    useCSS: !0,
    useSVG: !0,
    initialIndexOnArray: 0,
    hideCloseButtonOnMobile: !1,
    removeBarsOnMobile: !0,
    hideBarsDelay: 3000,
    videoMaxWidth: 1140,
    beforeOpen: function () {
    },
    afterOpen: null,
    afterClose: function () {
    },
    loopAtEnd: !1
  });
  $('.details-img').imagesLoaded(function () {
    $(".details_thumbnails li a").click(function () {
      var changeSrc = $(this).attr("href");
      $(".ftc_lightbox .swipebox").attr("href", changeSrc);
      return !1
    })
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 250) {
      $(".header-content").addClass("header-sticky-hide")
    } else {
      $(".header-content").removeClass("header-sticky-hide")
    }
  });
  $(".dropdown-button").click(function () {
    $(this).find("#dropdown-list").slideToggle("fast")
  });
  $("button.search-button").click(function () {
    $('.ftc_search_ajax').slideToggle('fast')
  });
  $(".menu-ftc").click(function () {
    $('#primary-menu').slideToggle("fast")
  });
  $('#mega_main_menu').parent().addClass('menu-fix');
  $(window).scroll(function () {
    var heightHeader = $('.header-ftc').height();
    if ($(this).scrollTop() > heightHeader) {
      $(".header-ftc ").addClass("header-sticky-mobile")
    } else {
      $(".header-ftc ").removeClass("header-sticky-mobile")
    }
  });
  $(document).ready(function () {
    $('.ftc-mobile-wrapper #mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > ul > li.menu-item-has-children').click(function () {
      $(this).toggleClass('active');
      $(this).find(">.mega_dropdown").slideToggle()
    })
  });
  $(document).ready(function () {
    $('.woocommerce-ordering .orderby').click(function () {
      $(this).toggleClass('active');
      $("ul.dropdown").slideToggle('fast', 'swing')
    })
  });

  function ftc_off_canvas_cart() {
    var body = $('body');
    body.on("click", ".cart-item-canvas", function (t) {
      t.preventDefault();
      if (body.hasClass('cart-canvas')) {
        body.removeClass('cart-canvas')
      } else {
        body.addClass('cart-canvas')
      }
    });
    body.on("click", ".close-cart", function (t) {
      if (body.hasClass('cart-canvas')) {
        body.removeClass('cart-canvas')
      }
    });
    body.on("click", ".ftc-close-popup", function (t) {
      body.removeClass('cart-canvas')
    });
    $('body').on('added_to_cart', function (event, fragments, cart_hash) {
      body.addClass('cart-canvas')
    })
  }

  ftc_off_canvas_cart();

  var ftc_shortcode_params = {
    // "ajax_uri": "\/ornaldo\/wp-admin\/admin-ajax.php",
    // "_ftc_enable_responsive": "1",
    // "_ftc_enable_ajax_search": "1",
    // "cookies_version": "1"
  }

  function ftc_cookie_popup() {
    var cookies_version = ftc_shortcode_params.cookies_version;
    if ($.cookie('ftc_cookies_' + cookies_version) == 'accepted') return;
    var popup = $('.ftc-cookies-popup');
    setTimeout(function () {
      popup.addClass('popup-display');
      popup.on('click', '.cookies-accept-btn', function (e) {
        e.preventDefault();
        acceptCookies()
      })
    }, 2500);
    var acceptCookies = function () {
      popup.removeClass('popup-display').addClass('popup-hide');
      $.cookie('ftc_cookies_' + cookies_version, 'accepted', {expires: 60, path: '/'})
    }
  }

  ftc_cookie_popup();
  $('a.ftc-video360').magnificPopup({
    type: 'inline',
    mainClass: 'product-360',
    preloader: !1,
    fixedContentPos: !1,
    callbacks: {
      open: function () {
        $(window).resize()
      },
    },
  });
  $(document).ready(function () {
    $('.newsletterpopup .close-popup, .popupshadow').on('click', function () {
      $('.newsletterpopup').hide();
      $('.popupshadow').hide()
    })
  });
  $(window).load(function () {
    if ($('.newsletterpopup').length) {
      var cookieValue = $.cookie("ftc_popup");
      if (cookieValue == 1) {
        $('.newsletterpopup').hide();
        $('.popupshadow').hide()
      } else {
        $('.newsletterpopup').show();
        $('.popupshadow').show()
      }
    }
  });
  $('#ftc_dont_show_again').change(function () {
    if ($(this).is(':checked')) {
      $.cookie("ftc_popup", 1, {expires: 24 * 60 * 60 * 1000})
    }
  });

  function ftc_open_menu() {
    var body = $('body');
    body.on("click", ".mobile-nav", function () {
      if (body.hasClass("has-mobile-menu")) {
        body.removeClass("has-mobile-menu")
      } else {
        body.addClass("has-mobile-menu")
      }
    });
    body.on("click", ".btn-toggle-canvas", function () {
      body.removeClass("has-mobile-menu")
    });
    body.on("click touchstart", ".ftc-close-popup", function () {
      body.removeClass("has-mobile-menu")
    })
  }

  ftc_open_menu();
  if ($('html').offset().top < 100) {
    $("#to-top").hide().addClass("off")
  }
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#to-top").removeClass("off").addClass("on")
    } else {
      $("#to-top").removeClass("on").addClass("off")
    }
  });
  $('#to-top .scroll-button').click(function () {
    $('body,html').animate({scrollTop: '0px'}, 1000);
    return !1
  });
  $(document).ready(function () {
    if ($('.wcvendors_sold_by_in_loop').length) {
      $('.product .item-description').addClass('wc-vendor')
    }
  });
  $(document).ready(function () {
    if ($('.page-container .ftc-sidebar#left-sidebar').length) {
      $('.page-container').find('.pv_shop_description').addClass('col-md-9')
    }
  });
  $(document).ready(function () {
    if ($('.page-container .ftc-sidebar#right-sidebar').length) {
      $('.page-container').find('.pv_shop_description').addClass('col-md-12')
    }
  });
  $(' .ftc-sb-brandslider,.ftc-list-category-slider,.ftc-product-time-deal').each(function () {
    var element = $(this);
    var margin = element.data('margin');
    var columns = element.data('columns');
    var nav = element.data('nav') == 1;
    var dots = element.data('dots') == 1;
    var autoplay = element.data('autoplay') == 1;
    var slider = element.data('slider') == 1;
    var desksmall_items = element.data('desksmall_items');
    var tabletmini_items = element.data('tabletmini_items');
    var tablet_items = element.data('tablet_items');
    var mobile_items = element.data('mobile_items');
    var mobilesmall_items = element.data('mobilesmall_items');
    if (slider) {
      var _slider_data = {
        loop: !0,
        nav: nav,
        dots: dots,
        navSpeed: 1000,
        slideBy: 1,
        navText: [,],
        navRewind: !1,
        rtl: $('body').hasClass('rtl'),
        margin: margin,
        autoplay: autoplay,
        autoplayTimeout: 5000,
        autoplayHoverPause: !0,
        autoplaySpeed: 1000,
        mouseDrag: !0,
        touchDrag: !0,
        responsiveBaseElement: $('body'),
        responsiveRefreshRate: 400,
        responsive: {
          0: {items: mobilesmall_items, margin: 20},
          480: {items: mobile_items},
          640: {items: tabletmini_items},
          768: {items: tablet_items},
          991: {items: desksmall_items},
          1199: {items: columns}
        },
        onInitialized: function () {
          element.find('.meta-slider').addClass('loaded').removeClass('loading')
        }
      };
      element.find('.meta-slider > div').owlCarousel(_slider_data)
    }
  });
  $('.ftc-product-slider').each(function () {
    var element = $(this);
    var margin = element.data('margin');
    var columns = element.data('columns');
    var nav = element.data('nav') == 1;
    var dots = element.data('dots') == 1;
    var autoplay = element.data('autoplay') == 1;
    var slider = element.data('slider') == 1;
    var desksmall_items = element.data('desksmall_items');
    var tabletmini_items = element.data('tabletmini_items');
    var tablet_items = element.data('tablet_items');
    var mobile_items = element.data('mobile_items');
    var mobilesmall_items = element.data('mobilesmall_items');
    if (slider) {
      var _slider_data = {
        loop: !0,
        nav: nav,
        dots: dots,
        navSpeed: 1000,
        slideBy: 1,
        navText: [,],
        navRewind: !1,
        rtl: $('body').hasClass('rtl'),
        margin: margin,
        autoplay: autoplay,
        autoplayTimeout: 5000,
        autoplayHoverPause: !0,
        autoplaySpeed: 1000,
        mouseDrag: !0,
        touchDrag: !0,
        responsiveBaseElement: $('body'),
        responsiveRefreshRate: 400,
        responsive: {
          0: {items: mobilesmall_items, margin: 15},
          480: {items: mobile_items},
          640: {items: tabletmini_items},
          768: {items: tablet_items},
          991: {items: desksmall_items},
          1199: {items: columns}
        },
        onInitialized: function () {
          element.find('.meta-slider').addClass('loaded').removeClass('loading')
        }
      };
      element.find('.meta-slider > div').owlCarousel(_slider_data)
    }
  });
  $('.wcv_shop_description').addClass('col-sm-9');
  $('.ftc-sb-blogs').each(function () {
    var element = $(this);
    var atts = element.data('atts');
    var nonce = element.data("atts").nonce;
    if (atts.slider) {
      var nav = parseInt(atts.nav) == 1;
      var auto_play = parseInt(atts.auto_play) == 1;
      var margin = parseInt(atts.margin);
      var columns = parseInt(atts.columns);
      var desksmall_items = parseInt(atts.desksmall_items);
      var tablet_items = parseInt(atts.tablet_items);
      var tabletmini_items = parseInt(atts.tabletmini_items);
      var mobile_items = parseInt(atts.mobile_items);
      var mobilesmall_items = parseInt(atts.mobilesmall_items);
      var slider_data = {
        loop: !0,
        nav: nav,
        navText: [,],
        navSpeed: 1000,
        slideBy: 1,
        rtl: $('body').hasClass('rtl'),
        margin: margin,
        navRewind: !1,
        autoplay: auto_play,
        autoplayTimeout: 5000,
        autoplayHoverPause: !0,
        autoplaySpeed: !1,
        autoHeight: !0,
        mouseDrag: !0,
        touchDrag: !0,
        responsiveBaseElement: $('body'),
        responsiveRefreshRate: 400,
        responsive: {
          0: {items: mobilesmall_items},
          480: {items: mobile_items},
          640: {items: tabletmini_items},
          768: {items: tablet_items},
          991: {items: desksmall_items},
          1199: {items: columns}
        },
        onInitialized: function () {
          element.find('.meta-slider').addClass('loaded').removeClass('loading')
        }
      };
      element.find('.meta-slider > .blogs').owlCarousel(slider_data)
    }
    element.find('.ftc_search_ajax').bind('click', function () {
      var button = $(this);
      if (button.hasClass('loading')) {
        return !1
      }
    });
    var masonry = !1;
    if (atts.masonry && typeof $.fn.isotope == 'function') {
      masonry = !0
    }
    if (masonry) {
      $(window).bind('load', function () {
        element.find('.blogs').isotope()
      })
    }
    element.find('a.load-more').bind('click', function () {
      var button = $(this);
      if (button.hasClass('loading')) {
        return !1
      }
      button.addClass('loading');
      var paged = button.attr('data-paged');
      $.ajax({
        type: "POST",
        timeout: 30000,
        url: ftc_shortcode_params.ajax_uri,
        data: {action: 'ftc_blogs_load_items', paged: paged, atts: atts, nonce: nonce},
        error: function (xhr, err) {
        },
        success: function (response) {
          button.removeClass('loading');
          button.attr('data-paged', ++paged);
          if (response != 0 && response != '') {
            if (masonry) {
              element.find('.blogs').isotope('insert', $(response));
              setTimeout(function () {
                element.find('.blogs').isotope('layout')
              }, 500)
            } else {
              element.find('.blogs').append(response);
              var columns = parseInt(atts.columns);
              element.find('.blogs .item').removeClass('first last');
              element.find('.blogs .item').each(function (index, ele) {
                if (index % columns == 0) {
                  $(ele).addClass('first')
                }
                if (index % columns == columns - 1) {
                  $(ele).addClass('last')
                }
              })
            }
          } else {
            button.parent().remove()
          }
        }
      });
      return !1
    })
  });
  $('.ftc-product').each(function () {
    var element = $(this);
    var atts = element.data('atts');
    var nonce = element.data("nonce");
    var args = element.data("args");
    element.find('a.load-more').bind('click', function () {
      var button = $(this);
      if (button.hasClass('loading')) {
        return !1
      }
      button.addClass('loading');
      var paged = button.attr('data-paged');
      $.ajax({
        type: "POST",
        timeout: 30000,
        url: ftc_shortcode_params.ajax_uri,
        data: {action: 'ftc_products_load_items', paged: paged, atts: atts, nonce: nonce, args: args},
        error: function (xhr, err) {
        },
        success: function (response) {
          button.removeClass('loading');
          button.attr('data-paged', ++paged);
          if (response != 0 && response != '') {
            element.find('.products').append(response)
          } else {
            button.parent().remove()
          }
        }
      });
      return !1
    })
  });
  $(document).on('click', '.plus, .minus', function () {
    var $qty = $(this).closest('.quantity').find('.qty'), currentVal = parseFloat($qty.val()),
      max = parseFloat($qty.attr('max')), min = parseFloat($qty.attr('min')), step = $qty.attr('step');
    if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
    if (max === '' || max === 'NaN') max = '';
    if (min === '' || min === 'NaN') min = 0;
    if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;
    if ($(this).is('.plus')) {
      if (max && (max == currentVal || currentVal > max)) {
        $qty.val(max)
      } else {
        $qty.val(currentVal + parseFloat(step))
      }
    } else {
      if (min && (min == currentVal || currentVal < min)) {
        $qty.val(min)
      } else if (currentVal > 0) {
        $qty.val(currentVal - parseFloat(step))
      }
    }
    $qty.trigger('change')
  });
  if ($('.single-product').length > 0) {
    var wrapper = $('.single-product .product:not(.vertical-thumbnail) .details-img .thumbnails.loading');
    wrapper.find('.details_thumbnails').owlCarousel({
      loop: !1,
      nav: !0,
      navText: [,],
      dots: !1,
      navSpeed: 1000,
      rtl: $('body').hasClass('rtl'),
      margin: 16,
      navRewind: !1,
      autoplay: !0,
      autoplayHoverPause: !0,
      autoplaySpeed: 1000,
      responsiveBaseElement: wrapper,
      responsiveRefreshRate: 1000,
      responsive: {0: {items: 1}, 100: {items: 2}, 290: {items: 3}},
      onInitialized: function () {
        wrapper.addClass('loaded').removeClass('loading')
      }
    });
    var wrapper = $('.single-product .product.vertical-thumbnail .details-img .thumbnails.loading');
    if (wrapper.length > 0 && typeof $.fn.carouFredSel == 'function') {
      var items = 4;
      if ($('#left-sidebar').length > 0 || $('#right-sidebar').length > 0) {
        items = 3
      }
      if ($('#left-sidebar').length > 0 && $('#right-sidebar').length > 0) {
        items = 4
      }
      var _slider_data = {
        items: items,
        direction: 'up',
        width: 'auto',
        height: '150px',
        infinite: !0,
        prev: wrapper.find('.owl-prev').selector,
        next: wrapper.find('.owl-next').selector,
        auto: {play: !0, timeoutDuration: 5000, duration: 800, delay: 3000, items: 1, pauseOnHover: !0},
        scroll: {items: 1},
        swipe: {onTouch: !0, onMouse: !0},
        onCreate: function () {
          wrapper.addClass('loaded').removeClass('loading')
        }
      };
      wrapper.find('.details_thumbnails').carouFredSel(_slider_data);
      $(window).bind('load', function () {
        $(window).trigger('resize')
      });
      $(window).bind('resize orientationchange', $.debounce(250, function () {
        if ($(window).width() < 420) {
          _slider_data.items = 2
        } else if ($(window).width() < 500) {
          _slider_data.items = 3
        } else if ($(window).width() < 768) {
          _slider_data.items = 4
        } else {
          _slider_data.items = items
        }
        wrapper.find('.details_thumbnails').trigger('configuration', _slider_data)
      }))
    }
  }
  $('.single-product .up-sells .products, .woocommerce .cross-sells .products').each(function () {
    $(this).addClass('loaded').removeClass('loading');
    $(this).owlCarousel({
      loop: !0,
      nav: !1,
      navText: [,],
      dots: !1,
      navSpeed: 1000,
      slideBy: 1,
      rtl: jQuery('body').hasClass('rtl'),
      margin: 30,
      autoplayTimeout: 5000,
      responsiveRefreshRate: 400,
      responsive: {0: {items: 1}, 480: {items: 2}, 736: {items: 3}, 800: {items: 4}}
    })
  });
  $('.single-product .related .products').each(function () {
    $(this).addClass('loaded').removeClass('loading');
    $(this).owlCarousel({
      loop: !0,
      nav: !0,
      navText: [,],
      dots: !1,
      navSpeed: 1000,
      slideBy: 1,
      rtl: jQuery('body').hasClass('rtl'),
      margin: 30,
      autoplayTimeout: 5000,
      responsiveRefreshRate: 400,
      responsive: {0: {items: 2, margin: 15}, 480: {items: 3}, 736: {items: 3}, 800: {items: 4}}
    })
  });
  $(document).on('click', '.variations_form .ftc-product-attribute .variation-product__option a', function () {
    var _this = $(this);
    var val = _this.closest('.variation-product__option').data('variation');
    var selector = _this.closest('.ftc-product-attribute').siblings('select');
    if (selector.length > 0) {
      if (selector.find('option[value="' + val + '"]').length > 0) {
        selector.val(val).change();
        _this.closest('.ftc-product-attribute').find('.variation-product__option').removeClass('selected');
        _this.closest('.variation-product__option').addClass('selected')
      }
    }
    return !1
  });
  $('.variations_form').on('click', '.reset_variations', function () {
    $(this).closest('.variations').find('.ftc-product-attribute .variation-product__option').removeClass('selected')
  });
  $('.single-post .related-posts.loading .meta-slider .blogs').each(function () {
    $(this).addClass('loaded').removeClass('loading');
    $(this).owlCarousel({
      loop: !0,
      nav: !1,
      navText: [,],
      dots: !1,
      navSpeed: 1000,
      slideBy: 1,
      rtl: jQuery('body').hasClass('rtl'),
      margin: 30,
      autoplayTimeout: 5000,
      responsiveRefreshRate: 400,
      responsive: {0: {items: 1}, 480: {items: 2}, 800: {items: 2}}
    })
  });
  $('.blog-image.gallery,.ftc-image-slider .ftc__slider__image').each(function () {
    $(this).addClass('loaded').removeClass('loading');
    $(this).owlCarousel({
      items: 1,
      loop: !0,
      nav: !1,
      dots: !0,
      navText: [,],
      navSpeed: 1000,
      slideBy: 1,
      rtl: $('body').hasClass('rtl'),
      margin: 10,
      navRewind: !1,
      autoplay: !0,
      autoplayTimeout: 1000,
      autoplayHoverPause: !0,
      autoplaySpeed: 4000,
      autoHeight: !0,
      responsive: {0: {items: 1}}
    })
  });
  $(document).on('click', '.widget_categories span.icon-toggle', function () {
    if (!$(this).parent().hasClass('active')) {
      $(this).parent().find('ul.children:first').slideDown(300);
      $(this).parent().addClass('active')
    } else {
      $(this).parent().find('ul.children').slideUp(300);
      $(this).parent().removeClass('active');
      $(this).parent().find('li.cat-parent').removeClass('active')
    }
  });
  $('.widget_categories li.current-cat').siblings('.icon-toggle').parents('ul.children').trigger('click').slideUp(300);
  $(document).on('click', '.widget-container.ftc-product-categories-widget .icon-toggle', function () {
    if (!$(this).parent().hasClass('active')) {
      $(this).parent().addClass('active');
      $(this).parent().find('ul.children:first').slideDown(300)
    } else {
      $(this).parent().find('ul.children').slideUp(300);
      $(this).parent().removeClass('active');
      $(this).parent().find('li.cat-parent').removeClass('active')
    }
  });
  $('.widget-container.ftc-product-categories-widget').each(function () {
    $(this).find('ul.children').parent('li').addClass('cat-parent');
    $(this).find('li.current').parents('ul.children').siblings('.icon-toggle').trigger('click')
  });

  function ftc_widget_on_off() {
    if (typeof ftc_shortcode_params._ftc_enable_responsive != 'undefined' && !ftc_shortcode_params._ftc_enable_responsive) {
      return
    }
    jQuery('.footer-container .widget-title-wrapper a.block-control').remove();
    var window_width = jQuery(window).width();
    window_width += ftc_take_width_of_scrollbar();
    if (window_width >= 768) {
      jQuery('.widget-title-wrapper a.block-control').removeClass('active').hide();
      jQuery('.widget-title-wrapper a.block-control').parent().siblings().show()
    } else {
      jQuery('.widget-title-wrapper a.block-control').removeClass('active').show();
      jQuery('.widget-title-wrapper a.block-control').parent().siblings().hide();
      jQuery('.wpb_widgetised_column .widget-title-wrapper, .footer-container .widget-title-wrapper').siblings().hide()
    }
  }

  $(document).ready(function () {
    $('.dokan-store-widget').click(function () {
      $(this).toggleClass('active')
    })
  });
  $('.widget-title-wrapper a.block-control').bind('click', function (e) {
    e.preventDefault();
    $(this).parent().siblings().slideToggle(400);
    $(this).toggleClass('active')
  });
  ftc_widget_on_off();
  if (!on_touch) {
    $(window).bind('resize', $.throttle(250, function () {
      ftc_widget_on_off()
    }))
  }
  $('form.woocommerce-ordering ul.orderby ul a').bind('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('current')) {
      return
    }
    $(this).closest('form.woocommerce-ordering').find('select.orderby').val($(this).attr('data-orderby'));
    $(this).closest('form.woocommerce-ordering').submit()
  });

  function ftc_slider_products_categorytabs_is_slider(element, show_nav, auto_play, columns, responsive, margin) {
    if (element.find('.products .ftc-products').length > 0) {
      show_nav = (show_nav == 1) ? !0 : !1;
      auto_play = (auto_play == 1) ? !0 : !1;
      columns = parseInt(columns);
      var _slider_data = {
        loop: !0,
        nav: show_nav,
        navText: [,],
        dots: !1,
        navSpeed: 1000,
        slideBy: 1,
        rtl: $('body').hasClass('rtl'),
        margin: 0,
        navRewind: !1,
        autoplay: auto_play,
        autoplayTimeout: 5000,
        autoplayHoverPause: !1,
        autoplaySpeed: 1000,
        mouseDrag: !0,
        touchDrag: !0,
        responsiveBaseElement: $('body').find('.products'),
        responsiveRefreshRate: 400,
        responsive: {
          0: {items: 1},
          320: {items: 2},
          470: {items: 3},
          670: {items: 4},
          870: {items: 5},
          1100: {items: columns}
        },
        onInitialized: function () {
        }
      };
      if (responsive != undefined) {
        _slider_data.responsive = responsive
      }
      if (margin != undefined) {
        _slider_data.margin = margin
      }
      element.find('.products').owlCarousel(_slider_data)
    }
  }

  var ftc_type_of_products_data = [];
  $('.ftc-products-category .row-tabs .tab-item').bind('click', function () {
    if ($(this).hasClass('current') || $(this).parents('.ftc-products-category').find('.row-content').hasClass('loading')) {
      return
    }
    $(this).parents('.ftc-products-category').find('.row-tabs .tab-item').removeClass('current');
    $(this).addClass('current')
    var element = $(this).parents('.ftc-products-category');
    var element_id = element.attr('id');
    var product_cat = $(this).data('product_cat');
    var atts = element.data('atts');
    var nonce = element.data("atts").nonce;
    var margin = 30;
    var responsive = {0: {items: 1}, 600: {items: 2}, 900: {items: 3}, 1000: {items: atts.columns}};
    element.find('.row-tabs .tab-item').removeClass('current');
    $(this).addClass('current');
    var tab_data_index = element_id + '-' + product_cat.toString().split(',').join('-');
    if (ftc_type_of_products_data[tab_data_index] != undefined) {
      element.find('.column-products .products.owl-carousel').owlCarousel('destroy');
      element.find('.row-content > div').remove();
      element.find('.row-content').append(ftc_type_of_products_data[tab_data_index]);
      if (typeof ftc_quickshop_process_action == 'function') {
        ftc_quickshop_process_action()
      }
      element.find('.lazy-loading img').each(function () {
        if ($(this).data('src')) {
          $(this).attr('src', $(this).data('src'))
        }
      });
      element.find('.lazy-loading').removeClass('lazy-loading').addClass('lazy-loaded');
      ftc_slider_products_categorytabs_is_slider(element, atts.show_nav, atts.auto_play, atts.columns, responsive, margin);
      return
    }
    element.find('.row-content').addClass('loading');
    $.ajax({
      type: "POST",
      timeout: 30000,
      url: ftc_shortcode_params.ajax_uri,
      data: {
        action: 'ftc_get_product_content_in_category_tab_2',
        atts: atts,
        nonce: nonce,
        product_cat: $(this).data('product_cat')
      },
      error: function (xhr, err) {
      },
      success: function (response) {
        if (response) {
          element.find('.column-products .products.owl-carousel').owlCarousel('destroy');
          element.find('.row-content > div').remove();
          element.find('.row-content').append(response);
          if (typeof ftc_quickshop_process_action == 'function') {
            ftc_quickshop_process_action()
          }
          if (element.find('.product .counter-wrapper').length == 0) {
            ftc_type_of_products_data[tab_data_index] = response
          }
          ftc_countdown(element.find('.product .counter-wrapper'));
          ftc_slider_products_categorytabs_is_slider(element, atts.show_nav, atts.auto_play, atts.columns, responsive, margin)
        }
        element.find('.row-content').removeClass('loading')
      }
    })
  });
  $('.ftc-products-category').each(function () {
    var current_tab = 1;
    var count_tab = $(this).find('.row-tabs .tab-item').length;
    var atts = $(this).data('atts');
    if (atts.current_tab != undefined) {
      var defined_current_tab = parseInt(atts.current_tab);
      if (defined_current_tab > 1 && defined_current_tab <= count_tab) {
        current_tab = defined_current_tab
      }
    }
    $(this).find('.row-tabs .tab-item').eq(current_tab - 1).trigger('click')
  });

  function ftc_countdown(countdown) {
    if (countdown.length > 0) {
      var interval = setInterval(function () {
        countdown.each(function (index, countdown) {
          var day = 0;
          var hour = 0;
          var minute = 0;
          var second = 0;
          var delta = 0;
          var time_day = 60 * 60 * 24;
          var time_hour = 60 * 60;
          var time_minute = 60;
          $(countdown).find('.days .number-wrapper .number').each(function (i, e) {
            day = parseInt($(e).text())
          });
          $(countdown).find('.hours .number-wrapper .number').each(function (i, e) {
            hour = parseInt($(e).text())
          });
          $(countdown).find('.minutes .number-wrapper .number').each(function (i, e) {
            minute = parseInt($(e).text())
          });
          $(countdown).find('.seconds .number-wrapper .number').each(function (i, e) {
            second = parseInt($(e).text())
          });
          if (day != 0 || hour != 0 || minute != 0 || second != 0) {
            delta = (day * time_day) + (hour * time_hour) + (minute * time_minute) + second;
            delta--;
            day = Math.floor(delta / time_day);
            delta -= day * time_day;
            hour = Math.floor(delta / time_hour);
            delta -= hour * time_hour;
            minute = Math.floor(delta / time_minute);
            delta -= minute * time_minute;
            if (delta > 0) {
              second = delta
            } else {
              second = '0'
            }
            day = (day < 10) ? ftc_start_number_timer(day, 2) : day.toString();
            hour = (hour < 10) ? ftc_start_number_timer(hour, 2) : hour.toString();
            minute = (minute < 10) ? ftc_start_number_timer(minute, 2) : minute.toString();
            second = (second < 10) ? ftc_start_number_timer(second, 2) : second.toString();
            $(countdown).find('.days .number-wrapper .number').each(function (i, e) {
              $(e).text(day)
            });
            $(countdown).find('.hours .number-wrapper .number').each(function (i, e) {
              $(e).text(hour)
            });
            $(countdown).find('.minutes .number-wrapper .number').each(function (i, e) {
              $(e).text(minute)
            });
            $(countdown).find('.seconds .number-wrapper .number').each(function (i, e) {
              $(e).text(second)
            })
          }
        })
      }, 1000)
    }
  }

  ftc_countdown($('.product .counter-wrapper, .ftc-countdown .counter-wrapper'));

  function ftc_start_number_timer(str, max) {
    str = str.toString();
    return str.length < max ? ftc_start_number_timer('0' + str, max) : str
  }

  $('.portfolio-inner a[rel^="prettyPhoto"]').prettyPhoto({show_title: !1, deeplinking: !1, social_tools: !1});
  $(window).on('load', function () {
    if (typeof $.fn.isotope == 'function') {
      $('.ftc-portfolio-wrapper .portfolio-inner').isotope({filter: '*'})
    }
  });
  $('.ftc-portfolio-wrapper .filter-bar li').on('click', function () {
    $(this).siblings('li').removeClass('current');
    $(this).addClass('current');
    var container = $(this).parents('.ftc-portfolio-wrapper').find('.portfolio-inner');
    var data_filter = $(this).data('filter');
    container.isotope({filter: data_filter})
  });
  $('.ftc-portfolio-wrapper').each(function () {
    var element = $(this);
    var atts = element.data('atts');
    var nonce = element.data("atts").nonce;
    element.find('a.load-more').bind('click', function () {
      var button = $(this);
      if (button.hasClass('loading')) {
        return !1
      }
      button.addClass('loading');
      var paged = button.attr('data-paged');
      $.ajax({
        type: "POST",
        timeout: 30000,
        url: ftc_shortcode_params.ajax_uri,
        data: {action: 'ftc_portfolio_load_items', paged: paged, atts: atts, nonce: nonce},
        error: function (xhr, err) {
        },
        success: function (response) {
          button.removeClass('loading');
          button.attr('data-paged', ++paged);
          if (response != 0 && response != '') {
            if (typeof $.fn.isotope == 'function') {
              element.find('.portfolio-inner').isotope('insert', $(response));
              element.find('.filter-bar li.current').trigger('click');
              setTimeout(function () {
                element.find('.portfolio-inner').isotope('layout')
              }, 500)
            }
          } else {
            button.parent().remove()
          }
        }
      });
      return !1
    })
  });
  $('.ftc-sb-testimonial.ftc-slider').each(function () {
    var slider = !0;
    if ($(this).find('.item').length <= 1) {
      slider = !1
    }
    if (slider) {
      var columns = 1;
      var margin = 30;
      var nav = $(this).data('nav') === 1;
      var dots = $(this).data('dots') === 1;
      var autoplay = $(this).data('autoplay') === 1;
      if ($(this).data('columns')) {
        columns = $(this).data('columns')
      }
      if ($(this).data('margin')) {
        margin = $(this).data('margin')
      }
      $(this).addClass('loaded').removeClass('loading');
      $(this).owlCarousel({
        items: 1,
        loop: !0,
        nav: nav,
        navText: [,],
        dots: dots,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navSpeed: 1000,
        rtl: $('body').hasClass('rtl'),
        margin: margin,
        autoplay: autoplay,
        autoplaySpeed: 1000,
        autoplayTimeout: 5000,
        center: !0,
        responsive: {0: {items: 1}, 768: {items: 1}, 1200: {items: columns}}
      })
    }
  });

  function ftc_googlemap_start_up(map_content_obj, address, zoom, map_type, title) {
    var geocoder, map;
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': address}, function (results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var _ret_array = new Array(results[0].geometry.location.lat(), results[0].geometry.location.lng());
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({map: map, title: title, position: results[0].geometry.location})
      }
    });
    var mapCanvas = map_content_obj.get(0);
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, -78.5463),
      zoom: zoom,
      mapTypeId: google.maps.MapTypeId[map_type],
      scrollwheel: !1,
      zoomControl: !0,
      panControl: !0,
      scaleControl: !0,
      streetViewControl: !1,
      overviewMapControl: !0,
      disableDoubleClickZoom: !1
    }
    map = new google.maps.Map(mapCanvas, mapOptions)
  }

  $(window).bind('load resize', function () {
    $('.google-map-container').each(function () {
      var element = $(this);
      var map_content = $(this).find('> div');
      var address = element.data('address');
      var zoom = element.data('zoom');
      var map_type = element.data('map_type');
      var title = element.data('title');
      ftc_googlemap_start_up(map_content, address, zoom, map_type, title)
    })
  });
  $('.ftc-product-items-widget.ftc-slider').each(function () {
    var nav = $(this).data('nav') == 1;
    var auto_play = $(this).data('auto_play') == 1;
    var columns = $(this).data('columns');
    var margin = $(this).data('margin');
    $(this).owlCarousel({
      loop: !0,
      items: 1,
      nav: nav,
      navText: [,],
      dots: !1,
      navSpeed: 1000,
      slideBy: 1,
      rtl: $('body').hasClass('rtl'),
      navRewind: !1,
      columns: columns,
      margin: margin,
      autoplay: auto_play,
      autoplayTimeout: 5000,
      responsiveRefreshRate: 1000,
      responsive: {0: {items: columns}}
    })
  });

  function ftc_update_information_tini_wishlist() {
    if (typeof ftc_shortcode_params.ajax_uri == 'undefined') {
      return
    }
    var wishlist = jQuery('.ftc-my-wishlist');
    if (wishlist.length == 0) {
      return
    }
    wishlist.addClass('loading');
    jQuery.ajax({
      type: 'POST',
      url: ftc_shortcode_params.ajax_uri,
      data: {action: 'update_tini_wishlist'},
      success: function (response) {
        var first_icon = wishlist.children('i.fa:first');
        wishlist.html(response);
        if (first_icon.length > 0) {
          wishlist.prepend(first_icon)
        }
        wishlist.removeClass('loading')
      }
    })
  }

  $('body').bind('added_to_wishlist', function () {
    ftc_update_information_tini_wishlist();
    $('.yith-wcwl-wishlistaddedbrowse.show, .yith-wcwl-wishlistexistsbrowse.show').closest('.yith-wcwl-add-to-wishlist').addClass('added')
  });
  $(document).on('click', '#yith-wcwl-form table tbody tr td a.remove, #yith-wcwl-form table tbody tr td a.add_to_cart_button', function () {
    var old_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
    var count = 1;
    var time_interval = setInterval(function () {
      count++;
      var new_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
      if (old_num_product != new_num_product || count == 20) {
        clearInterval(time_interval);
        ftc_update_information_tini_wishlist()
      }
    }, 500)
  });

  function ftc_quickshop_process_action() {
    jQuery('a.quickview').prettyPhoto({
      deeplinking: !1,
      opacity: 0.9,
      social_tools: !1,
      default_width: 900,
      default_height: 450,
      theme: 'pp_woocommerce',
      changepicturecallback: function () {
        jQuery('.pp_inline').find('form.variations_form').wc_variation_form();
        jQuery('.pp_inline').find('form.variations_form .variations select').change();
        jQuery('body').trigger('wc_fragments_loaded');
        jQuery('.pp_inline .variations_form').on('click', '.reset_variations', function () {
          jQuery(this).closest('.variations').find('.ftc-product-attribute .option').removeClass('selected')
        });
        jQuery('.pp_woocommerce').addClass('loaded');
        var _this = jQuery('.ftc-quickshop-wrapper .images-slider-wrapper');
        if (_this.find('.image-item').length <= 1) {
          return
        }
        var owl = _this.find('.image-items').owlCarousel({
          items: 1,
          loop: !0,
          nav: !0,
          navText: [,],
          dots: !1,
          navSpeed: 1000,
          slideBy: 1,
          rtl: jQuery('body').hasClass('rtl'),
          margin: 10,
          navRewind: !1,
          autoplay: !1,
          autoplayTimeout: 5000,
          autoplayHoverPause: !1,
          autoplaySpeed: !1,
          mouseDrag: !0,
          touchDrag: !0,
          responsiveBaseElement: _this,
          responsiveRefreshRate: 1000,
          onInitialized: function () {
            _this.addClass('loaded').removeClass('loading')
          }
        })
      }
    })
  }

  ftc_quickshop_process_action();
  (function (a) {
    jQuery.browser.ftc_mobile = /android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
  })(navigator.userAgent || navigator.vendor || window.opera);

  function ftc_is_device_like_smartphone() {
    var is_touch = !!("ontouchstart" in window) ? !0 : !1;
    if (jQuery.browser.ftc_mobile) {
      is_touch = !0
    }
    return is_touch
  }

  var on_touch = ftc_is_device_like_smartphone();

  function ftc_take_width_of_scrollbar() {
    var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
      $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
      inner = $inner[0], outer = $outer[0];
    jQuery('body').append(outer);
    var width1 = inner.offsetWidth;
    $outer.css('overflow', 'scroll');
    var width2 = outer.clientWidth;
    $outer.remove();
    return (width1 - width2)
  }

  if ($('ftc-shop-cart')) {
    $(document).on('click', '.cart-item-wrapper .remove', function (event) {
      event.preventDefault();
      $(this).closest('li').addClass('loading');
      jQuery.ajax({
        type: 'POST',
        url: ftc_shortcode_params.ajax_uri,
        data: {action: 'ftc_remove_cart_item', cart_item_key: $(this).data('key')},
        success: function (data) {
          if (data && data.fragments) {
            $.each(data.fragments, function (key, value) {
              $(key).replaceWith(value)
            })
          }
        }
      })
    })
  }
  $('img.ftc-image').bind('load', function () {
    $(this).parents('.lazy-loading').removeClass('lazy-loading').addClass('lazy-loaded')
  });
  $('img.ftc-image:not(.product-hover-image)').each(function () {
    if ($(this).data('src')) {
      $(this).attr('src', $(this).data('src'))
    }
  });
  $('img.ftc-image.product-hover-image').each(function () {
    if ($(this).data('src')) {
      $(this).attr('src', $(this).data('src'))
    }
  });
  if ($('.woocommerce-tabs.accordion-tabs').length > 0) {
    $('a.woocommerce-review-link').bind('click', function () {
      var acc_header = $('#reviews').parents('.vc_tta-panel-body').siblings('.vc_tta-panel-heading');
      $('.vc_tta-accordion .vc_tta-panel').removeClass('vc_active');
      acc_header.parents('.vc_tta-panel').addClass('vc_active');
      if (!acc_header.parents('.vc_tta-panel').hasClass('vc_active')) {
        setTimeout(function () {
          acc_header.trigger('click');
          acc_header.find('.vc_tta-panel-title a').trigger('click')
        }, 100)
      }
    })
  }
  $(document).on('mouseenter mouseleave', '.ftc_thumb_list_hover', function () {
    $(this).closest(".ftc-product").find(".images a img").attr("src", $(this).attr("data-hover"))
  });
  if (typeof ftc_shortcode_params._ftc_enable_ajax_search != 'undefined' && ftc_shortcode_params._ftc_enable_ajax_search == 1) {
    ftc_ajax_search()
  }

  function ftc_ajax_search() {
    var search_string = '';
    var search_previous_string = '';
    var search_timeout;
    var search_input;
    var search_cache_data = {};
    jQuery('.ftc_search_ajax').append('<div class="ftc-enable-ajax-search"></div>');
    var ftc_enable_ajax_search = jQuery('.ftc-enable-ajax-search');
    jQuery('.header-ftc .ftc_search_ajax input[name="s"]').bind('keyup', function (e) {
      search_input = jQuery(this);
      ftc_enable_ajax_search.hide();
      search_string = jQuery.trim(jQuery(this).val());
      if (search_string.length < 2) {
        search_input.parents('.ftc_search_ajax').removeClass('loading');
        return
      }
      if (search_cache_data[search_string]) {
        ftc_enable_ajax_search.html(search_cache_data[search_string]);
        ftc_enable_ajax_search.show();
        search_previous_string = '';
        search_input.parents('.ftc_search_ajax').removeClass('loading');
        ftc_enable_ajax_search.find('.view-all a').bind('click', function (e) {
          e.preventDefault();
          search_input.parents('form').submit()
        });
        return
      }
      clearTimeout(search_timeout);
      search_timeout = setTimeout(function () {
        if (search_string == search_previous_string || search_string.length < 2) {
          return
        }
        search_previous_string = search_string;
        search_input.parents('.ftc_search_ajax').addClass('loading');
        var category = '';
        var select_category = search_input.parents('.ftc_search_ajax').siblings('.select-category');
        if (select_category.length > 0) {
          category = select_category.find(':selected').val()
        }
        jQuery.ajax({
          type: 'POST',
          url: ftc_shortcode_params.ajax_uri,
          data: {action: 'ftc_ajax_search', search_string: search_string, category: category},
          error: function (xhr, err) {
            search_input.parents('.ftc_search_ajax').removeClass('loading')
          },
          success: function (response) {
            if (response != '') {
              response = JSON.parse(response);
              if (response.search_string == search_string) {
                ftc_enable_ajax_search.html(response.html);
                search_cache_data[search_string] = response.html;
                ftc_enable_ajax_search.css({'position': 'absolute', 'display': 'block', 'z-index': '999'});
                search_input.parents('.ftc_search_ajax').removeClass('loading');
                ftc_enable_ajax_search.find('.view-all a').bind('click', function (e) {
                  e.preventDefault();
                  search_input.parents('form').submit()
                })
              }
            } else {
              search_input.parents('.ftc_search_ajax').removeClass('loading')
            }
          }
        })
      }, 500)
    });
    ftc_enable_ajax_search.hover(function () {
    }, function () {
      ftc_enable_ajax_search.hide()
    });
    jQuery('body').bind('click', function () {
      ftc_enable_ajax_search.hide()
    });
    jQuery('.ftc-search-product select.select-category').bind('change', function () {
      search_previous_string = '';
      search_cache_data = {};
      jQuery(this).parents('.ftc-search-product').find('.ftc_search_ajax input[name="s"]').trigger('keyup')
    })
  }

  if (typeof $.fn.waypoint == 'function' && typeof $.fn.countTo == 'function') {
    $('.ftc-number').waypoint(function () {
      if (typeof this.disable == 'function') {
        this.disable();
        var element = $(this.element);
        var end_num = element.data('number')
      } else {
        var element = $(this);
        var end_num = element.data('number')
      }
      element.find('.number').countTo({from: 0, to: end_num, speed: 1500, refreshInterval: 30})
    }, {offset: '105%', triggerOnce: !0})
  }

  function ftc_cloud_zoom() {
    jQuery('.cloud-zoom-wrap .cloud-zoom-big').remove();
    jQuery('.cloud-zoom, .cloud-zoom-gallery').unbind('click');
    var clz_width = jQuery('.cloud-zoom, .cloud-zoom-gallery').width();
    var clz_img_width = jQuery('.cloud-zoom, .cloud-zoom-gallery').children('img').width();
    var cl_zoom = jQuery('.cloud-zoom, .cloud-zoom-gallery').not('.on_pc');
    var temp = (clz_width - clz_img_width) / 2;
    if (cl_zoom.length > 0) {
      cl_zoom.data('zoom', null).siblings('.mousetrap').unbind().remove();
      cl_zoom.CloudZoom({adjustX: temp})
    }
  }

  ftc_cloud_zoom();
  if ($('.cloud-zoom, .cloud-zoom-gallery').length > 0) {
    $('form.variations_form').live('found_variation', function (event, variation) {
      $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom({})
    }).live('reset_image', function () {
      $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom({})
    })
  }
  jQuery('a.ftc-size_chart').prettyPhoto({
    deeplinking: !1,
    opacity: 0.9,
    social_tools: !1,
    default_width: 800,
    default_height: 506,
    theme: 'ftc-size_chart',
    changepicturecallback: function () {
      jQuery('.ftc-size-chart').addClass('loaded')
    }
  });
  $('.prod-cat-show-top-content-button a').bind('click', function () {
    $(this).toggleClass('active');
    $('.product-category-top-content').toggle();
    $('.product-category-top-content').toggleClass('showne');
    return !1
  });
  jQuery(function ($) {
    $(document).ready(function () {
      $("#readMore, #readless").click(function () {
        $(".collapsed-content").toggle('slow', 'swing');
        $(".full-content").toggle('slow', 'swing');
        $("#readMore").toggle();
        $("#readless").toggle();
        return !1
      })
    })
  });
  jQuery(function ($) {
    $(document).ready(function () {
      $("#readmore_des, #readless_des").click(function () {
        $(".desciption_content").slideToggle('slow', 'swing');
        $(".description_fullcontent").slideToggle('slow', 'swing');
        $("#readmore_des").toggle();
        $("#readless_des").toggle();
        return !1
      })
    })
  });

  function ftc_infinite_shop() {
    var container = $('.archive.term-accessories .woocommerce > .products, .archive.infinite .woocommerce > .products'),
      paginationNext = '.woocommerce-pagination li a.next';
    if (container.length === 0 || $(paginationNext).length === 0) {
      return
    }
    var loadProduct = container.infiniteScroll({
      path: paginationNext,
      append: '.product',
      checkLastPage: !0,
      status: '.page-load-status',
      hideNav: '.woocommerce-pagination',
      history: 'push',
      debug: !1,
      scrollThreshold: 400,
      loadOnScroll: !0
    });
    loadProduct.on('append.infiniteScroll', function (event, response, path, items) {
      $('img.ftc-image').bind('load', function () {
        $(this).parents('.lazy-loading').removeClass('lazy-loading').addClass('lazy-loaded')
      });
      $('img.ftc-image').each(function () {
        if ($(this).data('src')) {
          $(this).attr('src', $(this).data('src'))
        }
      });
      if ($('.wcvendors_sold_by_in_loop').length) {
        $('.product .item-description').addClass('wc-vendor')
      }
      ftc_quickshop_process_action()
    })
  }

  ftc_infinite_shop();

  function ftc_parallax_background() {
    jQuery('.ftc-prlx-background').each(function () {
      var prlx_speed = jQuery(this).data('prlx-speed');
      if (typeof prlx_speed == 'undefined') {
        prlx_speed = 1
      }
      prlx_speed = parseFloat(prlx_speed);
      jQuery(this).parallax('50%', prlx_speed)
    })
  }

  ftc_parallax_background()
})(jQuery);

(function ($, window, document, undefined) {
  var VariationForm = function ($form) {
    var self = this;
    self.$form = $form;
    self.$attributeFields = $form.find('.variations select');
    self.$singleVariation = $form.find('.single_variation');
    self.$singleVariationWrap = $form.find('.single_variation_wrap');
    self.$resetVariations = $form.find('.reset_variations');
    self.$product = $form.closest('.product');
    self.variationData = $form.data('product_variations');
    self.useAjax = !1 === self.variationData;
    self.xhr = !1;
    self.loading = !0;
    self.$singleVariationWrap.show();
    self.$form.off('.wc-variation-form');
    self.getChosenAttributes = self.getChosenAttributes.bind(self);
    self.findMatchingVariations = self.findMatchingVariations.bind(self);
    self.isMatch = self.isMatch.bind(self);
    self.toggleResetLink = self.toggleResetLink.bind(self);
    $form.on('click.wc-variation-form', '.reset_variations', {variationForm: self}, self.onReset);
    $form.on('reload_product_variations', {variationForm: self}, self.onReload);
    $form.on('hide_variation', {variationForm: self}, self.onHide);
    $form.on('show_variation', {variationForm: self}, self.onShow);
    $form.on('click', '.single_add_to_cart_button', {variationForm: self}, self.onAddToCart);
    $form.on('reset_data', {variationForm: self}, self.onResetDisplayedVariation);
    $form.on('reset_image', {variationForm: self}, self.onResetImage);
    $form.on('change.wc-variation-form', '.variations select', {variationForm: self}, self.onChange);
    $form.on('found_variation.wc-variation-form', {variationForm: self}, self.onFoundVariation);
    $form.on('check_variations.wc-variation-form', {variationForm: self}, self.onFindVariation);
    $form.on('update_variation_values.wc-variation-form', {variationForm: self}, self.onUpdateAttributes);
    setTimeout(function () {
      $form.trigger('check_variations');
      $form.trigger('wc_variation_form');
      self.loading = !1
    }, 100)
  };
  VariationForm.prototype.onReset = function (event) {
    event.preventDefault();
    event.data.variationForm.$attributeFields.val('').change();
    event.data.variationForm.$form.trigger('reset_data')
  };
  VariationForm.prototype.onReload = function (event) {
    var form = event.data.variationForm;
    form.variationData = form.$form.data('product_variations');
    form.useAjax = !1 === form.variationData;
    form.$form.trigger('check_variations')
  };
  VariationForm.prototype.onHide = function (event) {
    event.preventDefault();
    event.data.variationForm.$form.find('.single_add_to_cart_button').removeClass('wc-variation-is-unavailable').addClass('disabled wc-variation-selection-needed');
    event.data.variationForm.$form.find('.woocommerce-variation-add-to-cart').removeClass('woocommerce-variation-add-to-cart-enabled').addClass('woocommerce-variation-add-to-cart-disabled')
  };
  VariationForm.prototype.onShow = function (event, variation, purchasable) {
    event.preventDefault();
    if (purchasable) {
      event.data.variationForm.$form.find('.single_add_to_cart_button').removeClass('disabled wc-variation-selection-needed wc-variation-is-unavailable');
      event.data.variationForm.$form.find('.woocommerce-variation-add-to-cart').removeClass('woocommerce-variation-add-to-cart-disabled').addClass('woocommerce-variation-add-to-cart-enabled')
    } else {
      event.data.variationForm.$form.find('.single_add_to_cart_button').removeClass('wc-variation-selection-needed').addClass('disabled wc-variation-is-unavailable');
      event.data.variationForm.$form.find('.woocommerce-variation-add-to-cart').removeClass('woocommerce-variation-add-to-cart-enabled').addClass('woocommerce-variation-add-to-cart-disabled')
    }
  };
  VariationForm.prototype.onAddToCart = function (event) {
    if ($(this).is('.disabled')) {
      event.preventDefault();
      if ($(this).is('.wc-variation-is-unavailable')) {
        window.alert(wc_add_to_cart_variation_params.i18n_unavailable_text)
      } else if ($(this).is('.wc-variation-selection-needed')) {
        window.alert(wc_add_to_cart_variation_params.i18n_make_a_selection_text)
      }
    }
  };
  VariationForm.prototype.onResetDisplayedVariation = function (event) {
    var form = event.data.variationForm;
    form.$product.find('.product_meta').find('.sku').wc_reset_content();
    form.$product.find('.product_weight, .woocommerce-product-attributes-item--weight .woocommerce-product-attributes-item__value').wc_reset_content();
    form.$product.find('.product_dimensions, .woocommerce-product-attributes-item--dimensions .woocommerce-product-attributes-item__value').wc_reset_content();
    form.$form.trigger('reset_image');
    form.$singleVariation.slideUp(200).trigger('hide_variation')
  };
  VariationForm.prototype.onResetImage = function (event) {
    event.data.variationForm.$form.wc_variations_image_update(!1)
  };
  VariationForm.prototype.onFindVariation = function (event) {
    var form = event.data.variationForm, attributes = form.getChosenAttributes(), currentAttributes = attributes.data;
    if (attributes.count === attributes.chosenCount) {
      if (form.useAjax) {
        if (form.xhr) {
          form.xhr.abort()
        }
        form.$form.block({message: null, overlayCSS: {background: '#fff', opacity: 0.6}});
        currentAttributes.product_id = parseInt(form.$form.data('product_id'), 10);
        currentAttributes.custom_data = form.$form.data('custom_data');
        form.xhr = $.ajax({
          url: wc_add_to_cart_variation_params.wc_ajax_url.toString().replace('%%endpoint%%', 'get_variation'),
          type: 'POST',
          data: currentAttributes,
          success: function (variation) {
            if (variation) {
              form.$form.trigger('found_variation', [variation])
            } else {
              form.$form.trigger('reset_data');
              attributes.chosenCount = 0;
              if (!form.loading) {
                form.$form.find('.single_variation').after('<p class="wc-no-matching-variations woocommerce-info">' + wc_add_to_cart_variation_params.i18n_no_matching_variations_text + '</p>');
                form.$form.find('.wc-no-matching-variations').slideDown(200)
              }
            }
          },
          complete: function () {
            form.$form.unblock()
          }
        })
      } else {
        form.$form.trigger('update_variation_values');
        var matching_variations = form.findMatchingVariations(form.variationData, currentAttributes),
          variation = matching_variations.shift();
        if (variation) {
          form.$form.trigger('found_variation', [variation])
        } else {
          form.$form.trigger('reset_data');
          attributes.chosenCount = 0;
          if (!form.loading) {
            form.$form.find('.single_variation').after('<p class="wc-no-matching-variations woocommerce-info">' + wc_add_to_cart_variation_params.i18n_no_matching_variations_text + '</p>');
            form.$form.find('.wc-no-matching-variations').slideDown(200)
          }
        }
      }
    } else {
      form.$form.trigger('update_variation_values');
      form.$form.trigger('reset_data')
    }
    form.toggleResetLink(attributes.chosenCount > 0)
  };
  VariationForm.prototype.onFoundVariation = function (event, variation) {
    var form = event.data.variationForm, $sku = form.$product.find('.product_meta').find('.sku'),
      $weight = form.$product.find('.product_weight, .woocommerce-product-attributes-item--weight .woocommerce-product-attributes-item__value'),
      $dimensions = form.$product.find('.product_dimensions, .woocommerce-product-attributes-item--dimensions .woocommerce-product-attributes-item__value'),
      $qty = form.$singleVariationWrap.find('.quantity'), purchasable = !0, variation_id = '', template = !1,
      $template_html = '';
    if (variation.sku) {
      $sku.wc_set_content(variation.sku)
    } else {
      $sku.wc_reset_content()
    }
    if (variation.weight) {
      $weight.wc_set_content(variation.weight_html)
    } else {
      $weight.wc_reset_content()
    }
    if (variation.dimensions) {
      $dimensions.wc_set_content($.parseHTML(variation.dimensions_html)[0].data)
    } else {
      $dimensions.wc_reset_content()
    }
    form.$form.wc_variations_image_update(variation);
    if (!variation.variation_is_visible) {
      template = wp_template('unavailable-variation-template')
    } else {
      template = wp_template('variation-template');
      variation_id = variation.variation_id
    }
    $template_html = template({variation: variation});
    $template_html = $template_html.replace('/*<![CDATA[*/', '');
    $template_html = $template_html.replace('/*]]>*/', '');
    form.$singleVariation.html($template_html);
    form.$form.find('input[name="variation_id"], input.variation_id').val(variation.variation_id).change();
    if (variation.is_sold_individually === 'yes') {
      $qty.find('input.qty').val('1').attr('min', '1').attr('max', '');
      $qty.hide()
    } else {
      $qty.find('input.qty').attr('min', variation.min_qty).attr('max', variation.max_qty);
      $qty.show()
    }
    if (!variation.is_purchasable || !variation.is_in_stock || !variation.variation_is_visible) {
      purchasable = !1
    }
    if ($.trim(form.$singleVariation.text())) {
      form.$singleVariation.slideDown(200).trigger('show_variation', [variation, purchasable])
    } else {
      form.$singleVariation.show().trigger('show_variation', [variation, purchasable])
    }
  };
  VariationForm.prototype.onChange = function (event) {
    var form = event.data.variationForm;
    form.$form.find('input[name="variation_id"], input.variation_id').val('').change();
    form.$form.find('.wc-no-matching-variations').remove();
    if (form.useAjax) {
      form.$form.trigger('check_variations')
    } else {
      form.$form.trigger('woocommerce_variation_select_change');
      form.$form.trigger('check_variations');
      $(this).blur()
    }
    form.$form.trigger('woocommerce_variation_has_changed')
  };
  VariationForm.prototype.addSlashes = function (string) {
    string = string.replace(/'/g, '\\\'');
    string = string.replace(/"/g, '\\\"');
    return string
  };
  VariationForm.prototype.onUpdateAttributes = function (event) {
    var form = event.data.variationForm, attributes = form.getChosenAttributes(), currentAttributes = attributes.data;
    if (form.useAjax) {
      return
    }
    form.$attributeFields.each(function (index, el) {
      var current_attr_select = $(el),
        current_attr_name = current_attr_select.data('attribute_name') || current_attr_select.attr('name'),
        show_option_none = $(el).data('show_option_none'), option_gt_filter = ':gt(0)', attached_options_count = 0,
        new_attr_select = $('<select/>'), selected_attr_val = current_attr_select.val() || '',
        selected_attr_val_valid = !0;
      if (!current_attr_select.data('attribute_html')) {
        var refSelect = current_attr_select.clone();
        refSelect.find('option').removeAttr('disabled attached').removeAttr('selected');
        current_attr_select.data('attribute_options', refSelect.find('option' + option_gt_filter).get());
        current_attr_select.data('attribute_html', refSelect.html())
      }
      new_attr_select.html(current_attr_select.data('attribute_html'));
      var checkAttributes = $.extend(!0, {}, currentAttributes);
      checkAttributes[current_attr_name] = '';
      var variations = form.findMatchingVariations(form.variationData, checkAttributes);
      for (var num in variations) {
        if (typeof (variations[num]) !== 'undefined') {
          var variationAttributes = variations[num].attributes;
          for (var attr_name in variationAttributes) {
            if (variationAttributes.hasOwnProperty(attr_name)) {
              var attr_val = variationAttributes[attr_name], variation_active = '';
              if (attr_name === current_attr_name) {
                if (variations[num].variation_is_active) {
                  variation_active = 'enabled'
                }
                if (attr_val) {
                  attr_val = $('<div/>').html(attr_val).text();
                  var $option_elements = new_attr_select.find('option');
                  if ($option_elements.length) {
                    for (var i = 0, len = $option_elements.length; i < len; i++) {
                      var $option_element = $($option_elements[i]), option_value = $option_element.val();
                      if (attr_val === option_value) {
                        $option_element.addClass('attached ' + variation_active);
                        break
                      }
                    }
                  }
                } else {
                  new_attr_select.find('option:gt(0)').addClass('attached ' + variation_active)
                }
              }
            }
          }
        }
      }
      attached_options_count = new_attr_select.find('option.attached').length;
      if (selected_attr_val) {
        selected_attr_val_valid = !1;
        if (0 !== attached_options_count) {
          new_attr_select.find('option.attached.enabled').each(function () {
            var option_value = $(this).val();
            if (selected_attr_val === option_value) {
              selected_attr_val_valid = !0;
              return !1
            }
          })
        }
      }
      if (attached_options_count > 0 && selected_attr_val && selected_attr_val_valid && ('no' === show_option_none)) {
        new_attr_select.find('option:first').remove();
        option_gt_filter = ''
      }
      new_attr_select.find('option' + option_gt_filter + ':not(.attached)').remove();
      current_attr_select.html(new_attr_select.html());
      current_attr_select.find('option' + option_gt_filter + ':not(.enabled)').prop('disabled', !0);
      if (selected_attr_val) {
        if (selected_attr_val_valid) {
          current_attr_select.val(selected_attr_val)
        } else {
          current_attr_select.val('').change()
        }
      } else {
        current_attr_select.val('')
      }
    });
    form.$form.trigger('woocommerce_update_variation_values')
  };
  VariationForm.prototype.getChosenAttributes = function () {
    var data = {};
    var count = 0;
    var chosen = 0;
    this.$attributeFields.each(function () {
      var attribute_name = $(this).data('attribute_name') || $(this).attr('name');
      var value = $(this).val() || '';
      if (value.length > 0) {
        chosen++
      }
      count++;
      data[attribute_name] = value
    });
    return {'count': count, 'chosenCount': chosen, 'data': data}
  };
  VariationForm.prototype.findMatchingVariations = function (variations, attributes) {
    var matching = [];
    for (var i = 0; i < variations.length; i++) {
      var variation = variations[i];
      if (this.isMatch(variation.attributes, attributes)) {
        matching.push(variation)
      }
    }
    return matching
  };
  VariationForm.prototype.isMatch = function (variation_attributes, attributes) {
    var match = !0;
    for (var attr_name in variation_attributes) {
      if (variation_attributes.hasOwnProperty(attr_name)) {
        var val1 = variation_attributes[attr_name];
        var val2 = attributes[attr_name];
        if (val1 !== undefined && val2 !== undefined && val1.length !== 0 && val2.length !== 0 && val1 !== val2) {
          match = !1
        }
      }
    }
    return match
  };
  VariationForm.prototype.toggleResetLink = function (on) {
    if (on) {
      if (this.$resetVariations.css('visibility') === 'hidden') {
        this.$resetVariations.css('visibility', 'visible').hide().fadeIn()
      }
    } else {
      this.$resetVariations.css('visibility', 'hidden')
    }
  };
  $.fn.wc_variation_form = function () {
    new VariationForm(this);
    return this
  };
  $.fn.wc_set_content = function (content) {
    if (undefined === this.attr('data-o_content')) {
      this.attr('data-o_content', this.text())
    }
    this.text(content)
  };
  $.fn.wc_reset_content = function () {
    if (undefined !== this.attr('data-o_content')) {
      this.text(this.attr('data-o_content'))
    }
  };
  $.fn.wc_set_variation_attr = function (attr, value) {
    if (undefined === this.attr('data-o_' + attr)) {
      this.attr('data-o_' + attr, (!this.attr(attr)) ? '' : this.attr(attr))
    }
    if (!1 === value) {
      this.removeAttr(attr)
    } else {
      this.attr(attr, value)
    }
  };
  $.fn.wc_reset_variation_attr = function (attr) {
    if (undefined !== this.attr('data-o_' + attr)) {
      this.attr(attr, this.attr('data-o_' + attr))
    }
  };
  $.fn.wc_maybe_trigger_slide_position_reset = function (variation) {
    var $form = $(this), $product = $form.closest('.product'), $product_gallery = $product.find('.images'),
      reset_slide_position = !1, new_image_id = (variation && variation.image_id) ? variation.image_id : '';
    if ($form.attr('current-image') !== new_image_id) {
      reset_slide_position = !0
    }
    $form.attr('current-image', new_image_id);
    if (reset_slide_position) {
      $product_gallery.trigger('woocommerce_gallery_reset_slide_position')
    }
  };
  $.fn.wc_variations_image_update = function (variation) {
    var $form = this, $product = $form.closest('.product'), $product_gallery = $product.find('.images'),
      $gallery_nav = $product.find('.flex-control-nav'), $gallery_img = $gallery_nav.find('li:eq(0) img'),
      $product_img_wrap = $product_gallery.find('.woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder').eq(0),
      $product_img = $product_img_wrap.find('.wp-post-image'), $product_link = $product_img_wrap.find('a').eq(0);
    if (variation && variation.image && variation.image.src && variation.image.src.length > 1) {
      var galleryHasImage = $gallery_nav.find('li img[data-o_src="' + variation.image.gallery_thumbnail_src + '"]').length > 0;
      if (galleryHasImage) {
        $form.wc_variations_image_reset()
      }
      var slideToImage = $gallery_nav.find('li img[src="' + variation.image.gallery_thumbnail_src + '"]');
      if (slideToImage.length > 0) {
        slideToImage.trigger('click');
        $form.attr('current-image', variation.image_id);
        window.setTimeout(function () {
          $(window).trigger('resize');
          $product_gallery.trigger('woocommerce_gallery_init_zoom')
        }, 20);
        return
      }
      $product_img.wc_set_variation_attr('src', variation.image.src);
      $product_img.wc_set_variation_attr('height', variation.image.src_h);
      $product_img.wc_set_variation_attr('width', variation.image.src_w);
      $product_img.wc_set_variation_attr('srcset', variation.image.srcset);
      $product_img.wc_set_variation_attr('sizes', variation.image.sizes);
      $product_img.wc_set_variation_attr('title', variation.image.title);
      $product_img.wc_set_variation_attr('data-caption', variation.image.caption);
      $product_img.wc_set_variation_attr('alt', variation.image.alt);
      $product_img.wc_set_variation_attr('data-src', variation.image.full_src);
      $product_img.wc_set_variation_attr('data-large_image', variation.image.full_src);
      $product_img.wc_set_variation_attr('data-large_image_width', variation.image.full_src_w);
      $product_img.wc_set_variation_attr('data-large_image_height', variation.image.full_src_h);
      $product_img_wrap.wc_set_variation_attr('data-thumb', variation.image.src);
      $gallery_img.wc_set_variation_attr('src', variation.image.gallery_thumbnail_src);
      $product_link.wc_set_variation_attr('href', variation.image.full_src)
    } else {
      $form.wc_variations_image_reset()
    }
    window.setTimeout(function () {
      $(window).trigger('resize');
      $form.wc_maybe_trigger_slide_position_reset(variation);
      $product_gallery.trigger('woocommerce_gallery_init_zoom')
    }, 20)
  };
  $.fn.wc_variations_image_reset = function () {
    var $form = this, $product = $form.closest('.product'), $product_gallery = $product.find('.images'),
      $gallery_nav = $product.find('.flex-control-nav'), $gallery_img = $gallery_nav.find('li:eq(0) img'),
      $product_img_wrap = $product_gallery.find('.woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder').eq(0),
      $product_img = $product_img_wrap.find('.wp-post-image'), $product_link = $product_img_wrap.find('a').eq(0);
    $product_img.wc_reset_variation_attr('src');
    $product_img.wc_reset_variation_attr('width');
    $product_img.wc_reset_variation_attr('height');
    $product_img.wc_reset_variation_attr('srcset');
    $product_img.wc_reset_variation_attr('sizes');
    $product_img.wc_reset_variation_attr('title');
    $product_img.wc_reset_variation_attr('data-caption');
    $product_img.wc_reset_variation_attr('alt');
    $product_img.wc_reset_variation_attr('data-src');
    $product_img.wc_reset_variation_attr('data-large_image');
    $product_img.wc_reset_variation_attr('data-large_image_width');
    $product_img.wc_reset_variation_attr('data-large_image_height');
    $product_img_wrap.wc_reset_variation_attr('data-thumb');
    $gallery_img.wc_reset_variation_attr('src');
    $product_link.wc_reset_variation_attr('href')
  };
  $(function () {
    if (typeof wc_add_to_cart_variation_params !== 'undefined') {
      $('.variations_form').each(function () {
        $(this).wc_variation_form()
      })
    }
  });
  var wc_variation_form_matcher = {
    find_matching_variations: function (product_variations, settings) {
      var matching = [];
      for (var i = 0; i < product_variations.length; i++) {
        var variation = product_variations[i];
        if (wc_variation_form_matcher.variations_match(variation.attributes, settings)) {
          matching.push(variation)
        }
      }
      return matching
    }, variations_match: function (attrs1, attrs2) {
      var match = !0;
      for (var attr_name in attrs1) {
        if (attrs1.hasOwnProperty(attr_name)) {
          var val1 = attrs1[attr_name];
          var val2 = attrs2[attr_name];
          if (val1 !== undefined && val2 !== undefined && val1.length !== 0 && val2.length !== 0 && val1 !== val2) {
            match = !1
          }
        }
      }
      return match
    }
  };
  var wp_template = function (templateId) {
    var html = document.getElementById('tmpl-' + templateId).textContent;
    var hard = !1;
    hard = hard || /<#\s?data\./.test(html);
    hard = hard || /{{{?\s?data\.(?!variation\.).+}}}?/.test(html);
    hard = hard || /{{{?\s?data\.variation\.[\w-]*[^\s}]/.test(html);
    if (hard) {
      return wp.template(templateId)
    }
    return function template(data) {
      var variation = data.variation || {};
      return html.replace(/({{{?)\s?data\.variation\.([\w-]*)\s?(}}}?)/g, function (_, open, key, close) {
        if (open.length !== close.length) {
          return ''
        }
        var replacement = variation[key] || '';
        if (open.length === 2) {
          return window.escape(replacement)
        }
        return replacement
      })
    }
  }
})(jQuery, window, document);

(function (window, document) {
  'use strict';
  var supportedBrowser = !1, loaded = !1;
  if (document.querySelector) {
    if (window.addEventListener) {
      supportedBrowser = !0
    }
  }
  window.wp = window.wp || {};
  if (!!window.wp.receiveEmbedMessage) {
    return
  }
  window.wp.receiveEmbedMessage = function (e) {
    var data = e.data;
    if (!data) {
      return
    }
    if (!(data.secret || data.message || data.value)) {
      return
    }
    if (/[^a-zA-Z0-9]/.test(data.secret)) {
      return
    }
    var iframes = document.querySelectorAll('iframe[data-secret="' + data.secret + '"]'),
      blockquotes = document.querySelectorAll('blockquote[data-secret="' + data.secret + '"]'), i, source, height,
      sourceURL, targetURL;
    for (i = 0; i < blockquotes.length; i++) {
      blockquotes[i].style.display = 'none'
    }
    for (i = 0; i < iframes.length; i++) {
      source = iframes[i];
      if (e.source !== source.contentWindow) {
        continue
      }
      source.removeAttribute('style');
      if ('height' === data.message) {
        height = parseInt(data.value, 10);
        if (height > 1000) {
          height = 1000
        } else if (~~height < 200) {
          height = 200
        }
        source.height = height
      }
      if ('link' === data.message) {
        sourceURL = document.createElement('a');
        targetURL = document.createElement('a');
        sourceURL.href = source.getAttribute('src');
        targetURL.href = data.value;
        if (targetURL.host === sourceURL.host) {
          if (document.activeElement === source) {
            window.top.location.href = data.value
          }
        }
      }
    }
  };

  function onLoad() {
    if (loaded) {
      return
    }
    loaded = !0;
    var isIE10 = -1 !== navigator.appVersion.indexOf('MSIE 10'),
      isIE11 = !!navigator.userAgent.match(/Trident.*rv:11\./),
      iframes = document.querySelectorAll('iframe.wp-embedded-content'), iframeClone, i, source, secret;
    for (i = 0; i < iframes.length; i++) {
      source = iframes[i];
      if (!source.getAttribute('data-secret')) {
        secret = Math.random().toString(36).substr(2, 10);
        source.src += '#?secret=' + secret;
        source.setAttribute('data-secret', secret)
      }
      if ((isIE10 || isIE11)) {
        iframeClone = source.cloneNode(!0);
        iframeClone.removeAttribute('security');
        source.parentNode.replaceChild(iframeClone, source)
      }
    }
  }

  if (supportedBrowser) {
    window.addEventListener('message', window.wp.receiveEmbedMessage, !1);
    document.addEventListener('DOMContentLoaded', onLoad, !1);
    window.addEventListener('load', onLoad, !1)
  }
})(window, document);
