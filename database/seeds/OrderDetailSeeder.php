<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'order_details';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($table_name)->truncate();
        DB::table($table_name)->insert([
            [
                'id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'discount' => 0,
                'quantity' => 2,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'order_id' => 1,
                'product_id' => 2,
                'discount' => 0,
                'quantity' => 2,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
