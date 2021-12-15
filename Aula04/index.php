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
        $array=[1,1,1,1,1,-5,-4,-34,-12,-13];
        $i=0;
        $a=0;
        foreach($array as $valor){
            if ($valor>=0)
               $i+=$valor; 
            else  
             $a++;
        }
        echo "quantidade de negativo $a e soma dos positivos $i";
        $arr_cidade=[
            "Uberlândia "   => 6990.97f,
            "Monte Carmelo" => 47809,
            "Patrocínio"    => 90041,
            "Coromandel"    => 27547,
            "Araguari"      => 117825
        ];
        foreach($arr_cidade as $cid => $qtde){
            echo $cid. ":". $qtde."</br>";

        }
    ?>
</body>
</html>