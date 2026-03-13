<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>這是我的第一支程式</title>
</head>
<body>
    <p>
    <?php echo "這是我的第一支程式php<br>\n";//這是未縮寫
    ?>
    <?= "這是我的第一支程式php(縮寫)<br>"; //這是縮寫
     ?> 

    <?= 6+6; ?> 

    <?= 
    $rr="PHP變數與應用加總"; 
    $mm=10;
    $cc=6;

/* $mm → 變數名稱
    = → 指定值
    "10" → 變數內容 */

    echo $rr.($mm+$cc);
    ?> 



</p>

<hr></hr>
</body>
</html>
