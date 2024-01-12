<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'path' => 'images/collection/banner.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-01.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-02.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-03.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-04.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-05.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-06.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-07.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-08.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-09.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-10.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-11.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-12.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-13.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-14.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'path' => 'images/collection/thieu-hoa-15.jpg',
                'collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('albums')->insert($data);
    }
}
