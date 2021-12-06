<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Gabriel";
        define('MAX',10);
        echo "<h1>Hello Mundo, $nome ".MAX."</h1>";
        for($i=100;$i >=50; $i--){
        echo "<li>"."$i"."</li>";
        }       
    ?>
</body>
</html>