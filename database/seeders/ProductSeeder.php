<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'user_id' => 1,
                'name' => '香水',
                'content' => '〔グッチ フローラ〕ゴージャス ガーデニアが、優美なボトル入りのオードパルファムとして登場。太古の昔から愛され、不老不死の薬や魔術にも使用されていたと伝えられるガーデニア フラワーの、喜びに満ちたフローラルの香りを中心に構成されています。',
                'image1' => 1,
                'state' => '1',
                'price' => '9000',
                'is_selling' => 1,
            ],
            [
                'user_id' => 1,
                'name' => '指輪',
                'content' => '〔グッチ フローラ〕ゴージャス ガーデニアが、優美なボトル入りのオードパルファムとして登場。太古の昔から愛され、不老不死の薬や魔術にも使用されていたと伝えられるガーデニア フラワーの、喜びに満ちたフローラルの香りを中心に構成されています。',
                'image1' => 2,
                'state' => '1',
                'price' => '5000',
                'is_selling' => 1,
            ],
            [
                'user_id' => 1,
                'name' => 'ピアス',
                'content' => '〔グッチ フローラ〕ゴージャス ガーデニアが、優美なボトル入りのオードパルファムとして登場。太古の昔から愛され、不老不死の薬や魔術にも使用されていたと伝えられるガーデニア フラワーの、喜びに満ちたフローラルの香りを中心に構成されています。',
                'image1' => 3,
                'state' => '1',
                'price' => '5000',
                'is_selling' => 1,
            ],
            [
                'user_id' => 1,
                'name' => 'イヤリング',
                'content' => '〔グッチ フローラ〕ゴージャス ガーデニアが、優美なボトル入りのオードパルファムとして登場。太古の昔から愛され、不老不死の薬や魔術にも使用されていたと伝えられるガーデニア フラワーの、喜びに満ちたフローラルの香りを中心に構成されています。',
                'image1' => 4,
                'state' => '1',
                'price' => '5000',
                'is_selling' => 1,
            ],
              [
                'user_id' => 1,
                'name' => '香水',
                'content' => '〔グッチ フローラ〕ゴージャス ガーデニアが、優美なボトル入りのオードパルファムとして登場。太古の昔から愛され、不老不死の薬や魔術にも使用されていたと伝えられるガーデニア フラワーの、喜びに満ちたフローラルの香りを中心に構成されています。',
                'image1' => 5,
                'state' => '1',
                'price' => '9000',
                'is_selling' => 1,
            ],
        ]);
    }
}
