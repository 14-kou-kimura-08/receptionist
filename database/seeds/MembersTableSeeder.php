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
            ["id" => 1, "last_name" => "青木", "first_name" => "耕平", "last_furigana" => "アオキ", "first_furigana" => "コウヘイ", "group_id" => 1, "slack_id" => "U1C7Y6Y8Y", ],
            ["id" => 2, "last_name" => "佐藤", "first_name" => "友子", "last_furigana" => "サトウ", "first_furigana" => "トモコ", "group_id" => 1, "slack_id" => "U274VUZP0", ],
            ["id" => 3, "last_name" => "青木", "first_name" => "好能", "last_furigana" => "アオキ", "first_furigana" => "ヨシノ", "group_id" => 2, "slack_id" => "U2P7RH9C0", ],
            ["id" => 4, "last_name" => "齋藤", "first_name" => "あゆみ", "last_furigana" => "サイトウ", "first_furigana" => "アユミ", "group_id" => 2, "slack_id" => "U2P75RD51", ],
            ["id" => 5, "last_name" => "上山", "first_name" => "真紀", "last_furigana" => "ウエヤマ", "first_furigana" => "マキ", "group_id" => 7, "slack_id" => "U27GRFSJU", ],
            ["id" => 6, "last_name" => "田中", "first_name" => "里実", "last_furigana" => "タナカ", "first_furigana" => "サトミ", "group_id" => 2, "slack_id" => "U2KVDFX7A", ],
            ["id" => 7, "last_name" => "佐藤", "first_name" => "崇", "last_furigana" => "サトウ", "first_furigana" => "タカシ", "group_id" => 5, "slack_id" => "U2BSKSZM3", ],
            ["id" => 8, "last_name" => "加藤", "first_name" => "沙耶花", "last_furigana" => "カトウ", "first_furigana" => "サヤカ", "group_id" => 3, "slack_id" => "U2NNWB5FB", ],
            ["id" => 9, "last_name" => "津田", "first_name" => "麻利江", "last_furigana" => "ツダ", "first_furigana" => "マリエ", "group_id" => 2, "slack_id" => "U27GP0U1J", ],
            ["id" => 10, "last_name" => "松田", "first_name" => "美樹", "last_furigana" => "マツダ", "first_furigana" => "ミキ", "group_id" => 2, "slack_id" => "U2P9AJ5A6", ],
            ["id" => 11, "last_name" => "渡邉", "first_name" => "真友子", "last_furigana" => "ワタナベ", "first_furigana" => "マユコ", "group_id" => 7, "slack_id" => "U2P9UC3PT", ],
            ["id" => 12, "last_name" => "二本柳", "first_name" => "千尋", "last_furigana" => "ニホンヤナギ", "first_furigana" => "チヒロ", "group_id" => 2, "slack_id" => "U2RJZHN9Z", ],
            ["id" => 13, "last_name" => "佐藤", "first_name" => "奈々瀬", "last_furigana" => "サトウ", "first_furigana" => "ナナセ", "group_id" => 5, "slack_id" => "U2BSN6SR2", ],
            ["id" => 14, "last_name" => "濱﨑", "first_name" => "竜太", "last_furigana" => "ハマサキ", "first_furigana" => "リュウタ", "group_id" => 8, "slack_id" => "U09GEATR6", ],
            ["id" => 15, "last_name" => "西野", "first_name" => "沙織", "last_furigana" => "ニシノ", "first_furigana" => "サオリ", "group_id" => 7, "slack_id" => "U2NNBFHAQ", ],
            ["id" => 16, "last_name" => "竹内", "first_name" => "敦子", "last_furigana" => "タケウチ", "first_furigana" => "アツコ", "group_id" => 3, "slack_id" => "U2PGBQKQS", ],
            ["id" => 17, "last_name" => "塩川", "first_name" => "由紀", "last_furigana" => "シオカワ", "first_furigana" => "ユキ", "group_id" => 2, "slack_id" => "U2NNDJ1BN", ],
            ["id" => 18, "last_name" => "高山", "first_name" => "達哉", "last_furigana" => "タカヤマ", "first_furigana" => "タツヤ", "group_id" => 6, "slack_id" => "U27H0V469", ],
            ["id" => 19, "last_name" => "山根", "first_name" => "一輝", "last_furigana" => "ヤマネ", "first_furigana" => "カズキ", "group_id" => 3, "slack_id" => "U2P87GSHJ", ],
            ["id" => 20, "last_name" => "齋藤", "first_name" => "萌", "last_furigana" => "サイトウ", "first_furigana" => "メグミ", "group_id" => 2, "slack_id" => "U2P85D87J", ],
            ["id" => 21, "last_name" => "波々伯部", "first_name" => "幸", "last_furigana" => "ホホカベ", "first_furigana" => "ミユキ", "group_id" => 5, "slack_id" => "U2BRA9VCK", ],
            ["id" => 22, "last_name" => "岡本", "first_name" => "真琴", "last_furigana" => "オカモト", "first_furigana" => "マコト", "group_id" => 2, "slack_id" => "U2P8VRKFY", ],
            ["id" => 23, "last_name" => "中川", "first_name" => "杏子", "last_furigana" => "ナカガワ", "first_furigana" => "キョウコ", "group_id" => 7, "slack_id" => "U2P8RDZJT", ],
            ["id" => 24, "last_name" => "壽山", "first_name" => "華", "last_furigana" => "スヤマ", "first_furigana" => "ハナ", "group_id" => 2, "slack_id" => "U2Q0GSDQB", ],
            ["id" => 25, "last_name" => "筒井", "first_name" => "あい子", "last_furigana" => "ツツイ", "first_furigana" => "アイコ", "group_id" => 4, "slack_id" => "U2GC1CZ7S", ],
            ["id" => 26, "last_name" => "瀬田", "first_name" => "周一郎", "last_furigana" => "セタ", "first_furigana" => "シュウイチロウ", "group_id" => 4, "slack_id" => "U2GC56WLD", ],
            ["id" => 27, "last_name" => "佐藤", "first_name" => "明世", "last_furigana" => "サトウ", "first_furigana" => "アキヨ", "group_id" => 3, "slack_id" => "U2NNHQ5AA", ],
            ["id" => 28, "last_name" => "中村", "first_name" => "静久朗", "last_furigana" => "ナカムラ", "first_furigana" => "セイクロウ", "group_id" => 6, "slack_id" => "U2NNYF77C", ],
            ["id" => 29, "last_name" => "奥村", "first_name" => "薫子", "last_furigana" => "オクムラ", "first_furigana" => "カオルコ", "group_id" => 2, "slack_id" => "U3Z5DHEBD", ],
            ["id" => 30, "last_name" => "鈴木", "first_name" => "希美", "last_furigana" => "スズキ", "first_furigana" => "ノゾミ", "group_id" => 5, "slack_id" => "U4BUMKGUU", ],
            ["id" => 31, "last_name" => "高松", "first_name" => "宏美", "last_furigana" => "タカマツ", "first_furigana" => "ヒロミ", "group_id" => 6, "slack_id" => "U4B6P9JC9", ],
            ["id" => 32, "last_name" => "斉木", "first_name" => "菜穂子", "last_furigana" => "サイキ", "first_furigana" => "ナオコ", "group_id" => 2, "slack_id" => "U4B6P8GQH", ],
            ["id" => 33, "last_name" => "望月", "first_name" => "理紗", "last_furigana" => "モチヅキ", "first_furigana" => "リサ", "group_id" => 7, "slack_id" => "U4WMCQHS7", ],
            ["id" => 34, "last_name" => "郡", "first_name" => "智香", "last_furigana" => "コオリ", "first_furigana" => "トモカ", "group_id" => 3, "slack_id" => "U566KTJHX", ],
            ["id" => 35, "last_name" => "松浦", "first_name" => "摩耶", "last_furigana" => "マツウラ", "first_furigana" => "マヤ", "group_id" => 2, "slack_id" => "U5M0N0X9T", ],
            ["id" => 36, "last_name" => "今野", "first_name" => "奈津子", "last_furigana" => "コンノ", "first_furigana" => "ナツコ", "group_id" => 7, "slack_id" => "U62RKMMUK", ],
            ["id" => 37, "last_name" => "佐々木", "first_name" => "亮祐", "last_furigana" => "ササキ", "first_furigana" => "リョウスケ", "group_id" => 8, "slack_id" => "U7BRXBRFX", ],
            ["id" => 38, "last_name" => "小林", "first_name" => "ひとみ", "last_furigana" => "コバヤシ", "first_furigana" => "ヒトミ", "group_id" => 2, "slack_id" => "U7SC9M40G", ],
            ["id" => 39, "last_name" => "廣瀬", "first_name" => "健", "last_furigana" => "ヒロセ", "first_furigana" => "タケル", "group_id" => 8, "slack_id" => "U896RLJ4F", ],
            ["id" => 40, "last_name" => "石井", "first_name" => "和美", "last_furigana" => "イシイ", "first_furigana" => "カズミ", "group_id" => 7, "slack_id" => "U8PG1N2TZ", ],
            ["id" => 41, "last_name" => "森下", "first_name" => "暁里", "last_furigana" => "モリシタ", "first_furigana" => "アカリ", "group_id" => 3, "slack_id" => "U8MUCHNM7", ],
            ["id" => 42, "last_name" => "市原", "first_name" => "朋子", "last_furigana" => "イチハラ", "first_furigana" => "トモコ", "group_id" => 7, "slack_id" => "U8PA3251C", ],
            ["id" => 43, "last_name" => "星野", "first_name" => "綾佳", "last_furigana" => "ホシノ", "first_furigana" => "アヤカ", "group_id" => 6, "slack_id" => "U9GLKFVHA", ],
            ["id" => 44, "last_name" => "南澤", "first_name" => "悠佳", "last_furigana" => "ナンザワ", "first_furigana" => "ハルカ", "group_id" => 6, "slack_id" => "UA0AG6SKG", ],
            ["id" => 45, "last_name" => "木村", "first_name" => "浩一朗", "last_furigana" => "キムラ", "first_furigana" => "コウイチロウ", "group_id" => 8, "slack_id" => "UAG043W2G", ],
            ["id" => 46, "last_name" => "下平", "first_name" => "未佳", "last_furigana" => "シモヒラ", "first_furigana" => "ミカ", "group_id" => 3, "slack_id" => "UAG6TSG8J", ],
            ["id" => 47, "last_name" => "中居", "first_name" => "美奈", "last_furigana" => "ナカイ", "first_furigana" => "ミナ", "group_id" => 3, "slack_id" => "UAG6TUKHQ", ],
            ["id" => 48, "last_name" => "兵働", "first_name" => "佳子", "last_furigana" => "ヒョウドウ", "first_furigana" => "ヨシコ", "group_id" => 4, "slack_id" => "UAZ8G8ABT", ],
            ["id" => 49, "last_name" => "糸井", "first_name" => "茜", "last_furigana" => "イトイ", "first_furigana" => "アカネ", "group_id" => 2, "slack_id" => "UBJ8CT0RM", ],
            ["id" => 50, "last_name" => "市川", "first_name" => "瑠美", "last_furigana" => "イチカワ", "first_furigana" => "ルミ", "group_id" => 3, "slack_id" => "UBJ46B094", ],
            ["id" => 51, "last_name" => "石谷", "first_name" => "遥奈", "last_furigana" => "イシタニ", "first_furigana" => "ハルナ", "group_id" => 3, "slack_id" => "UBGV7NF44", ],
            ["id" => 52, "last_name" => "栗村", "first_name" => "誠", "last_furigana" => "クリムラ", "first_furigana" => "セイ", "group_id" => 2, "slack_id" => "UBGLGR7U1", ],
            ["id" => 53, "last_name" => "田中", "first_name" => "理乃", "last_furigana" => "タナカ", "first_furigana" => "リノ", "group_id" => 2, "slack_id" => "UBGLDG6F3", ],
            ["id" => 54, "last_name" => "松井", "first_name" => "幸江", "last_furigana" => "マツイ", "first_furigana" => "ユキエ", "group_id" => 4, "slack_id" => "U98155M2P", ],
            ["id" => 55, "last_name" => "遠藤", "first_name" => "茜", "last_furigana" => "エンドウ", "first_furigana" => "アカネ", "group_id" => 8, "slack_id" => "UD4BW3MJR", ],
            ["id" => 56, "last_name" => "Nyi", "first_name" => "Nyi Phyo", "last_furigana" => "ニー", "first_furigana" => "ニーピョー", "group_id" => 8, "slack_id" => "UD3J3QG0H", ],
        ]);
    }
}
