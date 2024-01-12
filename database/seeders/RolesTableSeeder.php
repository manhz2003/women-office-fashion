<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            ['name' => 'user', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'admin', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('roles')->insert($data);
    }
}
