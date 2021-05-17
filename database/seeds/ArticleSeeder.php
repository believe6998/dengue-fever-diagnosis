<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $table_name = 'articles';
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table($table_name)->truncate();
    DB::table($table_name)->insert([
      [
        'id' => 1,
        'slug' => '6-nguyen-tac-co-ban-trong-viec-xay-dung-lich-tap-gym-cho-nam-1',
        'title' => '6 nguyên tắc cơ bản trong việc xây dựng lịch tập gym cho nam',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Để anh em có thể áp dụng lịch tập gym cho nam một cách chính xác nhất, chuyên gia thể tại UNDEFINED TEAM...',
        'content' => '<div>Để anh em có thể áp dụng lịch tập gym cho nam một cách chính xác nhất, chuyên gia thể tại UNDEFINED TEAM đã xây dựng 6 nguyên tắc cơ bản khi thực hiện lịch tập gym cho nam như sau:</div><div>Thứ 1: Không sắp xếp lịch tập 2 nhóm cơ lớn trong một buổi tập. Nhóm cơ lớn gồm: Mông – đùi, xô – lưng. Nhóm cơ nhỏ gồm: vai, tay, cẳng tay, cẳng chân.</div><div>Thứ 2: Chỉ được tập tối đa 3 nhóm cơ cùng một buổi.</div><div>Thứ 3: Nên sắp xếp lịch tập chung các nhóm cơ có tác dụng bổ trợ cho nhau.</div><div>Thứ 4: Nếu anh em muốn tập để kích thích tăng cân, tăng cơ bắp thì nên tập 2 nhóm cơ và tăng khối lượng tạ khi tập.</div><div>Thứ 5: Và ngược lại, đối với người tập fitness để giảm mỡ thì phải tập 3 – 4 nhóm cơ, tăng bài tập cho mỗi nhóm cơ bên cạnh đó giảm khối lượng tạ để tăng lượng Reps lên.</div><div>Thứ 6: Trong thời gian tập nên nghỉ ngơi từ 1 – 2 ngày/tuần để cơ bắp có thời gian phục hồi.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 2,
        'slug' => 'lich-tap-gym-cho-nam-gioi-da-tap-trong-thoi-gian-dai-2',
        'title' => 'Lịch tập gym cho nam giới đã tập trong thời gian dài',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 3,
        'slug' => 'duis-eget-lorem-ac-odio-3',
        'title' => 'DUIS EGET LOREM AC ODIO',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim massa...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 4,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-4',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 5,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-5',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 6,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-6',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 7,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-7',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 8,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-8',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 9,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-9',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 10,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-10',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 11,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-11',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 12,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-12',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 13,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-13',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 14,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-14',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 15,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-15',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 16,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-16',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 17,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-17',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 18,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-18',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 19,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-19',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 20,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-20',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 21,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-21',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 22,
        'slug' => 'ut-wisi-enim-ad-minim-quisquam-22',
        'title' => 'UT WISI ENIM AD MINIM QUISQUAM',
        'avatar' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'content_review' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...',
        'content' => '<div>Với những người đã tập trong một thời gian dài, chuyên gia tại UNDEFINED TEAM đã xây dựng lịch tập với cường độ mạnh hơn, bạn có thể tham khảo và chuyển qua lịch tập dưới đây:</div><div>Lịch tập gym cho nam giới chuẩn nhất</div><ul><li>Thứ hai và thứ năm: Bụng, vai, ngực, tay sau</li><li>Thứ ba và thứ sau: Tay trước, lưng xô, cẳng tay</li><li>Thứ tư và thứ bảy: Bụng, chân mông đùi</li><li>Chủ nhật: Nghỉ</li></ul><div>Lưu ý: Với lịch tập gym cho nam giới này, thời gian tập là từ 60 tới 90 phút, do vậy bạn hãy chọn 4 – 5 bài tập cho một nhóm cơ, bài superset tăng tạ từ 4 tới 5 hiệp, mỗi hiệp lặp lại khoảng 10 lần.</div>',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
