<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP變數練習</title>
</head>

<body>

<p>

<?php

// 宣告變數
$rr = "PHP變數與應用加總:";
$mm = 10;
$cc = 6.6;
$dd = false;

// 加總
$sum = $mm + $cc;

/*  
$mm → 變數名稱 (暫時存資料的地方)
=   → 指定值
10  → 變數內容
*/

// 輸出文字
echo $rr;
echo "<br>";

// 輸出計算結果
echo "10 + 6.6 = " . $sum;
echo "<br><br>";

// 顯示變數型態與值
var_dump($dd);

?>

</p>

</body>
</html>