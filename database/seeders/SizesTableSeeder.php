<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SizesTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            ['size' => 'XS', 'created_at' => $now, 'updated_at' => $now],
            ['size' => 'S', 'created_at' => $now, 'updated_at' => $now],
            ['size' => 'M', 'created_at' => $now, 'updated_at' => $now],
            ['size' => 'L', 'created_at' => $now, 'updated_at' => $now],
            ['size' => 'XL', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('sizes')->insert($data);
    }
}
