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
                'place1'=>'都電荒川線『学習院下』駅、東京メトロ副都心線『雑司が谷』駅3番出口から徒歩2分程度',
                'place2'=>'',
            ],
            [
                'index'=>2,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/saekano2.jpeg',
                'title'=>'都電荒川線学習院下駅踏切',
                'date'=>'2019年11月1日',
                'name'=>'アニメ:冴えない彼女の育てかたOP',
                'place1'=>'都電荒川線『学習院下』駅を降りてすぐの踏切',
                'place2'=>'',
            ],
            [
                'index'=>3,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2536.jpg',
                'title'=>'都電荒川線面影橋駅',
                'date'=>'2019年11月1日',
                'name'=>'アニメ:冴えない彼女の育てかた4話',
                'place1'=>'都電荒川線『面影橋駅』を降りた正面',
                'place2'=>'',
            ],
            [
                'index'=>4,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2430.jpg',
                'title'=>'京都駅',
                'date'=>'2019年5月3日',
                'name'=>'アニメ:響け! ユーフォニアム、やはり俺の青春ラブコメはまちがっている。など多数',
                'place1'=>'『京都』駅中央口JRホーム側改札外',
                'place2'=>'',
            ],
            [
                'index'=>5,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_6099.jpg',
                'title'=>'大吉山',
                'date'=>'2018年7月26日',
                'name'=>'アニメ:響け! ユーフォニアム1期8話',
                'place1'=>'京阪宇治線『宇治』駅から徒歩20分',
                'place2'=>'JR奈良線『宇治』駅から徒歩30分',
            ],
            [
                'index'=>6,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_4816.jpg',
                'title'=>'祇園白川',
                'date'=>'2019年4月2日',
                'name'=>'ゲーム:千恋*万花 序盤共通ルートなど多数',
                'place1'=>'京阪電車『祇園四条』駅から徒歩5分',
                'place2'=>'',
            ],
            [
                'index'=>7,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_6328.jpg',
                'title'=>'産寧坂（三年坂）',
                'date'=>'2018年7月26日',
                'name'=>'ゲーム:千恋*万花 常陸茉子と鮎を食べる場所など多数',
                'place1'=>'京阪電車『祇園四条』駅から徒歩20分',
                'place2'=>'',
            ],
            [
                'index'=>8,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_8678.jpg',
                'title'=>'花見小路通',
                'date'=>'2018年7月26日',
                'name'=>'ゲーム:千恋*万花 序盤共通ルート',
                'place1'=>'京阪電車『祇園四条』駅から徒歩3分',
                'place2'=>'',
            ],
            [
                'index'=>9,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_8676.jpg',
                'title'=>'七里ヶ浜駅',
                'date'=>'2019年3月5日',
                'name'=>'アニメ:青春ブタ野郎はバニーガール先輩の夢を見ない',
                'place1'=>'江ノ電『七里ヶ浜』駅前',
                'place2'=>'',
            ],
            [
                'index'=>10,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_4092.jpg',
                'title'=>'神奈川県立七里ガ浜高等学校',
                'date'=>'2019年3月5日',
                'name'=>'アニメ:青春ブタ野郎はバニーガール先輩の夢を見ない',
                'place1'=>'江ノ電『七里ケ浜』駅から徒歩1分',
                'place2'=>'',
            ],
            [
                'index'=>11,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2284.jpg',
                'title'=>'江の島大橋・江の島弁天橋',
                'date'=>'2019年3月5日',
                'name'=>'アニメ:青春ブタ野郎はバニーガール先輩の夢を見ない',
                'place1'=>'小田急電鉄江ノ島線『片瀬江ノ島』から徒歩8分',
                'place2'=>'江ノ電『江ノ島』駅から徒歩10分',
            ],
            [
                'index'=>12,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_2317.jpg',
                'title'=>'佐野天然温泉 湯処 「のぼり雲」',
                'date'=>'2018年5月6日',
                'name'=>'アニメ:ハイスクール・フリートOVA前編',
                'place1'=>'横須賀線『衣笠』駅からバスで約10分、佐野4丁目下車',
                'place2'=>'京急『横須賀中央』駅からバス約9分、佐野4丁目下車',
            ],
            [
                'index'=>13,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_1975.jpg',
                'title'=>'樺崎八幡宮',
                'date'=>'2018年3月25日',
                'name'=>'アニメ:ヨスガノソラ',
                'place1'=>'JR両毛線『足利駅』からタクシーで約15分',
                'place2'=>'東武鉄道伊勢崎線『足利市』駅からタクシーで約15分',
            ],
            [
                'index'=>14,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_1038.jpeg',
                'title'=>'Parc du Champ de Mars(Colmar)',
                'date'=>'2018年3月6日',
                'name'=>'アニメ:ご注文はうさぎですか?',
                'place1'=>'Colmar駅から徒歩6分',
                'place2'=>'Avenue de la République, 68000 Colmar',
            ],
            [
                'index'=>15,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_0977.jpeg',
                'title'=>'Restaurant Au Chasseur',
                'date'=>'2018年3月6日',
                'name'=>'アニメ:ご注文はうさぎですか?',
                'place1'=>'Colmar駅から徒歩17分',
                'place2'=>'4 Rue du Chasseur, 68000 Colmar',
            ],
            [
                'index'=>16,
                'image'=>'https://pilgrimage-note-images.s3-ap-northeast-1.amazonaws.com/IMG_1063.JPG',
                'title'=>'La Petite Venise',
                'date'=>'2018年3月6日',
                'name'=>'アニメ:ご注文はうさぎですか?',
                'place1'=>'Colmar駅から徒歩13分',
                'place2'=>'Quai de la Poissonnerie, 68000 Colmar',
            ],
        ]);
    }
}
