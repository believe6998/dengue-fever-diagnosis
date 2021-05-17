@extends('layouts.app')
@section('content')
  <div id="content" class="site-content woocommerce-cart woocommerce-page">
    {{-- BANNER --}}
    @include('fragment.banner', [
    'f_image_code' => 'banner_shopping_cart',
    'f_title'=>'Giỏ hàng',
    'f_children_title'=>'Giỏ hàng'
    ])
    {{-- BANNER END --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <!-- Left Sidebar -->
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-609" class="post-609 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid vc_custom_1513138505605 ftc-row-wide">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div class="woocommerce">
                      <div class="woocommerce-notices-wrapper"></div>
                      <form
                        class="woocommerce-cart-form"
                      >
                        <table
                          id="und_table_cart"
                          class="shop_table cart woocommerce-cart-form__contents"
                          cellspacing="0">
                          <thead>
                          <tr>
                            <th colspan="2" class="product-name">Sản</th>
                            <th class="product-price">Giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="product-subtotal">Tổng</th>
                            <th class="product-remove">&nbsp;</th>
                          </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </form>
                      <div class="cart-collaterals">
                        <div class="cart_totals ">
                          <h2>Cart totals</h2>
                          <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tr class="cart-subtotal">
                              <th>Tổng</th>
                              <td data-title="Subtotal">
                                <span class="woocommerce-Price-amount amount">
                                  <span class="und_total_amount">0</span>
                                </span>
                              </td>
                            </tr>
                            {{--                            <tr class="order-total">--}}
                            {{--                              <th>Total</th>--}}
                            {{--                              <td data-title="Total"><strong>--}}
                            {{--                                  <span class="woocommerce-Price-amount amount">27,390.00</span>--}}
                            {{--                                </strong>--}}
                            {{--                              </td>--}}
                            {{--                            </tr>--}}
                          </table>
                          <div class="wc-proceed-to-checkout">
                            <a href="{{url('/checkout')}}" class="checkout-button button alt wc-forward">
                              Tiến đến đặt hàng
                            </a>
                            <a href="{{url('/products/')}}" class="button button-secondary">Tiếp tục mua sắm</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main><!-- #main -->
          <!-- Right Sidebar -->
        </div> <!-- .row -->
      </div><!-- #primary -->
    </div><!-- .container -->
  </div>


@endsection
