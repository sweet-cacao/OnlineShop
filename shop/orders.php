<?php
session_start();
$path = "orders";
    $filelist = scandir($path);

    // if($handle = opendir($path)){
    //     while($entry = readdir($handle)){
    //         $filelist[] = $entry;
    //     }
    //     closedir($handle);
    // }
    $i = 1;
    foreach($filelist as $k){

        
        if ($k != "." && $k != "..")
        {    
            echo "<div class='itemblock_name'>ORDER ".$i."</div>";
            $arr = unserialize(file_get_contents("orders/".$k));
            $whole = 0;
            foreach ($arr as $el)
            {
                $sum = $el["price"]*$el['num'];
                $whole+=$sum;
                echo "<div class='itemblock_name'>".$el["name"]." ".$el["num"]."x"." ".$el["price"]."$ Sum: ".$sum." $</div>";
            }
            echo "<div class='itemblock_name'>","Whole:".$whole."$</div>";
            $i+=1;
        }
    }
    

?>