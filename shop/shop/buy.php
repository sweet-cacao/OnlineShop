<?php
require("header.php");
?>

<main>
<div>
    <?php
        session_start();
       
        if ($_SESSION['user-logged'] == "")
        {
            echo "<span class = 'itemblock_name'>Please <a href='#'>login</a> or <a href='#'>register</a></span>";
            exit();
        }
        else
        {
            mkdir("orders");
            
            copy("buskets/".$_SESSION['user-logged'], "orders/".uniqid());
            unlink("buskets/".$_SESSION['user-logged']);
            echo "<span class = 'itemblock_name'>You successfully made the order!</span>";
            exit();
        }

    ?>
</div>
</main>
<?php require("footer.php"); ?>