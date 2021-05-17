<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'discounts';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($table_name)->truncate();
        DB::table($table_name)->insert([
            [
                'id' => 1,
                'title' => 'Giảm giá Bóng tập yoga Kingsport',
                'show_price' => 0,
                'percent' => 10,
                'expired_time' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'title' => 'Giảm giá Thảm tập yoga Kingsport',
                'show_price' => 0,
                'percent' => 15,
                'expired_time' => Carbon::now()->addDays(15)->format('Y-m-d H:i:s'),
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'title' => 'Giảm giá Thảm tập yoga Kingsport',
                'show_price' => 0,
                'percent' => 15,
                'expired_time' => Carbon::now()->subDays(15)->format('Y-m-d H:i:s'),
                'status' => 0,
                'created_at' => Carbon::now()->subDays(30)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->subDays(30)->format('Y-m-d H:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
