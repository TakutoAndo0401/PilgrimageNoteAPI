<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'index'=>1,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/EIVi2hOXYAEyylZ.jpeg',
                'title'=>'のぞき坂',
                'date'=>'2019年11月1日',
                'name'=>'アニメ:冴えない彼女の育てかたOPなど',
                'place1'=>'都電荒川線学習院下駅、東京メトロ副都心線雑司が谷駅3番出口から徒歩2分程度',
                'place2'=>'',
            ],
            [
                'index'=>2,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/saekano2.jpeg',
                'title'=>'都電荒川線学習院下駅踏切',
                'date'=>'2019年11月1日',
                'name'=>'アニメ:冴えない彼女の育てかたOP',
                'place1'=>'都電荒川線学習院下駅を降りてすぐの踏切',
                'place2'=>'',
            ],
            [
                'index'=>3,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2536.jpg',
                'title'=>'都電荒川線面影橋駅',
                'date'=>'2019年11月1日',
                'name'=>'アニメ:冴えない彼女の育てかた4話',
                'place1'=>'都電荒川線面影橋駅を降りた正面',
                'place2'=>'',
            ],
            [
                'index'=>4,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2430.jpg',
                'title'=>'京都駅',
                'date'=>'2019年5月3日',
                'name'=>'アニメ:響け! ユーフォニアム、やはり俺の青春ラブコメはまちがっている。など多数',
                'place1'=>'京都駅中央口JRホーム側改札外',
                'place2'=>'',
            ],
            [
                'index'=>5,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_6099.jpg',
                'title'=>'大吉山',
                'date'=>'2018年7月26日',
                'name'=>'アニメ:響け! ユーフォニアム1期8話',
                'place1'=>'京阪宇治線宇治駅から徒歩20分',
                'place2'=>'JR奈良線宇治駅から徒歩30分',
            ],
            [
                'index'=>6,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_4816.jpg',
                'title'=>'祇園白川',
                'date'=>'2019年4月2日',
                'name'=>'ゲーム:千恋*万花 序盤共通ルートなど多数',
                'place1'=>'京阪電車祇園四条駅から徒歩5分',
                'place2'=>'',
            ],
            [
                'index'=>7,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_6328.jpg',
                'title'=>'産寧坂（三年坂）',
                'date'=>'2018年7月26日',
                'name'=>'ゲーム:千恋*万花 常陸茉子と鮎を食べる場所など多数',
                'place1'=>'京阪電車祇園四条駅から徒歩20分',
                'place2'=>'',
            ],
            [
                'index'=>8,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_8678.jpg',
                'title'=>'花見小路通',
                'date'=>'2018年7月26日',
                'name'=>'ゲーム:千恋*万花 序盤共通ルート',
                'place1'=>'京阪電車祇園四条駅から徒歩3分',
                'place2'=>'',
            ],
            [
                'index'=>9,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_8676.jpg',
                'title'=>'七里ヶ浜駅',
                'date'=>'2019年3月5日',
                'name'=>'アニメ:青春ブタ野郎はバニーガール先輩の夢を見ない',
                'place1'=>'七里ヶ浜駅前',
                'place2'=>'',
            ],
        ]);
    }
}
