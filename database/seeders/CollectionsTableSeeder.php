<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CollectionsTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();
        $data = [
            ['name' => 'Áo dài thiều hoa', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('collections')->insert($data);
    }
}
