<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>0320_07 九九乘法表</title>       
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f7fa;
        }

        h1 {
            color: #30043b;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th {
            background-color: #5faa9d;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        /* 奇數列 */
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* 滑鼠效果 */
        td:hover {
            background-color: #ffe082;
        }

        /* 👉 你指定加的這段 */
        tbody th {
            background-color: #746ce7;
            color: white;
        }

    </style>

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