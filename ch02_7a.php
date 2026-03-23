<?php

//運算子
$chinese=$_GET['c'];
$english=$_GET['e'];
$math=$_GET['m'];

$sum = $chinese+$english+$math;
$avg = $sum/3;

 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_7a.php</title>
</head>
<body>
<table border=1>
<tr>
    <td style="width:200px;">國文
    </td>
    <td style="width:200px;"><?=$chinese?>
    </td>       
</tr>
<tr>
    <td style="width:200px;">英文
    </td>
    <td style="width:200px;"><?=$english?>
    </td>       
</tr>
<tr>
    <td style="width:200px;">數學
    </td>
    <td style="width:200px;"><?=$math?>
    </td>       
</tr>
<tr>
    <td style="width:200px;">總分
    </td>
    <td style="width:200px;"><?=$sum?>
    </td>       
</tr>
<tr>
    <td style="width:200px;">平均
    </td>
    <td style="width:200px;"><?=$avg?>
    </td>       
</tr>
</table>

<hr/>


</body>
</html>