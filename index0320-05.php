<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>ch02_06-if.php</title>
</head>
<body>

<p>
<?php
$A=80;
$B="20";
$c=($A+$B)/2;

if($A==$B )
    {
    echo"條件成立";
    }
else
    {
    echo"條件不成立";
    }


// == 2個等於只要數字一樣就會成立
// === 3個等於要型態相同才會成立
// if 如果條件成立，就做這件事
// else 如果不成立，就做另一件事
// echo 把資料結果顯示出來（輸出到畫面）
?>
</p>

<hr/>
</body>
</html>