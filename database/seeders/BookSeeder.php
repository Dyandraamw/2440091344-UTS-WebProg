<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booksdata = [
            ["publisher_id"=> "1",
            "title"=> "Blue Lock Vol.8",
            "author"=> "Yusuke Nomura",
            "year"=> 2017,
            "synopsis"=> "The story begins with Japan’s elimination from the 2018 FIFA World Cup, which prompts the Japanese Football Union to start a program scouting high school players who will begin training in preparation for the 2022 Cup.",
            "image"=> "images/BlueLock.jpg"],

            ["publisher_id"=> "1",
            "title"=> "Blue Period Vol.1",
            "author"=> "Tsubasa Yamaguchi",
            "year"=> 2018,
            "synopsis"=> "Yatora Yaguchi is a fairly popular student who excels in school, but secretly grapples with feelings of emptiness and frustration. When visiting his high school's art club he is inspired to pursue art",
            "image"=> "images/BluePeriod.jpg"],

            ["publisher_id"=> "1",
            "title"=> "Haikyu!! Vol.1",
            "author"=> "Haruichi Furudate",
            "year"=> 2013,
            "synopsis"=> "Junior high school student, Shoyo Hinata, becomes obsessed with volleyball after catching a glimpse of Karasuno High School playing in Nationals on TV. ",
            "image"=> "images/Haikyu.jpg"],

            ["publisher_id"=> "1",
            "title"=> "Demon Slayer Vol.1",
            "author"=> "Koyoharu Gotouge",
            "year"=> 2016,
            "synopsis"=> "The story takes place in Taishō-era Japan, where a secret society, known as the Demon Slayer Corps, has been waging a secret war against demons for centuries.",
            "image"=> "images/DemonSlayer.jpg"],

            ["publisher_id"=> "1",
            "title"=> "Tsurune",
            "author"=> "Kotoko Ayano",
            "year"=> 2017,
            "synopsis"=> "The series follows the Kazemai High School Kyudo Club as they aim to go to the national tournament while overcoming the many obstacles on their way.",
            "image"=> "images/Tsurune.jpeg"],

            ["publisher_id"=> "1",
            "title"=> "Ace of Diamonds",
            "author"=> "Yuji Terajima",
            "year"=> 2012,
            "synopsis"=> "The series follows Eijun Sawamura, a baseball pitcher with an unusual pitching style that naturally causes the ball to move unpredictably at the plate",
            "image"=> "images/AoD.jpg"],

            ["publisher_id"=> "2",
            "title"=> "Omniscient Reader's Viewpoint",
            "author"=> "Sing Shong",
            "year"=> 2017,
            "synopsis"=> "A novel called Three Ways to Survive in a Ruined World (written by the author tls123) has been written and published over the course of a decade, and Kim Dokja is the sole reader who has followed it to its ending.",
            "image"=> "images/ORV.jpg"],

            ["publisher_id"=> "2",
            "title"=> "God of Cooking",
            "author"=> "Yangchigi Jali",
            "year"=> 2019,
            "synopsis"=> "30-year-old Jo Minjoon has always wanted to become a chef. Regretting his life choices, he wishes he could go back to change it all and falls asleep.",
            "image"=> "images/GoC.jpeg"],

            ["publisher_id"=> "2",
            "title"=> "Solo Leveling",
            "author"=> "Chugong",
            "year"=> 2017,
            "synopsis"=> "In a world where hunters must battle deadly monsters to protect the human race from certain annihilation, a notoriously weak hunter named Sung Jinwoo finds himself in a seemingly endless struggle for survival.",
            "image"=> "images/SoloLeveling.jpg"],

            ["publisher_id"=> "2",
            "title"=> "Superstars of Tomorrow",
            "author"=> "Lazy Cliche",
            "year"=> 2021,
            "synopsis"=> "Toward the end of the apocalyptic period, Fang Zhao lost his life. However, instead of dying, he found himself 500 years later in the body of a young and aspiring composer who shared the same name.",
            "image"=> "images/SoT.jpg"],

            ["publisher_id"=> "2",
            "title"=> "Trash of the Count's Family",
            "author"=> "Yu Ryeo Han",
            "year"=> 2018,
            "synopsis"=> "Beginning with the awakening of our main character, Kim Rok Soo, in a different world, he finds himself possessing the body of a minor villain inside of the novel The Birth of a Hero: Cale Henituse.",
            "image"=> "images/TotCF.jpg"]
        ];

        DB::table('books')->insert($booksdata);
    }
}
