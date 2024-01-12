<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserRolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            // lệnh chạy để thực thi seeder: php artisan db:seed --class=UserRolesTableSeeder
            // tạm thời bảng này chưa lưu vì chưa có user nào được tạo
            // ['user_id' => 1, 'role_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            // ['user_id' => 2, 'role_id' => 1, 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('user_roles')->insert($data);
    }
}
