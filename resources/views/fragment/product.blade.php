<div class="ftc-product product">
  <div class="images lazy-loading">
    <a href="{{url('/products', $f_product->slug)}}">
      <span class="cover_image">
        <img
          loading="lazy" width="270" height="270"
          src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20270'%3E%3C/svg%3E"
          class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
          data-lazy-srcset="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
          {{--data-lazy-srcset="https://gosport.vn/wp-content/uploads/2016/01/109-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2016/01/109-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2016/01/109-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2016/01/109-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2016/01/109-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2016/01/109-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2016/01/109-548x548.jpg 548w, https://gosport.vn/wp-content/uploads/2016/01/109-60x60.jpg 60w, https://gosport.vn/wp-content/uploads/2016/01/109.jpg 800w"--}}
          data-lazy-sizes="(max-width: 270px) 100vw, 270px"
          data-lazy-src="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
          {{--data-lazy-src="https://gosport.vn/wp-content/uploads/2016/01/109-270x270.jpg"--}}
        />
        <noscript>
          <img
            width="270" height="270"
            src="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
            class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
            srcset="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
            sizes="(max-width: 270px) 100vw, 270px"
          />
        </noscript>
      </span>
      <span class="hover_image">
        <img
          loading="lazy" width="270" height="270"
          src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20270%20270'%3E%3C/svg%3E"
          class="product-hover-image wp-post-image" alt=""
          data-lazy-srcset="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
          {{--data-lazy-srcset="https://gosport.vn/wp-content/uploads/2016/01/107-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2016/01/107-548x548.jpg 548w, https://gosport.vn/wp-content/uploads/2016/01/107-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2016/01/107-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2016/01/107-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2016/01/107-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2016/01/107-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2016/01/107-60x60.jpg 60w, https://gosport.vn/wp-content/uploads/2016/01/107.jpg 800w"--}}
          data-lazy-sizes="(max-width: 270px) 100vw, 270px"
          data-lazy-src="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
          {{--data-lazy-src="https://gosport.vn/wp-content/uploads/2016/01/107-270x270.jpg"--}}
        />
        <noscript>
          <img
            width="270" height="270"
            {{--src="https://gosport.vn/wp-content/uploads/2016/01/107-270x270.jpg"--}}
            src="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
            class="product-hover-image wp-post-image" alt=""
            srcset="{{URL::asset('/images/medium/'.$f_product->images[0])}}"
            {{--srcset="https://gosport.vn/wp-content/uploads/2016/01/107-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2016/01/107-548x548.jpg 548w, https://gosport.vn/wp-content/uploads/2016/01/107-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2016/01/107-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2016/01/107-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2016/01/107-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2016/01/107-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2016/01/107-60x60.jpg 60w, https://gosport.vn/wp-content/uploads/2016/01/107.jpg 800w"--}}
            sizes="(max-width: 270px) 100vw, 270px"
          />
        </noscript>
      </span>
    </a>
    <div class="conditions-box">
      @if($f_product->discount != 0)
        <span class="onsale">Sale</span>
      @endif
    </div>
    <div class="group-button-product">
      <a class="quickview" href="{{url('/products', $f_product->slug)}}">
        <i class="fa fa-eye"></i>
        <span class="ftc-tooltip button-tooltip">Quick view</span>
      </a>
    </div>
  </div>
  <div class="item-description">
    <h3 class="product_title product-name">
      <a href="{{url('/products', $f_product->slug)}}" title="{{$f_product->name}}">
        <p class="product-name-inner">{{$f_product->name}}</p>
      </a>
    </h3>
    <span class="price">
      @if($f_product->discount != 0)
        <del>
          <span class="woocommerce-Price-amount amount">
            {{number_format($f_product->compare_price)}}&emsp14;<u>đ</u>
          </span>
        </del>
      @endif
      <ins>
        <span class="woocommerce-Price-amount amount">
          {{number_format($f_product->price)}}&emsp14;<u>đ</u>
        </span>
      </ins>
    </span>
    <div class="meta_info">
      <div class="add-to-cart add_to_cart_button" data-product_id="{{$f_product->id}}">
        <a
          rel="nofollow"
          class="button product_type_grouped add_to_cart_button ajax_add_to_cart"
        >
          <span class="ftc-tooltip button-tooltip">Thêm vào giỏ</span>
        </a>
      </div>
    </div>
  </div>
</div>
