<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'filename' => 'sample1.jpg',
            ],
            [
                'filename' => 'sample2.jpg',
            ],
            [
                'filename' => 'sample3.jpg',
            ],
            [
                'filename' => 'sample4.jpg',
            ],
            [
                'filename' => 'sample5.jpg',
            ],
            [
                'filename' => 'sample6.jpg',
            ]]);
    }
}