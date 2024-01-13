<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            // váy đầm
                // //sản phẩm 1
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-01.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-02.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-03.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-04.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-05.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-06.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-07.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-08.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-09.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-khong-tay-10.jpg',
                //     'product_id' => 'DE01014',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // // sản phẩm 2
                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-02.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-03.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-04.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-05.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-06.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-07.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-08.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-duoi-ca-tay-lo-09.jpg',
                //     'product_id' => 'DE01016',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // //sản phẩm 3 - để ý sửa lại cả thư mục chứa loại ảnh
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-01.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-02.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-03.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-04.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-05.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-06.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-07.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-08.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-09.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-suong-bau-danton-10.jpg',
                //     'product_id' => 'DE01062',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // //sản phẩm 4
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-01.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-02.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-03.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-04.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-05.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-06.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-07.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-xoe-xep-ly-08.jpg',
                //     'product_id' => 'DE01035',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // //sản phẩm 5
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-01.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-02.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-03.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-04.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-05.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-06.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-07.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-but-chi-phoi-ren-08.jpg',
                //     'product_id' => 'DE01075',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // //sản phẩm 6
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-01.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-02.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-03.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-04.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-05.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-06.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-07.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-08.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-09.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-phoi-beo-ra-tang-10.jpg',
                //     'product_id' => 'DE01015',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // //sản phẩm 7
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-01.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-02.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-03.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-04.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-05.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-06.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],

                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-07.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-08.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-A-co-yem-09.jpg',
                //     'product_id' => 'DE01037',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // //sản phẩm 8
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-01.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-02.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-03.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-04.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-05.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // [
                //     'path' => 'images/product/dresses/dam-so-mi-nap-tui-06.jpg',
                //     'product_id' => 'DD12043',
                //     'created_at' => $now,
                //     'updated_at' => $now
                // ],
                // //sản phẩm 9
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-01.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-02.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-03.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-04.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-05.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-06.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-07.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-08.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-09.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-xoe-tay-bi-10.jpg',
                    //     'product_id' => 'DD12093',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                // //sản phẩm 10
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-01.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-02.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-03.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-04.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-05.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-06.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-07.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-08.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-09.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-dinh-nut-10.jpg',
                    //     'product_id' => 'DD12039',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                // //sp11: 
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-01.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-02.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-03.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-04.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-05.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-06.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-to-ra-tang-07.jpg',
                    //     'product_id' => 'DD12042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                // //sp12:
                    // [
                    //     'path' => 'images/product/dresses/dam-linen-co-danton-01.jpg',
                    //     'product_id' => 'LDD1207',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-linen-co-danton-02.jpg',
                    //     'product_id' => 'LDD1207',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-linen-co-danton-03.jpg',
                    //     'product_id' => 'LDD1207',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-linen-co-danton-04.jpg',
                    //     'product_id' => 'LDD1207',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/dresses/dam-linen-co-danton-05.jpg',
                    //     'product_id' => 'LDD1207',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

            // thời trang    
                //sp1:
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-suong-01.jpg',
                    //     'product_id' => 'QE01042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-suong-02.jpg',
                    //     'product_id' => 'QE01042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-suong-03.jpg',
                    //     'product_id' => 'QE01042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-suong-04.jpg',
                    //     'product_id' => 'QE01042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-suong-05.jpg',
                    //     'product_id' => 'QE01042',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp2: 
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-01.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-02.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-03.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-04.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-05.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-06.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-07.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/Chan-vay-xoe-dinh-nut-08.jpg',
                    //     'product_id' => 'VE01081',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp3: 
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-01.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-02.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-03.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-04.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-05.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-06.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-07.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-08.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-09.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-tay-dap-ly-10.jpg',
                    //     'product_id' => 'AE01010',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp4: 
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-01.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-02.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-03.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-04.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-05.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-06.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-tay-soc-ong-suong-07.jpg',
                    //     'product_id' => 'QE01023',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp5:
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-01.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-02.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-03.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-04.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-05.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-06.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-07.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-08.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-09.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-2-day-thun-B1-10.jpg',
                    //     'product_id' => 'BATE00009',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp6:
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-01.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-02.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-03.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-04.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-05.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-06.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-07.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-08.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-09.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/ao-so-mi-co-ban-10.jpg',
                    //     'product_id' => 'AE01013',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //sp7
                    // [
                    //     'path' => 'images/product/fashion/quan-gia-vay-lung-lien-01.jpg',
                    //     'product_id' => 'SHE01040',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-gia-vay-lung-lien-02.jpg',
                    //     'product_id' => 'SHE01040',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-gia-vay-lung-lien-03.jpg',
                    //     'product_id' => 'SHE01040',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-gia-vay-lung-lien-04.jpg',
                    //     'product_id' => 'SHE01040',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-gia-vay-lung-lien-05.jpg',
                    //     'product_id' => 'SHE01040',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                //sp8 
                    // [
                    //     'path' => 'images/product/fashion/blazer-lung-bau-tron-01.jpg',
                    //     'product_id' => 'OWE01085',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/blazer-lung-bau-tron-02.jpg',
                    //     'product_id' => 'OWE01085',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/blazer-lung-bau-tron-03.jpg',
                    //     'product_id' => 'OWE01085',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/blazer-lung-bau-tron-04.jpg',
                    //     'product_id' => 'OWE01085',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/blazer-lung-bau-tron-05.jpg',
                    //     'product_id' => 'OWE01085',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                //sp9: 
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-01.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-02.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-03.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-04.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-05.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-06.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-07.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-08.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-09.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/chan-vay-tui-dap-10.jpg',
                    //     'product_id' => 'VE01020',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //10
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-01.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-02.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-03.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-04.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-05.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-06.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-07.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-tay-ong-loe-08.jpg',
                    //     'product_id' => 'QE01084',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //11
                    // [
                    //     'path' => 'images/product/fashion/quan-ong-dung-tui-xeo-01.jpg',
                    //     'product_id' => 'QE01044',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],

                    // [
                    //     'path' => 'images/product/fashion/quan-ong-dung-tui-xeo-02.jpg',
                    //     'product_id' => 'QE01044',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-ong-dung-tui-xeo-03.jpg',
                    //     'product_id' => 'QE01044',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-ong-dung-tui-xeo-04.jpg',
                    //     'product_id' => 'QE01044',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                    // [
                    //     'path' => 'images/product/fashion/quan-ong-dung-tui-xeo-05.jpg',
                    //     'product_id' => 'QE01044',
                    //     'created_at' => $now,
                    //     'updated_at' => $now
                    // ],
                //12
                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-01.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],

                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-02.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],
                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-03.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],
                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-04.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],
                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-05.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],
                    [
                        'path' => 'images/product/fashion/chan-vay-duoi-ca-06.jpg',
                        'product_id' => 'VE01069',
                        'created_at' => $now,
                        'updated_at' => $now
                    ],
            
        ];
        DB::table('images')->insert($data);
    }
}
