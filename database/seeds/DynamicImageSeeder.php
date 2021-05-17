<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicImageSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $table_name = 'dynamic_images';
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table($table_name)->truncate();
    DB::table($table_name)->insert([
      [
        'id' => 1,
        'code' => 'banner_about_us',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner about us',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 2,
        'code' => 'banner_blog_detail',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner blog detail',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 3,
        'code' => 'banner_blogs',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner blogs',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 4,
        'code' => 'banner_checkout',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner checkout',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 5,
        'code' => 'banner_contact_us',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner contact us',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 6,
        'code' => 'banner_product_detail',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner product detail',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 7,
        'code' => 'banner_products',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner products',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 8,
        'code' => 'banner_shopping_cart',
        'image' => '/images/default_banner.png',
        'url_go_to' => null,
        'url_title' => null,
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Banner shopping cart',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 9,
        'code' => 'slider_image_1',
        'image' => '/images/slider_1.png',
        'url_go_to' => '/products',
        'url_title' => 'Shop now',
        'text1' => 'Have a nice sale',
        'text2' => 'Online Exclusive',
        'text3' => 'Up to 70% off! Four days left !',
        'title' => 'Slider image 1',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 10,
        'code' => 'slider_image_2',
        'image' => '/images/slider_2.png',
        'url_go_to' => '/products',
        'url_title' => 'Shop now',
        'text1' => 'A BRAND ARRIVALS',
        'text2' => 'MINIMAL & MODERN LOOK',
        'text3' => '',
        'title' => 'Slider image 2',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 11,
        'code' => 'slider_image_3',
        'image' => '/images/slider_3.png',
        'url_go_to' => '/products',
        'url_title' => 'Shop now',
        'text1' => 'Shop New arrivals',
        'text2' => 'From $10',
        'text3' => 'Mini Store Design',
        'title' => 'Slider image 3',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 12,
        'code' => 'home_image_1',
        'image' => '/images/home_image_1.png',
        'url_go_to' => '/products?category=7',
        'url_title' => 'Buồng xông hơi',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Home image 1',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 13,
        'code' => 'home_image_2',
        'image' => '/images/home_image_2.png',
        'url_go_to' => '/products?category=2',
        'url_title' => 'Máy chạy bộ',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Home image 2',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 14,
        'code' => 'home_image_3',
        'image' => '/images/home_image_3.png',
        'url_go_to' => '/products?category=4',
        'url_title' => 'Xe đạp tập leo núi',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Home image 3',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 15,
        'code' => 'home_image_4',
        'image' => '/images/home_image_4.png',
        'url_go_to' => '/products?category=3',
        'url_title' => 'Xe đạp tập địa hình',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Home image 4',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 16,
        'code' => 'home_image_5',
        'image' => '/images/home_image_5.png',
        'url_go_to' => '/products?category=5',
        'url_title' => 'Dụng cụ bóng bàn',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'title' => 'Home image 5',
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
