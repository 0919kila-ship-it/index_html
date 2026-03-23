<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>0323_01.html</title>    
</head>
<body>
<p>
<?php
$r=$_GET['r'];
$sum=0;
    for($i=1;$i<=$r;$i=$i+1){
        $sum=$sum+$i;
        //$sum 總數 
    }
echo $sum;
?>
</p>

<hr/>
</body>
</html>