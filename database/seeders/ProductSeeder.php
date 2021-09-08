<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>"LG mobile",
            'price'=>'200',
            'description'=>'A smartphone with 4gb ram and many more',
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"],

            ['name'=>"Oppo mobile",
            'price'=>'300',
            'description'=>'A smartphone with 8gb ram and many more',
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"],

            ['name'=>"Samsung TV",
            'price'=>'8000',
            'description'=>'A smarttv with surround sound and many more',
            "category"=>"tv",
            "gallery"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"],

            ['name'=>"sony TV",
            'price'=>'5000',
            'description'=>'A smartphone many more',
            "category"=>"tv",
            "gallery"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"],

            ['name'=>"LG fridge",
            'price'=>'5000',
            'description'=>'A fridge many more',
            "category"=>"fridge",
            "gallery"=>"https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"]
        ]);
    }
}
