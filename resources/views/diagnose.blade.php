@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    @include('fragment.banner', [ 'f_image_code' => 'banner_contact_us', 'f_title'=>'Liên hệ', 'f_children_title'=>'Tư vấn' ])
    <div class="container" style="padding: 0 100px">
      <div class="text-center text-primary" style="font-size: 25px; font-weight: bold; margin-bottom: 30px">Vui lòng
        tích chọn những triệu chứng mà bạn gặp phải
      </div>
      <div class="card">
        <div class="card-body" style="background-color: white; border-radius: 15px">
          <div id="start">
            <div class="row" id="list" style="padding-left: 250px">
            </div>
            <div class="d-flex justify-content-center row">
              <button class="btn btn-primary col-2 mt-4" id="btn-next">Hoàn thành</button>
            </div>
          </div>
          <div class="d-none" id="nothing">
            <div class="text-primary text-center mb-3" style="font-weight: bold; font-size: 18px">
              Không đủ dữ liệu để chuẩn đoán
            </div>
          </div>
          <div class="d-none" id="good">
            <div class="text-success text-center mb-3" style="font-weight: bold; font-size: 18px">
              Bạn không bị sốt xuất huyết
            </div>
          </div>
          <div class="d-none" id="medium">
            <div class="text-warning text-center mb-3" style="font-weight: bold; font-size: 18px">
              Rất có thể bạn đang bị sốt xuất huyết giai đoạn đầu
            </div>
            <div style="font-weight: bold;padding-bottom: 10px">Bạn nên đến bệnh viện khám nếu có thể.</div>
            <div style="font-weight: bold">Gợi ý điều trị:</div>
            <div style="padding: 10px">
              <div>- Nếu sốt cao ≥ 39 độ, cho thuốc hạ nhiệt, nới lỏng quần áo và lau mát bằng nước ấm.</div>
              <div>- Thuốc hạ nhiệt chỉ được dùng là Paracetamol đơn chất, liều dùng từ 10 - 15 mg/kg cân nặng/lần, cách
                nhau mỗi 4-6 giờ.
              </div>
            </div>
            <div style="font-weight: bold">Chú ý:</div>
            <div style="padding: 10px">
              <div>- Tổng liều Paracetamol không quá 60mg/kg cân nặng/24h.</div>
              <div>- Không dùng aspirin (acetyl salicylic acid), analgin, để điều trị vì có thể gây xuất huyết, toan
                máu.
              </div>
              <div>- Bù dịch sớm bằng đường uống: Khuyến khích người bệnh uống nhiều nước Oresol hoặc nước sôi để nguội,
                nước trái cây (nước dừa, cam, chanh, …) hoặc nước cháo loãng với muối.
              </div>
            </div>
          </div>
          <div class="d-none" id="bad">
            <div class="text-danger text-center mb-3" style="font-weight: bold; font-size: 18px">
              Rất có thể bạn đang bị sốc sốt xuất huyết và ở giai đoạn nguy hiểm của bệnh. Hay đến ngay cơ ở y tế gần
              nhất để xét nghiệm và chữa trị kịp thời !!!!!
            </div>
          </div>
        </div>
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

      let compare = async (a1, a2) => a1.reduce((a, c) => a + a2.includes(c), 0);

      function inArray(needle, haystack, matchAll = false) {
        if (matchAll) {
          return needle.every(i => haystack.includes(i));
        } else {
          return needle.some(i => haystack.includes(i));
        }
      }

      let status = 0
      let rs = []
      $('#btn-next').click(async function () {
        $('input[name="item"]:checked').each(function () {
          rs.push(parseInt(this.value))
        })
        let type1 = await compare(rs, [0, 2, 3, 4, 5, 6, 7, 8, 9])
        if (type1 > 7) {
          status = 1
        } else if (type1 >= 3 && type1 <= 7 && await inArray([0, 4, 6], rs, true)) {
          status = 1
        }


        let type2 = await compare(rs, [10, 11, 12, 13, 14, 15])

        if (type2 >= 4) {
          status = 2
        }
        $('#start').addClass('d-none')
        if (rs.length <= 2) {
          $('#nothing').removeClass('d-none')
        } else {
          if (status === 0) {
            $('#good').removeClass('d-none')
          } else if (status === 1) {
            $('#medium').removeClass('d-none')
          } else {
            $('#bad').removeClass('d-none')
          }
        }
      })
    })


  </script>
@endsection
