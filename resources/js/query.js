const queryString = require('query-string');

document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.und_filter_product').forEach(function (el) {
    el.addEventListener('click', function () {
      let query = queryString.parse(window.location.search, {arrayFormat: 'bracket'});
      const type = this.dataset.type;
      let value = this.dataset.value;
      if (type === 'brands') {
        value = [value].concat(query[type] || [])
      }
      query = Object.assign(query, {[type]: value});
      window.location.search = queryString.stringify(query, {arrayFormat: 'bracket'});
    })
  })
  document.querySelector('.und_button_filter')
    .addEventListener('click', function () {
      let query = queryString.parse(window.location.search, {arrayFormat: 'bracket'});
      const min_price = this.dataset.min_price;
      const max_price = this.dataset.max_price;
      Object.assign(query, {min_price, max_price});
      window.location.search = queryString.stringify(query, {arrayFormat: 'bracket'});
    })
})
