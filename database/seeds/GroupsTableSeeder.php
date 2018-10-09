<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            ["id" => 1, "name" => "役員", "slack_name" => "", ],
            ["id" => 2, "name" => "エディトリアル", "slack_name" => "", ],
            ["id" => 3, "name" => "MD", "slack_name" => "", ],
            ["id" => 4, "name" => "コーポレート", "slack_name" => "", ],
            ["id" => 5, "name" => "デザイン", "slack_name" => "", ],
            ["id" => 6, "name" => "事業開発", "slack_name" => "", ],
            ["id" => 7, "name" => "コミュニケーション", "slack_name" => "", ],
            ["id" => 8, "name" => "テクノロジー", "slack_name" => "キムプロテスト", ],
        ]);
    }
}
