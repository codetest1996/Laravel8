<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'p_name'=>'ACER筆電',
            'p_label'=>'宏碁',
            'o_price'=>'18388',
            'a_price'=>'23800',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('product')->insert([
            'p_name'=>'ASUS筆電',
            'p_label'=>'華碩',
            'o_price'=>'19900',
            'a_price'=>'29000',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        DB::table('product')->insert([
            'p_name'=>'MSI筆電',
            'p_label'=>'微星',
            'o_price'=>'66900',
            'a_price'=>'77000',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        DB::table('product')->insert([
            'p_name'=>'ACER桌電',
            'p_label'=>'宏碁',
            'o_price'=>'30000',
            'a_price'=>'55000',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('product')->insert([
            'p_name'=>'ASUS桌電',
            'p_label'=>'華碩',
            'o_price'=>'60000',
            'a_price'=>'100000',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        DB::table('product')->insert([
            'p_name'=>'MSI筆桌電',
            'p_label'=>'微星',
            'o_price'=>'50000',
            'a_price'=>'80000',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

    }
}
