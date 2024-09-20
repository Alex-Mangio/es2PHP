<?php
echo "<html>
    <body>
        <h1 style=color:red>ESERCIZIO 2 PHP</h1>";
        $arrNumRand = array();
        $min = 1000;
        $max = 0;
        $media = 0;
        $somma = 0;
        $conta = 0;
        $arrNumRandPari = array("p1" => null, "p2"=> null,"p3"=> null,"p4"=> null,"p5"=> null,"p6"=> null,"p7"=> null,"p8"=> null,"p9"=> null,"p10"=> null);
        $index = "";
        for($i = 0; $i < 10; $i++){
            $arrNumRand[$i] = rand(1,100);
            echo"<p>Numero casuale: ".$arrNumRand[$i]."</p>";
            if($arrNumRand[$i] < $min){
                $min = $arrNumRand[$i];
            }
            if($arrNumRand[$i] > $max){
                $max = $arrNumRand[$i];
            }  
        }
        echo"<p>Il numero maggiore e': $max</p>";  
        echo"<p>Il numero minore e': $min</p>";   
        echo"<p>Array stampato al contrario: ".implode(', ', array_reverse($arrNumRand))."</p>";
        foreach($arrNumRand as $id => $numPari){
            if($numPari % 2 == 0){
                $arrNumRandPari[$id] = $numPari;
                $index = "p".$id;
                echo"<p><tr><td>$index</td></tr> <tr><td>$arrNumRandPari[$id]</td></tr></p>";
            }
        }
    echo "</body>
    </html>";
?>