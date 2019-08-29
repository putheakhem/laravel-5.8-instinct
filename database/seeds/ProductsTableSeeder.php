<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iPhone X',
            'details' => 'Lorem Ipsum.',
            'price'  => '1000'
        ]);

        DB::table('products')->insert([
            'name' => 'iPhone XR',
            'details' => 'Lorem Ipsum 2.',
            'price'  => '1001'
        ]);
    }
}
