@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    @include('fragment.banner', [ 'f_image_code' => 'banner_contact_us', 'f_title'=>'Liên hệ', 'f_children_title'=>'Tư vấn' ])
    <div class="container" style="padding: 0 100px">
      <div class="text-center text-primary" style="font-size: 25px; font-weight: bold; margin-bottom: 30px">Vui lòng
        tích chọn những triệu chứng mà bạn gặp phải
      </div>
      <div class="card">
        <div class="card-body" style="background-color: white">
          <div class="row" id="list" style="padding-left: 250px">
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center row">
        <button class="btn btn-primary col-2 mt-4" id="btn-next">Tiếp tục</button>
      </div>
    </div>
    {{-- CONTENT END --}}
  </div>
@endsection
@section('js-import')
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let arr = [
        {
          value: 0,
          name: 'Sốt cao liên tục (38 - 40 độ)'
        },
        {
          value: 1,
          name: 'Sốt cao đột ngột'
        },
        {
          value: 2,
          name: 'Rét run'
        },
        {
          value: 3,
          name: 'Nhức đầu, buồn nôn'
        },
        {
          value: 4,
          name: 'Da xung huyết'
        },
        {
          value: 5,
          name: 'Ngứa ngáy trong cơ thể'
        },
        {
          value: 6,
          name: 'Chân tay mẩn đỏ'
        },
        {
          value: 7,
          name: 'Thấy bứt rứt'
        },
        {
          value: 8,
          name: 'Chán ăn'
        },
        {
          value: 9,
          name: 'Chảy máu chân răng'
        },
        {
          value: 10,
          name: 'Giảm sốt (ở ngày thứ 4 - 6 từ lúc bị bệnh)'
        },
        {
          value: 11,
          name: 'Thoát huyết tương'
        },
        {
          value: 12,
          name: 'Phù nề mi mắt'
        },
        {
          value: 13,
          name: 'Li bì, mệt lả'
        },
        {
          value: 14,
          name: 'Huyết áp kẹt'
        },
        {
          value: 15,
          name: 'Ổ bụng đau'
        }
      ]
      let content = ''
      for (const item of arr) {
        content += ` <div class="form-check col-6" style="margin-bottom: 10px">
              <input class="form-check-input" name="item" style="width: 25px; height: 25px" type="checkbox" value="${item.value}">
              <label class="form-check-label" style="margin-top: 9px; margin-left: 7px">
                ${item.name}
              </label>
            </div>`
      }
      $('#list').html(content)

      function contains(target, pattern) {
        let value = 0;
        pattern.forEach(function (word) {
          value = value + target.includes(word);
        });
        return (value === 1)
      }

      let rs = []
      $('#btn-next').click(function () {
        $('input[name="item"]:checked').each(function () {
          rs.push(parseInt(this.value))
        })
        let presents = _.intersectionWith(rs, [0, 2, 3, 4, 5, 6], _.isEqual);
        let dif = _.differenceWith(rs, [0, 2, 3, 4, 5, 6], _.isEqual);
        console.log(presents)
        console.log(dif)
      })
    })


  </script>
@endsection
