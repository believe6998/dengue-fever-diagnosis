<?php

use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $table_name = 'products';
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table($table_name)->truncate();
    DB::table($table_name)->insert([
      [
        'id' => 101,
        'slug' => 'bong-tap-yoga-kingsport-1',
        'name' => 'Bóng tập yoga Kingsport',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: đường kính 65cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '200000',
        'discount' => '0',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 102,
        'slug' => 'tham-tap-yoga-kingsport-2',
        'name' => 'THẢM TẬP YOGA KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '0',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 103,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-3',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '10',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 104,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-4',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '20',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 105,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-5',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '20',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 106,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-6',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '20',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 107,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-7',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '20',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 108,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-8',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '30',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 109,
        'slug' => 'bong-tap-yoga-co-gai-kingsport-9',
        'name' => 'BÓNG TẬP YOGA CÓ GAI KINGSPORT',
        'description' => '<div><div>Hãng sản xuất: KINGSPORT</div><div>Mã sản phẩm: yoga ball kingsport</div><div>Kích Thước Sử Dụng: 180x66x1cm</div></div>',
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => '150000',
        'discount' => '31',
        'quantity' => '100',
        'brand' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
    $json_products = File::get("database/json_data/products.json");
    $products = json_decode($json_products);
    foreach ($products as $obj) {
      DB::table($table_name)->insert(array(
        'id' => $obj->id,
        'slug' => $obj->slug,
        'name' => $obj->name,
        'description' => $obj->description,
        'images' => 'products/7453028514667446168001301900696764202090496n_1609868539.jpg',
        'price' => $obj->price,
        'discount' => $obj->discount,
        'quantity' => $obj->quantity,
        'brand' => $obj->brand,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ));
    }
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
