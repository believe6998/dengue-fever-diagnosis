<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $table_name = 'brands';
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table($table_name)->truncate();
    DB::table($table_name)->insert([
      [
        'id' => 1,
        'name' => 'Thương hiệu 1',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 2,
        'name' => 'Thương hiệu 2',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 3,
        'name' => 'Thương hiệu 3',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 4,
        'name' => 'Thương hiệu 4',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 5,
        'name' => 'Thương hiệu 5',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 6,
        'name' => 'Thương hiệu 6',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ], [
        'id' => 7,
        'name' => 'Thương hiệu 7',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
