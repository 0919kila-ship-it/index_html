<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$score=$_POST['score'];

if($score>=100){
    $result="學期成績超高標";
    $color="purple";
}
elseif($score>=80){
    $result="學期成績高標";
    $color="green";
}
elseif($score>=60){
    $result="學期成績中標";
    $color="orange";
}
else{
    $result="學期成績低標";
    $color="red";
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>

<table border="1" style="border-collapse:collapse; text-align:center;">
    <tr style="background-color:#ddd;">
        <th style="width:150px;">項目</th>
        <th style="width:200px;">內容</th>
    </tr>
    <tr>
        <td>學號</td>
        <td><?=$sid?></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?=$sname?></td>
    </tr>
    <tr>
        <td>成績</td>
        <td><?=$score?></td>
    </tr>
    <tr>
        <td>評語</td>
        <td style="color:<?=$color?>; font-weight:bold;">
            <?=$result?>
        </td>
    </tr>
</table>

</body>
</html>