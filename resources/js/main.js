// const axios = require('axios');
//
// document.addEventListener('readystatechange', function () {
//   console.log('check')
// })
//
// async function add() {
//   const productId = parseInt(this.getAttribute('product_id'));
//   if (cart.hasProduct(productId)) {
//     cart.increment(productId);
//   } else {
//     cart.add(await getProduct(productId));
//   }
// }
//
// function increment() {
//   const productId = parseInt(this.getAttribute('product_id'));
//   if (cart.hasProduct(productId)) {
//     cart.increment(productId);
//   }
// }
//
// function decrement() {
//   const productId = parseInt(this.getAttribute('product_id'));
//   if (cart.hasProduct(productId)) {
//     cart.decrement(productId);
//   }
// }
//
// function remove() {
//   const productId = parseInt(this.getAttribute('product_id'));
//   cart.remove(productId)
// }
//
// function getProduct(id) {
//   return axios.get(`${baseUrl}api/product/${id}`).then(({data: res}) => {
//     if (res.code !== 200 || !res.data) {
//       return;
//     }
//     return {
//       id: res.data.id,
//       name: res.data.name,
//       thumbnail: res.data.images.split(',').pop(),
//       price: res.data.price,
//       discount: 0,
//       count: 1
//     }
//   })
// }
//
// const cart = {
//   cart: JSON.parse(localStorage.getItem('cart') || '{}'),
//   getCart() {
//     const cart = JSON.parse(localStorage.getItem('cart') || '{}');
//     this.cart = cart;
//     return cart;
//   },
//   hasProduct(productId) {
//     return this.cart.hasOwnProperty(productId);
//   },
//   updateCart(data) {
//     localStorage.setItem('cart', JSON.stringify(data))
//   },
//   add(product) {
//     const newCart = Object.assign(this.cart, {
//       [product.id]: product
//     })
//     this.updateCart(newCart);
//   },
//   increment(productId) {
//     const currentCartProduct = this.cart[productId];
//     if (!currentCartProduct) {
//       return;
//     }
//     const newCart = this.cart;
//     newCart[productId] = Object.assign(newCart[productId], {
//       count: currentCartProduct.count + 1
//     })
//     this.updateCart(newCart);
//   },
//   decrement(productId) {
//     let newCart = this.cart
//     if (newCart[productId].count <= 1) {
//       this.remove(productId);
//       this.updateCart(newCart);
//     } else {
//       newCart[productId] = Object.assign(newCart[productId], {
//         count: newCart[productId].count - 1
//       })
//       this.updateCart(newCart);
//     }
//   },
//   remove(productId) {
//     let newCart = this.cart
//     delete newCart[productId];
//     this.updateCart(newCart);
//   }
// }
