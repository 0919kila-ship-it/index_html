<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>0320_07 九九乘法表</title>    
</head>
<body>
    <h1>九九乘法表</h1>
<table border=5px,>
    <thead>
        <tr>
            <th>x</th>
        <?php for($j = 1 ;$j <=9; $j++): ?>
            <th><?= $j ?></th> 
        <?php endfor; ?>   
        </tr>
    </thead>     
    <tbody>
        <?php for($i = 1 ; $i <= 9; $i++): ?>
        <tr>    
            <th><?= $i ?></th> 
            <?php for($j = 1; $j <= 9; $j++): ?>
            <td><?= $i ?>x<?= $j ?>=<?= $i * $j  ?></td> 
            <?php endfor; ?>       
        </tr>  
        <?php endfor; ?>
    </tbody>
    </table>  
<hr/>
</body>
</html>