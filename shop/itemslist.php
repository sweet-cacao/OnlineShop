<?php
    $folder = "private";
    $file = "private/items";
    // $arr = [];
    if (file_exists($folder) && file_exists($file))
    {
        $op_file = fopen($file, 'r+');
        {
            if (flock($op_file, LOCK_SH))
            {
                $arr = unserialize(file_get_contents($file));
            }
        }
        fclose($file);
    }
    $req_cat = $_GET['cat'];
    foreach ($arr as $el)
    {
        if (strtoupper($req_cat) == strtoupper($el['cat']))
        {
                echo "<div class='itemblock'><br /><br />".
                "<span>"
                .$el['name'].
                "</span>".
                "<br /><br />".
                "<span>"
                .$el['price'].
                "$</span>".
                "<br /><br />".
                "<span>".
                "<a href='#'>Add to cart</a>".
                "</span>".
                "</div><br />";
        }
    }
?>