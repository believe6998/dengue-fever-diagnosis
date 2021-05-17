<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'orders';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($table_name)->truncate();
        DB::table($table_name)->insert([
//            [
//                'id' => 1,
//                'name' => 'Trung',
//                'email' => 'trung@gmail.com',
//                'phone' => '0986123456',
//                'address' => 'Ha Noi',
//                'note' => 'Giao vao buoi trua',
//                'total_price' => 700000,
//                'status' => 1,
//                'created_at' => date('Y-m-d H:i:s'),
//                'updated_at' => date('Y-m-d H:i:s')
//            ],
//            [
//                'id' => 2,
//                'name' => 'Nam',
//                'email' => 'nam@gmail.com',
//                'phone' => '0986123456',
//                'address' => 'Ha Noi',
//                'note' => 'Giao vao buoi trua',
//                'total_price' => 700000,
//                'status' => 1,
//                'created_at' => date('Y-m-d H:i:s'),
//                'updated_at' => date('Y-m-d H:i:s')
//            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
