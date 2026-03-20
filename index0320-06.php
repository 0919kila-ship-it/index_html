<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>ch02_06 迴圈_While.php</title>
</head>
<body>
<table border=1>
 <?php
 for($i=0;$i<=100;$i=$i+1){?>

        <tr> 
            <td style="width:200px">i
            </td>
            <td style="width:200px"><?=$i?>
            </td>
        </tr>
         
<?php } ?>
   
</table>
<hr/>
</body>
</html>