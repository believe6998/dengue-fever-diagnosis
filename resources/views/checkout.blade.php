@extends('layouts.app')
@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', ['f_image_code' => 'banner_checkout', 'f_title'=>'Thanh toán', 'f_children_title'=>'Thanh toán'])
    {{-- BANNER END --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <!-- Left Sidebar -->
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-605" class="post-605 page type-page status-publish hentry">
              <div class="woocommerce">
                <form
                  name="und_checkout"
                  action="{{url('/checkout')}}"
                  method="post"
                  class="checkout woocommerce-checkout"
                  enctype="multipart/form-data"
                >
                  @csrf
                  <div class="col2-set" id="customer_details">
                    <div class="col-1">
                      <div class="woocommerce-billing-fields">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="woocommerce-billing-fields__field-wrapper">
                          <p class="form-row form-row-wide validate-required" id="billing_full_name_field"
                             data-priority="10">
                            <label for="full_name" class="">Họ và tên<abbr
                                class="required" title="required">*</abbr></label>
                            <span
                              class="woocommerce-input-wrapper">
                              <input
                                type="text"
                                class="input-text"
                                name="full_name"
                                id="full_name"
                                placeholder=""
                                value="" autocomplete="given-name">
                              </input>
                            </span>
                          </p>
                          <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field"
                             data-priority="100">
                            <label for="phone" class="">Số điện thoại<abbr class="required" title="required">*</abbr>
                            </label>
                            <span
                              class="woocommerce-input-wrapper">
                              <input
                                type="tel"
                                class="input-text "
                                name="phone" id="phone"
                                placeholder="" value=""
                                autocomplete="tel">
                              </input>
                            </span>
                          </p>
                          <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field"
                             data-priority="110">
                            <label for="billing_email" class="">Email<abbr
                                class="required" title="required">*</abbr></label>
                            <span
                              class="woocommerce-input-wrapper">
                              <input
                                type="email"
                                class="input-text "
                                name="email"
                                id="email"
                                placeholder=""
                                value=""
                              >
                              </input>
                            </span>
                          </p>
                          <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                             id="billing_city_field"
                             data-priority="40"
                          >
                            <label for="billing_country" class="">
                              Tỉnh thành phố&nbsp;<abbr class="required" title="required">*</abbr>
                            </label>
                            <span
                              class="woocommerce-input-wrapper">
                              <select
                                name="city"
                                id="city"
                              >
                              </select>
                            </span>
                          </p>
                          <p
                            class="form-row form-row-wide address-field update_totals_on_change validate-required"
                            id="billing_city_field"
                            data-priority="40"
                          >
                            <label for="district" class="">Quận huyện<abbr class="required" title="required">*</abbr>
                            </label>
                            <span
                              class="woocommerce-input-wrapper">
                              <select
                                name="district"
                                id="district"
                                disabled
                                autocomplete="country"
                              >
                              </select>
                            </span>
                          </p>
                          <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                             id="billing_city_field"
                             data-priority="40"
                          >
                            <label for="ward" class="">Xã phường<abbr class="required" title="required">*</abbr></label>
                            <span
                              class="woocommerce-input-wrapper">
                              <select
                                name="ward"
                                id="ward"
                                disabled
                              >
                              </select>
                            </span>
                          </p>
                          <p class="form-row form-row-wide address-field validate-required"
                             id="billing_address_1_field" data-priority="50">
                            <label for="address" class="">Địa chỉ<abbr class="required" title="required">*</abbr>
                            </label>
                            <span
                              class="woocommerce-input-wrapper">
                              <input
                                type="text" class="input-text"
                                name="address"
                                id="address"
                                placeholder="Số nhà và tên đường"
                                value=""
                              >
                              </input>
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="woocommerce-shipping-fields">
                      </div>
                      <div class="woocommerce-additional-fields">
                        <h3>Thông tin thêm</h3>
                        <div class="woocommerce-additional-fields__field-wrapper">
                          <p class="form-row notes" id="order_comments_field" data-priority="">
                            <label
                              for="order_comments" class="">Ghi chú
                              <span
                                class="optional">(Tuỳ chọn)</span>
                            </label>
                            <span
                              class="woocommerce-input-wrapper">
                              <textarea
                                class="input-text"
                                name="note"
                                id="note"
                                placeholder="Notes about your order, e.g. special notes for delivery."
                                rows="2" cols="5">
                              </textarea>
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                  <div id="order_review" class="woocommerce-checkout-review-order">
                    <table id="und_checkout_info" class="shop_table woocommerce-checkout-review-order-table">
                      <thead>
                      <tr>
                        <th class="product-name">Sản phẩm</th>
                        <th class="product-total">Tổng</th>
                      </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                      <tr class="order-total">
                        <th>Tổng</th>
                        <td>
                          <strong>
                            <span class="woocommerce-Price-amount amount">
                              <span class="woocommerce-Price-currencySymbol">&#36;</span>
                              <span class="und_total_amount">0</span></span>
                          </strong>
                        </td>
                      </tr>
                      </tfoot>
                    </table>
                    <div id="payment" class="woocommerce-checkout-payment">
                      <div class="form-row place-order">
                        <div class="woocommerce-terms-and-conditions-wrapper">
                          <div class="woocommerce-privacy-policy-text"></div>
                        </div>
                        <button
                          type="submit"
                          class="button alt"
                          name="woocommerce_checkout_place_order"
                          value="Place order">
                          Đặt hàng
                        </button>
                        <input type="hidden" name="woocommerce-process-checkout-nonce"/>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </article>
          </main><!-- #main -->
        </div> <!-- .row -->
      </div><!-- #primary -->
    </div><!-- .container -->
  </div>
@endsection
@section('js-import')
  <script type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      validateForm();
      const city = document.getElementById('city');
      const district = document.getElementById('district');
      const ward = document.getElementById('ward');
      city.addEventListener('change', onCityChange);
      district.addEventListener('change', onDistrictChange);
      loadDataCity();
      const cart = JSON.parse(localStorage.getItem('cart') || '{}');
      if (isEmpty(cart)) {
        window.location.href = baseUrl;
      }

      function onCityChange() {
        loadDataDistrict(this.value);
        district.value = '';
        district.removeAttribute('disabled');
        ward.value = '';
        ward.setAttribute('disabled', "true");
      }

      function onDistrictChange() {
        loadDataWard(this.value);
        ward.value = '';
        ward.removeAttribute('disabled');
      }

      async function loadDataCity() {
        const res = await $.ajax({url: `${baseUrl}/api/administrative-units/tinh-tp`, method: 'GET'})
        if (!res || res.code !== 200 || !res.data || !Array.isArray(res.data)) {
          return;
        }
        city.innerHTML = res.data.map(e => `<option value="${e.code}">${e.name}</option>`).join('')
        city.value = '';
      }

      async function loadDataDistrict(parent_code = '') {
        const res = await $.ajax({url: `${baseUrl}/api/administrative-units/quan-huyen/${parent_code}`, method: 'GET'})
        if (!res || res.code !== 200 || !res.data || !Array.isArray(res.data)) {
          return;
        }
        district.innerHTML = res.data.map(e => `<option value="${e.code}">${e.name}</option>`).join('')
        district.value = '';
      }

      async function loadDataWard(parent_code = '') {
        const res = await $.ajax({url: `${baseUrl}/api/administrative-units/xa-phuong/${parent_code}`, method: 'GET'})
        if (!res || res.code !== 200 || !res.data || !Array.isArray(res.data)) {
          return;
        }
        ward.innerHTML = res.data.map(e => `<option value="${e.code}">${e.name}</option>`).join('')
        ward.value = '';
      }

      function validateForm() {
        $("form[name='und_checkout']").validate({
          rules: {
            full_name: "required",
            phone: "required",
            city: "required",
            district: "required",
            ward: {
              required: true
            },
            address: {
              required: true
            },
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            full_name: "Vui lòng thêm vào tên",
            phone: "Vui lòng thêm vào số điện thoại",
            city: "Vui lòng thêm vào tỉnh thành phố",
            district: "Vui lòng thêm vào quận huyện",
            ward: "Vui lòng thêm vào xã phường",
            address: "Vui lòng thêm vào xã phường",
            password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
            },
            email: "Thêm đúng địa chỉ email"
          },
          submitHandler: handleSubmit
        });
      }

      function handleSubmit(form, e) {
        e.preventDefault();
        const data = $(form).serializeArray();
        const cart = JSON.parse(localStorage.getItem('cart') || '')

        const products = Object.values(cart).reduce((a, c) => Object.assign(a, {[c.id]: c.count}), {})
        data.push({name: 'products', value: JSON.stringify(products)})
        $.ajax({
          type: 'POST',
          url: '/checkout',
          data,
          dataType: 'json'
        }).done(function (data) {
          if (data.code !== 200) {
            return;
          }
          form.reset();
          localStorage.removeItem('cart');
          document.dispatchEvent(eventCartChange);
          window.location.href = '/order-success';
          city.value = '';
          district.value = '';
          ward.value = '';
          district.setAttribute('disabled', "true")
          ward.setAttribute('disabled', "true")
        });
      }

      function isEmpty(obj) {
        for (var prop in obj) {
          if (obj.hasOwnProperty(prop)) {
            return false;
          }
        }
        return JSON.stringify(obj) === JSON.stringify({});
      }
    })


  </script>
@endsection
