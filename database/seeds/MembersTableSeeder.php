<?php

use Illuminate\Database\Seeder;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::insert([
            ["id" => 1, "last_name" => "木村", "first_name" => "浩一朗", "last_furigana" => "キムラ", "first_furigana" => "コウイチロウ", "group_id" => 1, "slack_id" => "UAG043W2G", ],
            ["id" => 2, "last_name" => "濱崎", "first_name" => "竜太", "last_furigana" => "ハマサキ", "first_furigana" => "リュウタ", "group_id" => 1, "slack_id" => "a", ],
            ["id" => 3, "last_name" => "佐々木", "first_name" => "亮祐", "last_furigana" => "ササキ", "first_furigana" => "リョウスケ", "group_id" => 1, "slack_id" => "a", ],
            ["id" => 4, "last_name" => "廣瀬", "first_name" => "健", "last_furigana" => "ヒロセ", "first_furigana" => "タケル", "group_id" => 1, "slack_id" => "a", ],
            ["id" => 5, "last_name" => "落合", "first_name" => "めぐみ", "last_furigana" => "オチアイ", "first_furigana" => "メグミ", "group_id" => 1, "slack_id" => "a", ],
        ]);
    }
}
