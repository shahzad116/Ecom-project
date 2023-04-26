<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            [
                'name'=> 'Iphone 15 pro max',
                'price'=> '5500',
                'category'=> 'Mobile',
                'description'=> 'iphone 15 pro max 4gb ram, 48Mb camera, 4k 60 htz video',
                'gallery'=>'https://shop.du.ae/medias/sys_master/images/images/h43/h4a/9037764296734/iPhone-14-Pro-Max-Deep-Purple.jpg'
            ],

            [
                'name'=> 'Iphone 16 pro max',
                'price'=> '6500',
                'category'=> 'Mobile',
                'description'=> 'iphone 16 pro max 4gb ram, 48Mb camera, 4k 60 htz video',
                'gallery'=>'https://shop.du.ae/medias/sys_master/images/images/h43/h4a/9037764296734/iPhone-14-Pro-Max-Deep-Purple.jpg'
            ],

            [
                'name'=> 'Iphone 17 pro max',
                'price'=> '7000',
                'category'=> 'Mobile',
                'description'=> 'iphone 17 pro max 4gb ram, 48Mb camera, 4k 60 htz video',
                'gallery'=>'https://shop.du.ae/medias/sys_master/images/images/h43/h4a/9037764296734/iPhone-14-Pro-Max-Deep-Purple.jpg'
            ],

        ]);
    }
}
