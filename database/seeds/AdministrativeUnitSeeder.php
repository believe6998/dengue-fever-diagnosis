<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AdministrativeUnitSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $json_tinh_tp = File::get("database/json_data/tinh_tp.json");
    $json_quan_huyen = File::get("database/json_data/quan_huyen.json");
    $json_xa_phuong = File::get("database/json_data/xa_phuong.json");
    $tinh_tp = json_decode($json_tinh_tp);
    $quan_huyen = json_decode($json_quan_huyen);
    $xa_puong = json_decode($json_xa_phuong);
    DB::table('tinhtps')->truncate();
    DB::table('quanhuyens')->truncate();
    DB::table('xaphuongs')->truncate();
    foreach ($tinh_tp as $obj) {
      \Illuminate\Support\Facades\DB::table('tinhtps')->insert(array(
        'code' => $obj->code,
        'name' => $obj->name,
        'slug' => $obj->slug,
        'type' => $obj->type,
        'name_with_type' => $obj->name_with_type,
      ));
    }
    foreach ($quan_huyen as $obj) {
      \Illuminate\Support\Facades\DB::table('quanhuyens')->insert(array(
        'code' => $obj->code,
        'parent_code' => $obj->parent_code,
        'name' => $obj->name,
        'slug' => $obj->slug,
        'type' => $obj->type,
        'name_with_type' => $obj->name_with_type,
        'path' => $obj->path,
        'path_with_type' => $obj->path_with_type,
      ));
    }
    foreach ($xa_puong as $obj) {
      \Illuminate\Support\Facades\DB::table('xaphuongs')->insert(array(
        'code' => $obj->code,
        'parent_code' => $obj->parent_code,
        'name' => $obj->name,
        'slug' => $obj->slug,
        'type' => $obj->type,
        'name_with_type' => $obj->name_with_type,
        'path' => $obj->path,
        'path_with_type' => $obj->path_with_type,
      ));
    }
    //
  }
}
