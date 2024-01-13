<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
        // váy đầm
            // //1
            //     [
            //         'id' => 'DE01014',
            //         'name' => 'Đầm A không tay',
            //         'old_price' => 595.000,
            //         'new_price' => 535.500,
            //         'thumbnail' => 'images/product/dresses/dam-A-khong-tay-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 50,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //2
            //     [
            //         'id' => 'DE01016',
            //         'name' => 'Đầm đuôi cá tay lỡ',
            //         'old_price' => 650.000,
            //         'new_price' => 585.000,
            //         'thumbnail' => 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //3
            //     [
            //         'id' => 'DE01062',
            //         'name' => 'Đầm suông bâu danton',
            //         'old_price' => 565.000,
            //         'new_price' => 508.500,
            //         'thumbnail' => 'images/product/dresses/dam-suong-bau-danton-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //4
            //     [
            //         'id' => 'DE01035',
            //         'name' => 'Đầm A xòe xếp ly',
            //         'old_price' => 550.000,
            //         'new_price' => 495.000,
            //         'thumbnail' => 'images/product/dresses/dam-A-xoe-xep-ly-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //5
            //     [
            //         'id' => 'DE01075',
            //         'name' => 'Đầm bút chì phối ren',
            //         'old_price' => 575.000,
            //         'new_price' => 517.500,
            //         'thumbnail' => 'images/product/dresses/dam-but-chi-phoi-ren-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 10,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //6
            //     [
            //         'id' => 'DE01015',
            //         'name' => 'Đầm phối bèo rã tầng',
            //         'old_price' => 585.000,
            //         'new_price' => 526.500,
            //         'thumbnail' => 'images/product/dresses/dam-phoi-beo-ra-tang-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 20,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //7
            //     [
            //         'id' => 'DE01037',
            //         'name' => 'Đầm A cổ yếm',
            //         'old_price' => 565.000,
            //         'new_price' => 508.500,
            //         'thumbnail' => 'images/product/dresses/dam-A-co-yem-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //8
            //     [
            //         'id' => 'DD12043',
            //         'name' => 'Đầm sơ mi nắp túi',
            //         'old_price' => 630.000,
            //         'new_price' => 504.000,
            //         'thumbnail' => 'images/product/dresses/dam-so-mi-nap-tui-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 40,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //9
            //     [
            //         'id' => 'DD12093',
            //         'name' => 'Đầm xòe tay bí',
            //         'old_price' => 585.000,
            //         'new_price' => 468.000,
            //         'thumbnail' => 'images/product/dresses/dam-xoe-tay-bi-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 10,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //10
            //     [
            //         'id' => 'DD12039',
            //         'name' => 'Đầm tơ đính nút',
            //         'old_price' => 585.000,
            //         'new_price' => 468.000,
            //         'thumbnail' => 'images/product/dresses/dam-to-dinh-nut-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 10,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //11
            //     [
            //         'id' => 'DD12042',
            //         'name' => 'Đầm tơ rã tầng',
            //         'old_price' => 550.000,
            //         'new_price' => 440.000,
            //         'thumbnail' => 'images/product/dresses/dam-to-ra-tang-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],
            // //12
            //     [
            //         'id' => 'LDD1207',
            //         'name' => 'Đầm linen cổ danton',
            //         'old_price' => 495.000,
            //         'new_price' => 279.000,
            //         'thumbnail' => 'images/product/dresses/dam-linen-co-danton-01.jpg',
            //         'categorie_id' => 2,
            //         'quantity' => 30,
            //         'created_at' => $now,
            //         'updated_at' => $now,
            //     ],

        // thời trang
            //1
                // [
                //     'id' => 'QE01042',
                //     'name' => 'Quần tây ống suông',
                //     'old_price' => 430.000,
                //     'new_price' => 387.000,
                //     'thumbnail' => 'images/product/fashion/quan-tay-ong-suong-01.jpg',
                //     'categorie_id' => 6,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //2
                // [
                //     'id' => 'VE01081',
                //     'name' => 'Chân váy xòe đính nút',
                //     'old_price' => 495.000,
                //     'new_price' => 445.000,
                //     'thumbnail' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-01.jpg',
                //     'categorie_id' => 7,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //3
                // [
                //     'id' => 'AE01010',
                //     'name' => 'Áo sơ mi tay dập ly',
                //     'old_price' => 475.000,
                //     'new_price' => 427.000,
                //     'thumbnail' => 'images/product/fashion/ao-so-mi-tay-dap-ly-01.jpg',
                //     'categorie_id' => 4,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //4
                // [
                //     'id' => 'QE01023',
                //     'name' => 'Quần tây sọc ống suông',
                //     'old_price' => 530.000,
                //     'new_price' => 477.000,
                //     'thumbnail' => 'images/product/fashion/quan-tay-soc-ong-suong-01.jpg',
                //     'categorie_id' => 6,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //5
                // [
                //     'id' => 'BATE00009',
                //     'name' => 'Áo 2 dây thun B1',
                //     'old_price' => 165.000,
                //     'new_price' => 165.000,
                //     'thumbnail' => 'images/product/fashion/ao-2-day-thun-B1-01.jpg',
                //     'categorie_id' => 5,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //6
                // [
                //     'id' => 'AE01013',
                //     'name' => 'Áo sơ mi cơ bản',
                //     'old_price' => 365.000,
                //     'new_price' => 328.500,
                //     'thumbnail' => 'images/product/fashion/ao-so-mi-co-ban-01.jpg',
                //     'categorie_id' => 4,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //7
                // [
                //     'id' => 'SHE01040',
                //     'name' => 'Quần giả váy lưng liền',
                //     'old_price' => 400.000,
                //     'new_price' => 375.000,
                //     'thumbnail' => 'images/product/fashion/quan-gia-vay-lung-lien-01.jpg',
                //     'categorie_id' => 7,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //8
                // [
                //     'id' => 'OWE01085',
                //     'name' => 'Blazer lửng bâu tròn',
                //     'old_price' => 545.000,
                //     'new_price' => 495.000,
                //     'thumbnail' => 'images/product/fashion/blazer-lung-bau-tron-01.jpg',
                //     'categorie_id' => 13,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //9
                // [
                //     'id' => 'VE01020',
                //     'name' => 'Chân váy túi đắp',
                //     'old_price' => 395.000,
                //     'new_price' => 355.500,
                //     'thumbnail' => 'images/product/fashion/chan-vay-tui-dap-01.jpg',
                //     'categorie_id' => 7,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //10
                // [
                //     'id' => 'QE01084',
                //     'name' => 'Quần tây ống loe',
                //     'old_price' => 530.000,
                //     'new_price' => 477.000,
                //     'thumbnail' => 'images/product/fashion/quan-tay-ong-loe-01.jpg',
                //     'categorie_id' => 6,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //11
                // [
                //     'id' => 'QE01044',
                //     'name' => 'Quần ống đứng túi xéo',
                //     'old_price' => 450.000,
                //     'new_price' => 405.000,
                //     'thumbnail' => 'images/product/fashion/quan-ong-dung-tui-xeo-01.jpg',
                //     'categorie_id' => 6,
                //     'quantity' => 30,
                //     'created_at' => $now,
                //     'updated_at' => $now,
                // ],
            //12
                [
                    'id' => 'VE01069',
                    'name' => 'Chân váy đuôi cá',
                    'old_price' => 430.000,
                    'new_price' => 387.000,
                    'thumbnail' => 'images/product/fashion/chan-vay-duoi-ca-01.jpg',
                    'categorie_id' => 7,
                    'quantity' => 30,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ];

        DB::table('products')->insert($data);
    }
}
