<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaleOffsTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'code' => 'NEWYEAR30',
                'sale_price' => 30.000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'code' => 'NEWYEAR60',
                'sale_price' => 60.000,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('sale_offs')->insert($data);
    }
}
