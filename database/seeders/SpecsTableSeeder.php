<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specs')->delete();
        
        \DB::table('specs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descr' => 'Mercury Jupiter',
                'created_at' => '2021-12-27 19:55:33',
                'updated_at' => '2021-12-27 19:55:33',
            ),
            1 => 
            array (
                'id' => 2,
                'descr' => 'Pluto Earth',
                'created_at' => '2021-12-27 19:55:34',
                'updated_at' => '2021-12-27 19:55:34',
            ),
            2 => 
            array (
                'id' => 3,
                'descr' => 'Mars Mars',
                'created_at' => '2021-12-27 19:55:34',
                'updated_at' => '2021-12-27 19:55:34',
            ),
            3 => 
            array (
                'id' => 4,
                'descr' => 'Mars Mercury',
                'created_at' => '2021-12-27 19:55:34',
                'updated_at' => '2021-12-27 19:55:34',
            ),
            4 => 
            array (
                'id' => 5,
                'descr' => 'Neptune Uranus',
                'created_at' => '2021-12-27 19:55:34',
                'updated_at' => '2021-12-27 19:55:34',
            ),
            5 => 
            array (
                'id' => 6,
                'descr' => 'Saturn Venus',
                'created_at' => '2021-12-27 19:55:35',
                'updated_at' => '2021-12-27 19:55:35',
            ),
            6 => 
            array (
                'id' => 7,
                'descr' => 'Saturn Jupiter',
                'created_at' => '2021-12-27 19:55:35',
                'updated_at' => '2021-12-27 19:55:35',
            ),
            7 => 
            array (
                'id' => 8,
                'descr' => 'Earth Venus',
                'created_at' => '2021-12-27 19:55:35',
                'updated_at' => '2021-12-27 19:55:35',
            ),
            8 => 
            array (
                'id' => 9,
                'descr' => 'Earth Mars',
                'created_at' => '2021-12-27 19:55:35',
                'updated_at' => '2021-12-27 19:55:35',
            ),
            9 => 
            array (
                'id' => 10,
                'descr' => 'Jupiter Pluto',
                'created_at' => '2021-12-27 19:55:35',
                'updated_at' => '2021-12-27 19:55:35',
            ),
            10 => 
            array (
                'id' => 11,
                'descr' => 'Venus Sun',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            11 => 
            array (
                'id' => 12,
                'descr' => 'Earth Mars',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            12 => 
            array (
                'id' => 13,
                'descr' => 'Neptune Sun',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            13 => 
            array (
                'id' => 14,
                'descr' => 'Saturn Neptune',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            14 => 
            array (
                'id' => 15,
                'descr' => 'Mercury Jupiter',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            15 => 
            array (
                'id' => 16,
                'descr' => 'Mars Saturn',
                'created_at' => '2021-12-27 19:55:36',
                'updated_at' => '2021-12-27 19:55:36',
            ),
            16 => 
            array (
                'id' => 17,
                'descr' => 'Earth Sun',
                'created_at' => '2021-12-27 19:55:37',
                'updated_at' => '2021-12-27 19:55:37',
            ),
            17 => 
            array (
                'id' => 18,
                'descr' => 'Jupiter Mercury',
                'created_at' => '2021-12-27 19:55:37',
                'updated_at' => '2021-12-27 19:55:37',
            ),
            18 => 
            array (
                'id' => 19,
                'descr' => 'Sun Mars',
                'created_at' => '2021-12-27 19:55:37',
                'updated_at' => '2021-12-27 19:55:37',
            ),
            19 => 
            array (
                'id' => 20,
                'descr' => 'Neptune Mars',
                'created_at' => '2021-12-27 19:55:37',
                'updated_at' => '2021-12-27 19:55:37',
            ),
            20 => 
            array (
                'id' => 21,
                'descr' => 'Sun Saturn',
                'created_at' => '2021-12-27 19:55:37',
                'updated_at' => '2021-12-27 19:55:37',
            ),
            21 => 
            array (
                'id' => 22,
                'descr' => 'Neptune Venus',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            22 => 
            array (
                'id' => 23,
                'descr' => 'Pluto Uranus',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            23 => 
            array (
                'id' => 24,
                'descr' => 'Venus Pluto',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            24 => 
            array (
                'id' => 25,
                'descr' => 'Mars Sun',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            25 => 
            array (
                'id' => 26,
                'descr' => 'Mars Neptune',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            26 => 
            array (
                'id' => 27,
                'descr' => 'Neptune Venus',
                'created_at' => '2021-12-27 19:55:38',
                'updated_at' => '2021-12-27 19:55:38',
            ),
            27 => 
            array (
                'id' => 28,
                'descr' => 'Neptune Venus',
                'created_at' => '2021-12-27 19:55:39',
                'updated_at' => '2021-12-27 19:55:39',
            ),
            28 => 
            array (
                'id' => 29,
                'descr' => 'Jupiter Sun',
                'created_at' => '2021-12-27 19:55:39',
                'updated_at' => '2021-12-27 19:55:39',
            ),
            29 => 
            array (
                'id' => 30,
                'descr' => 'Mercury Pluto',
                'created_at' => '2021-12-27 19:55:39',
                'updated_at' => '2021-12-27 19:55:39',
            ),
            30 => 
            array (
                'id' => 31,
                'descr' => 'Venus Saturn',
                'created_at' => '2021-12-27 19:55:39',
                'updated_at' => '2021-12-27 19:55:39',
            ),
            31 => 
            array (
                'id' => 32,
                'descr' => 'Uranus Mercury',
                'created_at' => '2021-12-27 19:55:39',
                'updated_at' => '2021-12-27 19:55:39',
            ),
            32 => 
            array (
                'id' => 33,
                'descr' => 'Jupiter Saturn',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            33 => 
            array (
                'id' => 34,
                'descr' => 'Neptune Jupiter',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            34 => 
            array (
                'id' => 35,
                'descr' => 'Venus Neptune',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            35 => 
            array (
                'id' => 36,
                'descr' => 'Sun Sun',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            36 => 
            array (
                'id' => 37,
                'descr' => 'Pluto Mercury',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            37 => 
            array (
                'id' => 38,
                'descr' => 'Mercury Saturn',
                'created_at' => '2021-12-27 19:55:40',
                'updated_at' => '2021-12-27 19:55:40',
            ),
            38 => 
            array (
                'id' => 39,
                'descr' => 'Mars Sun',
                'created_at' => '2021-12-27 19:55:41',
                'updated_at' => '2021-12-27 19:55:41',
            ),
            39 => 
            array (
                'id' => 40,
                'descr' => 'Jupiter Venus',
                'created_at' => '2021-12-27 19:55:41',
                'updated_at' => '2021-12-27 19:55:41',
            ),
            40 => 
            array (
                'id' => 41,
                'descr' => 'Venus Sun',
                'created_at' => '2021-12-27 19:55:41',
                'updated_at' => '2021-12-27 19:55:41',
            ),
            41 => 
            array (
                'id' => 42,
                'descr' => 'Earth Mercury',
                'created_at' => '2021-12-27 19:55:41',
                'updated_at' => '2021-12-27 19:55:41',
            ),
            42 => 
            array (
                'id' => 43,
                'descr' => 'Mars Neptune',
                'created_at' => '2021-12-27 19:55:41',
                'updated_at' => '2021-12-27 19:55:41',
            ),
            43 => 
            array (
                'id' => 44,
                'descr' => 'Mars Mars',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            44 => 
            array (
                'id' => 45,
                'descr' => 'Pluto Saturn',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            45 => 
            array (
                'id' => 46,
                'descr' => 'Mars Earth',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            46 => 
            array (
                'id' => 47,
                'descr' => 'Saturn Earth',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            47 => 
            array (
                'id' => 48,
                'descr' => 'Pluto Jupiter',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            48 => 
            array (
                'id' => 49,
                'descr' => 'Pluto Pluto',
                'created_at' => '2021-12-27 19:55:42',
                'updated_at' => '2021-12-27 19:55:42',
            ),
            49 => 
            array (
                'id' => 50,
                'descr' => 'Uranus Uranus',
                'created_at' => '2021-12-27 19:55:43',
                'updated_at' => '2021-12-27 19:55:43',
            ),
            50 => 
            array (
                'id' => 51,
                'descr' => 'Mercury Uranus',
                'created_at' => '2021-12-27 19:55:43',
                'updated_at' => '2021-12-27 19:55:43',
            ),
            51 => 
            array (
                'id' => 52,
                'descr' => 'Mercury Jupiter',
                'created_at' => '2021-12-27 19:55:43',
                'updated_at' => '2021-12-27 19:55:43',
            ),
            52 => 
            array (
                'id' => 53,
                'descr' => 'Jupiter Mars',
                'created_at' => '2021-12-27 19:55:43',
                'updated_at' => '2021-12-27 19:55:43',
            ),
            53 => 
            array (
                'id' => 54,
                'descr' => 'Jupiter Saturn',
                'created_at' => '2021-12-27 19:55:43',
                'updated_at' => '2021-12-27 19:55:43',
            ),
            54 => 
            array (
                'id' => 55,
                'descr' => 'Saturn Sun',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            55 => 
            array (
                'id' => 56,
                'descr' => 'Mercury Uranus',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            56 => 
            array (
                'id' => 57,
                'descr' => 'Mars Pluto',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            57 => 
            array (
                'id' => 58,
                'descr' => 'Mars Uranus',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            58 => 
            array (
                'id' => 59,
                'descr' => 'Uranus Pluto',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            59 => 
            array (
                'id' => 60,
                'descr' => 'Earth Venus',
                'created_at' => '2021-12-27 19:55:44',
                'updated_at' => '2021-12-27 19:55:44',
            ),
            60 => 
            array (
                'id' => 61,
                'descr' => 'Saturn Uranus',
                'created_at' => '2021-12-27 19:55:45',
                'updated_at' => '2021-12-27 19:55:45',
            ),
            61 => 
            array (
                'id' => 62,
                'descr' => 'Jupiter Pluto',
                'created_at' => '2021-12-27 19:55:45',
                'updated_at' => '2021-12-27 19:55:45',
            ),
            62 => 
            array (
                'id' => 63,
                'descr' => 'Earth Sun',
                'created_at' => '2021-12-27 19:55:45',
                'updated_at' => '2021-12-27 19:55:45',
            ),
            63 => 
            array (
                'id' => 64,
                'descr' => 'Venus Venus',
                'created_at' => '2021-12-27 19:55:45',
                'updated_at' => '2021-12-27 19:55:45',
            ),
            64 => 
            array (
                'id' => 65,
                'descr' => 'Pluto Saturn',
                'created_at' => '2021-12-27 19:55:45',
                'updated_at' => '2021-12-27 19:55:45',
            ),
            65 => 
            array (
                'id' => 66,
                'descr' => 'Venus Mercury',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            66 => 
            array (
                'id' => 67,
                'descr' => 'Mars Jupiter',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            67 => 
            array (
                'id' => 68,
                'descr' => 'Mercury Mercury',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            68 => 
            array (
                'id' => 69,
                'descr' => 'Mercury Neptune',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            69 => 
            array (
                'id' => 70,
                'descr' => 'Mars Uranus',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            70 => 
            array (
                'id' => 71,
                'descr' => 'Earth Saturn',
                'created_at' => '2021-12-27 19:55:46',
                'updated_at' => '2021-12-27 19:55:46',
            ),
            71 => 
            array (
                'id' => 72,
                'descr' => 'Venus Venus',
                'created_at' => '2021-12-27 19:55:47',
                'updated_at' => '2021-12-27 19:55:47',
            ),
            72 => 
            array (
                'id' => 73,
                'descr' => 'Sun Mercury',
                'created_at' => '2021-12-27 19:55:47',
                'updated_at' => '2021-12-27 19:55:47',
            ),
            73 => 
            array (
                'id' => 74,
                'descr' => 'Jupiter Pluto',
                'created_at' => '2021-12-27 19:55:47',
                'updated_at' => '2021-12-27 19:55:47',
            ),
            74 => 
            array (
                'id' => 75,
                'descr' => 'Neptune Neptune',
                'created_at' => '2021-12-27 19:55:47',
                'updated_at' => '2021-12-27 19:55:47',
            ),
            75 => 
            array (
                'id' => 76,
                'descr' => 'Sun Mercury',
                'created_at' => '2021-12-27 19:55:47',
                'updated_at' => '2021-12-27 19:55:47',
            ),
            76 => 
            array (
                'id' => 77,
                'descr' => 'Saturn Jupiter',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            77 => 
            array (
                'id' => 78,
                'descr' => 'Uranus Earth',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            78 => 
            array (
                'id' => 79,
                'descr' => 'Sun Saturn',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            79 => 
            array (
                'id' => 80,
                'descr' => 'Venus Saturn',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            80 => 
            array (
                'id' => 81,
                'descr' => 'Saturn Saturn',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            81 => 
            array (
                'id' => 82,
                'descr' => 'Earth Venus',
                'created_at' => '2021-12-27 19:55:48',
                'updated_at' => '2021-12-27 19:55:48',
            ),
            82 => 
            array (
                'id' => 83,
                'descr' => 'Venus Pluto',
                'created_at' => '2021-12-27 19:55:49',
                'updated_at' => '2021-12-27 19:55:49',
            ),
            83 => 
            array (
                'id' => 84,
                'descr' => 'Jupiter Sun',
                'created_at' => '2021-12-27 19:55:49',
                'updated_at' => '2021-12-27 19:55:49',
            ),
            84 => 
            array (
                'id' => 85,
                'descr' => 'Mars Neptune',
                'created_at' => '2021-12-27 19:55:49',
                'updated_at' => '2021-12-27 19:55:49',
            ),
            85 => 
            array (
                'id' => 86,
                'descr' => 'Saturn Earth',
                'created_at' => '2021-12-27 19:55:49',
                'updated_at' => '2021-12-27 19:55:49',
            ),
            86 => 
            array (
                'id' => 87,
                'descr' => 'Neptune Mars',
                'created_at' => '2021-12-27 19:55:49',
                'updated_at' => '2021-12-27 19:55:49',
            ),
            87 => 
            array (
                'id' => 88,
                'descr' => 'Venus Neptune',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            88 => 
            array (
                'id' => 89,
                'descr' => 'Sun Saturn',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            89 => 
            array (
                'id' => 90,
                'descr' => 'Pluto Neptune',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            90 => 
            array (
                'id' => 91,
                'descr' => 'Venus Mars',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            91 => 
            array (
                'id' => 92,
                'descr' => 'Venus Uranus',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            92 => 
            array (
                'id' => 93,
                'descr' => 'Neptune Mercury',
                'created_at' => '2021-12-27 19:55:50',
                'updated_at' => '2021-12-27 19:55:50',
            ),
            93 => 
            array (
                'id' => 94,
                'descr' => 'Venus Pluto',
                'created_at' => '2021-12-27 19:55:51',
                'updated_at' => '2021-12-27 19:55:51',
            ),
            94 => 
            array (
                'id' => 95,
                'descr' => 'Sun Uranus',
                'created_at' => '2021-12-27 19:55:51',
                'updated_at' => '2021-12-27 19:55:51',
            ),
            95 => 
            array (
                'id' => 96,
                'descr' => 'Sun Mars',
                'created_at' => '2021-12-27 19:55:51',
                'updated_at' => '2021-12-27 19:55:51',
            ),
            96 => 
            array (
                'id' => 97,
                'descr' => 'Jupiter Mars',
                'created_at' => '2021-12-27 19:55:51',
                'updated_at' => '2021-12-27 19:55:51',
            ),
            97 => 
            array (
                'id' => 98,
                'descr' => 'Pluto Neptune',
                'created_at' => '2021-12-27 19:55:51',
                'updated_at' => '2021-12-27 19:55:51',
            ),
            98 => 
            array (
                'id' => 99,
                'descr' => 'Mercury Pluto',
                'created_at' => '2021-12-27 19:55:52',
                'updated_at' => '2021-12-27 19:55:52',
            ),
            99 => 
            array (
                'id' => 100,
                'descr' => 'Venus Jupiter',
                'created_at' => '2021-12-27 19:55:52',
                'updated_at' => '2021-12-27 19:55:52',
            ),
        ));
        
        
    }
}