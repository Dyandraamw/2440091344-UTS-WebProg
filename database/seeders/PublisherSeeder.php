<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishersdata = [
            ["name"=> "Shueisha",
            "address"=> "2-5-10 Hitotsubashi, Chiyoda-ku, Tokyo",
            "phone"=> "+81-3-5390-7222",
            "email"=> "info@shueisha.co.jp",
            "image"=> "images/LogoShueisha.png"],

            ["name"=> "Webnovel",
            "address"=> "Building 6, No. 690 Bibo Rd, Zhangjiang",
            "phone"=> "+86-1-3366-35111",
            "email"=> "service@webnovel.com",
            "image"=> "images/LogoWebnovel.png"]
        ];

        DB::table('publishers')->insert($publishersdata);
    }
}
