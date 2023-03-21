<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            ['id'=>1, 'name'=>'Classical Guitar - Yamaha C40', 'description'=>'The classical guitar is a member of the guitar family used in classical music and other styles.', 'slug'=>'yamaha-c40', 'stock'=>'1']
           ,['id'=>2, 'name'=>'Classical Guitar - Yamaha C70', 'description'=>' An acoustic wooden string instrument with strings made of gut or nylon.', 'slug'=>'yamaha-c70', 'stock'=>'0']
           ,['id'=>3, 'name'=>'Asus laptop - Zenbook ux433fa', 'description'=>'ASUS laptops are the best laptops for unrivalled mobility, featuring lightweight, toughness', 'slug'=>'asus-zenbook-ux433fa', 'stock'=>'1']
           ,['id'=>4, 'name'=>'Bedside lamp', 'description'=>'Lorem ex ea labore ea ex amet non officia voluptate eu ex in irure.', 'slug'=>'bedside-lamp-298fj5', 'stock'=>'1']
        ];

        foreach ($items as $item)
            DB::table('products')->insert($item);

        
    //     $items = [
    //         ['id'=>1, 'name'=>'Off-road', 'description'=>'Off-road equipment']
    //        ,['id'=>2, 'name'=>'SUV', 'description'=>'SUV and family cars equipments']
    //        ,['id'=>3, 'name'=>'خدمات آپاراتی', 'description'=>'...']
    //        ,['id'=>4, 'name'=>'خدمات فروشگاه', 'description'=>'...']

    //    ];
    //    foreach ($items as $item)
    //        Category::create($item);
    }
}
