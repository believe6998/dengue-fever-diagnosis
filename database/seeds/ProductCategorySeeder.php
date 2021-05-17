<?php

use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $table_name = 'category_products';
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table($table_name)->truncate();
      $json_product_categories = File::get("database/json_data/product_categories.json");
      $product_categories = json_decode($json_product_categories);
      foreach ($product_categories as $obj) {
        DB::table($table_name)->insert(array(
          'id' => $obj->id,
          'product_id' => $obj->product_id,
          'category_id' => $obj->category_id,
          'status' => 1,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ));
      }
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
