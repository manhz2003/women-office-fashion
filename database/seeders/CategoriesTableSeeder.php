<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        // tạo đối tượng lấy ra thời gian hiện tại
        $now = Carbon::now();

        // insert data thủ công bằng tay
        $data = [
            ['name' => 'Hàng mới', 'quantity' => 200, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Váy đầm', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thời trang', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo sơ mi', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo thun', 'quantity' => 150, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Quần dài', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chân váy', 'quantity' => 150, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo dài', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo khoác', 'quantity' => 150, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo len', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Giày dép', 'quantity' => 150, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Quần jeans', 'quantity' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Áo Blazer & vest', 'quantity' => 150, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('categories')->insert($data);
    }
}
