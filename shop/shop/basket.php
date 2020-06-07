<?php
session_start();
require("header.php");
?>

<main>
	<div>
    <div class = "itemblock_name">CART
    </div>
    <?php
        session_start();
        // $_SESSION['user-logged'] = "Ann";
        // $user = "Ann";
        // $user = "";
        $user = $_SESSION["user-logged"];
        // $user = $_SESSION['user'];
        if ($user == "")
        {
            if ($_SESSION['busket'])
                $items = $_SESSION['busket'];
            else
            {
                echo "<span class = 'itemblock_name'>Your basket is empty</span>";
                exit();
            }
        }
        else
        {
            $folder = "buskets"; 
            $file = $folder."/".$user;
            if (file_exists($folder) && file_exists($file))
            {
                $items = unserialize(file_get_contents($file));
                if (!$items)
                {
                    echo "<span class = 'itemblock_name'>Your basket is empty</span>";
                exit();
                }

            }
            else
            {
                echo "<span class = 'itemblock_name'>Your basket is empty</span>";
                exit();
            }
        }
        $whole = 0;
        foreach ($items as $elem)
        {
                    
            $sum = $elem['price']*$elem['num'];
            $whole+=$sum;
            echo "<div class='itemblock'><br /><br />".
            "<span>".$elem['name']."</span>".
            "<br /><br />".
            "<span>".$elem['price']."$</span>".
            "<br /><br />".
            "<span>".$elem['num']."x</span>".
            "<br /><br />".
            "<span>SUM: ".$sum."</span>".
            "<br /><br />".
            "<span><a href='deletebusket.php?name=".$elem['name']."&act=delete1'>Delete</a></span>".
            "<br /><br />".
            "</span>".
            "</div><br />";
        }
        if ($whole != 0)
        {
            echo "<div class='itemblock_name'>Whole: ".$whole."$ <a href='buy.php' class='form_button'>BUY </a></div>
            <div class = 'itemblock_name'><a style='text-align: right;'href='deletebusket.php?act=deleteall'>EMPTY CART</a></div>
            </div>";
        }
    ?>
   
</main>
<?php require("footer.php"); ?>