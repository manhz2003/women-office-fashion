<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSizeColorsTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [];

        DB::table('product_size_colors')->insert($data);
    }
}
