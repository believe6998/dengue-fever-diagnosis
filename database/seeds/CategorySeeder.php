<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $table_name = 'categories';
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table($table_name)->truncate();
    DB::table($table_name)->insert([
      [
        'id' => 1,
        'name' => 'Giày',
        'slug' => 'giay',
        'description' => 'bong va tham tap yoga',
        'parent_id' => 0,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 2,
        'name' => 'Quần',
        'slug' => 'quan',
        'description' => 'Thanh đòn',
        'parent_id' => 0,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 3,
        'name' => 'Áo',
        'slug' => 'ao',
        'description' => 'description',
        'parent_id' => 0,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 4,
        'name' => 'Áo 1',
        'slug' => 'ao-1',
        'description' => 'description',
        'parent_id' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 5,
        'name' => 'Ao 2',
        'slug' => 'ao-2',
        'description' => 'desc',
        'parent_id' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'id' => 6,
        'name' => 'Ao 3',
        'slug' => 'ao-3',
        'description' => 'desc',
        'parent_id' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
