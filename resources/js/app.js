document.addEventListener('DOMContentLoaded', function () {
  const buttonAddToCarts = document.querySelectorAll("button[name='add-to-cart'],.add-to-cart");
  buttonAddToCarts.forEach(function (btn) {
    btn.addEventListener('click', handleAddToCart)
  })
  const buttonCloseCart = document.querySelector('.und_close-cart');
  if (buttonCloseCart) {
    buttonCloseCart.addEventListener('click', hideCart)
  }
  const buttonShowCarts = document.querySelectorAll('.und-cart-tini')
  buttonShowCarts.forEach(btn => {
    btn.addEventListener('click', showCart)
  })
  document.addEventListener('cart_change', handleCartUpdated)
  document.querySelector('.und_popup_shadow').addEventListener('click', hideCart);
  handleCartUpdated();
  formatCurrency();

  function handleCartUpdated() {
    const cartData = Object.values(cart.getCart());
    renderCartDrawer(cartData)
    renderShoppingCart(cartData)
    renderCheckOutInfo(cartData)
  }

  function formatCurrency() {
    document.querySelectorAll('.currency').forEach(function (el) {
      el.innerHTML = parseInt(el.innerHTML).toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
    })
  }


  function renderCheckOutInfo(products = []) {
    const table = document.getElementById('und_checkout_info');
    if (!table) {
      return;
    }

    const tbody = table.querySelector('tbody');
    tbody.innerHTML = products.map(p => {
      return `
    <tr class="cart_item">
      <td class="product-name">
        ${p.name}<strong class="product-quantity">${p.count}</strong>
      </td>
      <td class="product-total">
          <span class="woocommerce-Price-amount amount">${p.priceStr}</span>
      </td>
    </tr>`
    })

  }

  function renderShoppingCart(products = []) {
    const tableCart = document.querySelector('#und_table_cart');
    if (!tableCart) {
      return;
    }
    const tbody = tableCart.querySelector('tbody');
    tbody.innerHTML = '';
    products.forEach(p => {
      const tr = document.createElement('tr');
      tr.classList = ['woocommerce-cart-form__cart-item', 'cart_item'];
      tr.innerHTML = `
    <td class="product-thumbnail">
      <a href="/products/${p.slug}">
        <img
            loading="lazy"
            width="270"
            height="270"
            src="${baseUrl}/images/medium/${p.thumbnail}"
            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
            alt="${p.name}"
      </a>
    </td>
    <td class="product-name" data-title="Product">
      <a href="/products/${p.slug}">${p.name}</a>
    </td>
    <td class="product-price" data-title="Price">
        <span class="woocommerce-Price-amount amount">${p.priceStr}</span>
    </td>
    <td class="product-quantity" data-title="Quantity">
      <div class="quantity">
        <div class="quantity-title">Quantity:</div>
        <input name="decrement" data-product_id="${p.id}" type="button" value="-" />
        <input name="quantity" type="number" step="1" min="0" max=""
               value="${p.count}" title="Qt"
               class="input-text qty text" size="4" pattern="[0-9]*"
               inputmode="numeric"/>
        <input name="increment" data-product_id="${p.id}" type="button" value="+" />
      </div>
    </td>
    <td class="product-subtotal" data-title="Total">
        <span class="woocommerce-Price-amount amount">${(p.price * p.count).toLocaleString('vi-VN', {
        style: 'currency',
        currency: 'VND'
      })}</span>
    </td>
    <td class="product-remove">
      <a
        data-product_id="${p.id}"
        class="remove" aria-label="Remove this item"
        data-product_sku="000728635">&times;
      </a>
    </td>`
      const btnIncrement = tr.querySelector("input[name='increment']")
      const btnDecrement = tr.querySelector("input[name='decrement']")
      const btnRemove = tr.querySelector(".remove")

      btnIncrement.addEventListener('click', increment)
      btnDecrement.addEventListener('click', decrement)
      btnRemove.addEventListener('click', remove)
      tbody.append(tr);
    })
    const contentLi = document.querySelector('#und_button_coupon');
    tbody.appendChild(contentLi.content.cloneNode(true));
  }

  function renderCartDrawer(products = []) {
    const total = products.reduce((c, p) => c + p.price * p.count, 0);
    const quantity = products.reduce((c, p) => c + p.count, 0);
    $('.und_total_amount').html(total.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'}));
    const cartTinis = document.querySelectorAll('.und-cart-tini');
    cartTinis.forEach(btn => {
      btn.querySelector('.cart-number').innerHTML = quantity;
      btn.querySelector('.cart-total').innerHTML = quantity > 0 ? `${quantity}` : 'Giỏ hàng';
    })
    const cartList = document.getElementById('und_cart_list');
    cartList.innerHTML = '';
    products.forEach(p => {
      const li = document.createElement('li');
      li.classList = ['woocommerce-mini-cart-item', 'mini_cart_item'];
      li.innerHTML = `
            <a
              class="remove remove_from_cart_button"
              aria-label="Remove this item"
              data-product_id="${p.id}"
              >×</a>
            <a href="/products/${p.slug}">
              <img
                   width="270"
                   height="270"
                   src="${baseUrl}/images/medium/${p.thumbnail}"
                   class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded" alt=""
                   data-was-processed="true"
                   >
              ${p.name}
            </a>
            <span class="quantity">${p.count} × <span class="woocommerce-Price-amount amount">
            ${p.priceStr}</span>
            </span>
      `
      li.querySelector('.remove_from_cart_button').addEventListener('click', remove)
      cartList.append(li)
    })
  }

  function showCart() {
    const cartContainer = document.querySelector('.und_cart');
    cartContainer.classList.add("show_cart");
    document.querySelector('.und_popup_shadow').style.display = 'block';
  }

  function hideCart() {
    const cartContainer = document.querySelector('.und_cart');
    cartContainer.classList.remove("show_cart");
    document.querySelector('.und_popup_shadow').style.display = 'none';
  }

  async function handleAddToCart() {
    const productId = this.dataset.product_id;
    const quantityEl = this.parentNode.querySelector("input[name='quantity']");
    let quantity = quantityEl ? parseInt(quantityEl.value, 10) : 1;
    if (cart.hasProduct(productId)) {
      cart.increment(productId, quantity);
    } else {
      cart.add(await getProduct(productId, quantity));
    }
    showCart();
  }

  function increment() {
    const productId = this.dataset.product_id;
    if (cart.hasProduct(productId)) {
      cart.increment(productId);
    }
  }

  function decrement() {
    const productId = this.dataset.product_id;
    if (cart.hasProduct(productId)) {
      cart.decrement(productId);
    }
  }

  function remove() {
    const productId = this.dataset.product_id;
    cart.remove(productId)
  }

  async function getProduct(id, count = 1) {
    const res = await $.ajax({url: `${baseUrl}/api/product/${id}`, method: 'GET'})
    if (!res || res.code !== 200 || !res.data) {
      return;
    }

    const priceStr = res.data.price.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});

    return {
      id: res.data.id,
      name: res.data.name,
      slug: res.data.slug,
      thumbnail: res.data.images.split(',').pop(),
      quantity: res.data.quantity,
      price: res.data.price,
      priceStr,
      discount: 0,
      count
    }
  }
})

