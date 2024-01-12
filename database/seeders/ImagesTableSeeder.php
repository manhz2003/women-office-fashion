<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            // sản phẩm 1
            [
                'path' => 'images/product/dresses/dam-A-khong-tay-01.jpg',
                'product_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-A-khong-tay-02.jpg',
                'product_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-A-khong-tay-03.jpg',
                'product_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],

            // sản phẩm 2
            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-02.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-03.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-04.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-05.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-06.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-07.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-08.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            [
                'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-09.jpg',
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],

            // sản phẩm 3 - để ý sửa lại cả thư mục chứa loại ảnh
        ];

        DB::table('images')->insert($data);
    }
}
