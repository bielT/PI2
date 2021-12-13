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
     
        $arr_cidade=[
            "Uberlândia "   => 699097,
            "Monte Carmelo" => 47809,
            "Patrocínio"    => 90041,
            "Coromandel"    => 27547,
            "Araguari"      => 117825000
        ];
        asort($arr_cidade);
        $ate90=[];
        $ate500=[];
        $mais500=[];
        foreach($arr_cidade as $cid => $qtde){
            if($qtde<=90000){
                $ate90[$cid]=$qtde;
            }else if($qtde<=500000){
                $ate500[$cid]=$qtde;
            }else{
                $mais500[$cid]=$qtde;
            }

        }
        echo "até 90.000<br/>";
        foreach($ate90 as $cid => $qtde){
            echo $cid. ":". $qtde."</br>";

        }
        echo "até 500.000<br/>";
        foreach($ate500 as $cid => $qtde){
            echo $cid. ":". $qtde."</br>";

        }
        echo "mais 500.000<br/>";
        foreach($mais500 as $cid => $qtde){
            echo $cid. ":". $qtde."</br>";

        }
        function numero_n($ar1){
            for ($i=0; $i < $ar1; $i++) { 
                for ($n=0; $n < $i+1; $n++) { 
                    echo "$n ";
                } 
                echo "<br/>";
            }
        }
        numero_n(12);
    ?>

        <select name="estado" id="UF">
            <?php
            $est=[
                "Goias"         =>"GO",
                "Minas Gerais"  =>"MG",
                "São Paulo"     =>"SP",
                "Rio de Janeiro"=>"RJ",
                "Bahia"         =>"BA"
            ];
            
            foreach($est as $estado => $sig){
                echo "<option value='$estado'> $sig </option>";
    
            }
            

            ?>
            <option value=""></option>
        </select>
    </form>
</body>
</html>