const cart = initCart();

function initCart() {
  return {
    cart: JSON.parse(localStorage.getItem('cart') || '{}'),
    getCart() {
      const cart = JSON.parse(localStorage.getItem('cart') || '{}');
      this.cart = cart;
      return cart;
    },
    hasProduct(productId) {
      return this.cart.hasOwnProperty(productId);
    },
    updateCart(data) {
      localStorage.setItem('cart', JSON.stringify(data))
      document.dispatchEvent(eventCartChange);
    },
    add(product) {
      const newCart = Object.assign(this.cart, {
        [product.id]: product
      })
      this.updateCart(newCart);
    },
    increment(productId, quantity = 1) {
      if (!this.cart[productId]) {
        return;
      } else if (this.cart[productId].count + 1 > this.cart[productId].quantity) {
        return;
      }
      const newCart = this.cart;
      newCart[productId] = Object.assign(newCart[productId], {
        count: this.cart[productId].count + quantity
      })
      this.updateCart(newCart);
    },
    decrement(productId) {
      let newCart = this.cart
      if (newCart[productId].count <= 1) {
        return;
      } else {
        newCart[productId] = Object.assign(newCart[productId], {
          count: newCart[productId].count - 1
        })
        this.updateCart(newCart);
      }
    },
    remove(productId) {
      let newCart = this.cart
      delete newCart[productId];
      this.updateCart(newCart);
    }
  }
}
