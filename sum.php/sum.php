<?php
function twice($valu) {
    echo $valu * 2;
}
echo twice(2);
echo "\n";

function sum($a, $b) {
    echo $a + $b;
}
echo sum(5, 7);
echo "\n";

$arr = array(1, 3, 5, 7, 9);
function product($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
        }
        return $result;
}
echo product($arr);
echo "\n";

function max_array($arr) {
    $max_number = $arr[0];
   foreach($arr as $a) {
       if($max_number < $a) {
           $max_number = $a;
       }
   }
   return $max_number;
}
echo max_array($arr);
echo "\n";

//strip_tags 文字列からHTMLおよびPHpタグを取り除く
$str = "<h1>タグを取り除く</h1>";
echo $str;
echo "\n";
echo strip_tags($str);
echo "\n";

//array_push 1つ以上の要素を配列の最後に追加する
$demon_slayer = ['炭治郎', '善逸', '伊之助'];
array_push($demon_slayer, 'カナヲ', '玄弥');
print_r($demon_slayer);
echo "\n";

//array_merge 配列の要素の最後にひとつまたは複数の配列を結合する
$pillar1 = ['冨岡義勇', '胡蝶しのぶ', '煉獄杏寿郎'];
$pillar2 = ['宇随天元', '時透無一郎', '甘露寺蜜璃'];
$pillar3 = ['悲鳴嶼行冥', '伊黒小芭内', '不死川実弥'];
$array = array_merge($pillar1, $pillar2, $pillar3);
print_r($array);
echo "\n";

/* time  現在のUnixタイムスタンプを返す
  mktime  日付をUnixのタイムスタンプとして取得する */
date_default_timezone_set('Asia/Tokyo');
echo '現在のタイムスタンプ:' .time();
echo "\n";
$timestamp = mktime(0, 0, 0, 7, 1, 2017);
echo '2017/7/1のタイムスタンプ：' .$timestamp;
echo "\n";

//date 日時を指定の表記にフォーマットして出力する
echo date('y/m/d');
echo "\n";
echo date('y-m-d', $timestamp);