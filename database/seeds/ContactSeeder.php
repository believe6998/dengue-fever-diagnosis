<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'contacts';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($table_name)->truncate();
        DB::table($table_name)->insert([
            [
                'id' => 1,
                'name' => 'Nguyen Trung',
                'email' => 'nguyentrung@gmail.com',
                'phone' => '0986123456',
                'content' => 'xin chào tôi muốn giúp đỡ!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Hoai Nam',
                'email' => 'hoainam@gmail.com',
                'phone' => '0986123456',
                'content' => 'xin chào tôi muốn được tư vấn!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Duong Phu',
                'email' => 'duongphu@gmail.com',
                'phone' => '0986123456',
                'content' => 'xin chào tôi muốn được hỗ trợ!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
