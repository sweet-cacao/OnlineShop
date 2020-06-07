<?php
    session_start();
    $folder = "private";
    $file = "private/categories";
    $cats = [];
    if (file_exists($folder) && file_exists($file))
    {
        $op_file = fopen($file, 'r+');
        {
            if (flock($op_file, LOCK_SH))
            {
                $cats = unserialize(file_get_contents($file));
            }
        }
        fclose($op_file);
    }
    foreach ($cats as $el)
    {
        echo "<div class='imgblock'>
        <img src='".$el['img']."'"." title=".$el['title'].">
        <span><a href ='", "items.php?cat=".$el['name']."'>".$el['name']."</a></span>
        </div>";
    }
?>