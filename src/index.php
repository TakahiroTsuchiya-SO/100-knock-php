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
 $char = 'stressed';
 $answer = strrev($char);
 echo $answer, "\n";

 // 1
 $input = 'パタトクカシーー';
 $answer2 = '';
 foreach ([1, 3, 5, 7] as $n) {
     $answer2 .= mb_substr($input, $n - 1, 1);
 }
 echo $answer2, "\n";

?>
</body>
</html>