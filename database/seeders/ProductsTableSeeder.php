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
            [
                'id' => '1',
                'name' => 'Đầm A không tay',
                'color' => 'Hồng',
                'size' => 'M',
                'old_price' => 595.000,
                'new_price' => 535.500,
                'thumbnail' => 'images/product/dresses/dam-A-khong-tay-01.jpg',
                'categorie_id' => 2,
                'quantity' => 50,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => '2',
                'name' => 'Đầm đuôi cá tay lỡ',
                'color' => 'Đen',
                'size' => 'L',
                'old_price' => 650.000,
                'new_price' => 585.000,
                'thumbnail' => 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg',
                'categorie_id' => 2,
                'quantity' => 30,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Thêm dữ liệu cho các bản ghi khác nếu cần
        ];

        DB::table('products')->insert($data);
    }
}
