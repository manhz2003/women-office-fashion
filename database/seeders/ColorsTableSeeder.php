<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ColorsTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            ['color' => 'Đen', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Xanh', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Hồng', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Cam', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Xanh đen', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Trắng', 'created_at' => $now, 'updated_at' => $now],
            ['color' => 'Be', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('colors')->insert($data);
    }
}
