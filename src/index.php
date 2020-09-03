<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP100本ノック</title>
</head>
<body>
<?php
header('Content-Type: text/html; charset=UTF-8');
ini_set("display_errors", 1);
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");

// 0
$str = 'stressed';
echo strrev($str), "<br />";

 // 1
 $char1 = 'パタトクカシーー';
 $answer1 = '';
 foreach ([1, 3, 5, 7] as $n) {
     $answer1 .= mb_substr($char1, $n - 1, 1);
 }
 echo $answer1, "<br />";

//  2
 $char2 = 'パトカー';
 $input2 = 'タクシー';
 $answer2 = '';
 for ($i=0; $i<mb_strlen($char2);++$i){
     $answer2 .= mb_substr($char2, $i, 1);
     $answer2 .= mb_substr($input2, $i, 1);
 }
 echo $answer2, "<br />";

//  3-1
$sentence3 = 'Now I need a drink, alcoholic of course, after the heavy lectures involving quantum mechanics.';
$words3 = str_word_count($sentence3, 1);
$answer3 = array_map('strlen', $words3);
echo implode(',', $answer3), "<br />";

//  3-2
$str2 = 'Now I need a drink, alcoholic of course, after the heavy lectures involving quantum mechanics.';
$arr = explode(' ', str_replace([',', '.'], '', $str2));
$result = [];
foreach ($arr as $v) {
    $result[] = mb_strlen($v);
}
print_r($result);

?>
</body>
</html>