<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            ["id" => 1, "name" => "テクノロジー", "slack_name" => "", ],
            ["id" => 2, "name" => "デザイン", "slack_name" => "", ],
            ["id" => 3, "name" => "事業開発", "slack_name" => "", ],
            ["id" => 4, "name" => "コーポレート", "slack_name" => "", ],
            ["id" => 5, "name" => "コミュニケーション", "slack_name" => "", ],
            ["id" => 6, "name" => "MD", "slack_name" => "", ],
            ["id" => 7, "name" => "エディトリアル", "slack_name" => "", ],
        ]);

        User::insert([
            ["id" => 1, "last_name" => "木村", "first_name" => "浩一朗", "last_furigana" => "キムラ", "first_furigana" => "コウイチロウ", "group_id" => 1, "slack_name" => "Kimurin", ],
            ["id" => 2, "last_name" => "濱崎", "first_name" => "竜太", "last_furigana" => "ハマサキ", "first_furigana" => "リュウタ", "group_id" => 1, "slack_name" => "", ],
            ["id" => 3, "last_name" => "佐々木", "first_name" => "亮祐", "last_furigana" => "ササキ", "first_furigana" => "リョウスケ", "group_id" => 1, "slack_name" => "", ],
            ["id" => 4, "last_name" => "廣瀬", "first_name" => "健", "last_furigana" => "ヒロセ", "first_furigana" => "タケル", "group_id" => 1, "slack_name" => "", ],
            ["id" => 5, "last_name" => "落合", "first_name" => "めぐみ", "last_furigana" => "オチアイ", "first_furigana" => "メグミ", "group_id" => 1, "slack_name" => "", ],
        ]);
    }
}
