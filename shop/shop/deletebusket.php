<?php
    session_start();
    // $user = "Ann";
    $user = $_SESSION["user-logged"];
    $items = [];
    if ($_GET['act'] == "deleteall")
    {
        unlink("buskets/".$user);
        $_SESSION['busket'] = array();
    }
    if ($user != "")
    {
        if ($_GET['act'] == "delete1")
        {
            if (file_exists("buskets/".$user))
                $items = unserialize(file_get_contents("buskets/".$user));
            $key = -1;
            foreach($items as $k=>$el)
            {
                if ($el['name'] == $_GET['name'])
                {
                    $items[$k]['num']-=1;
                    $key = $k;
                }
            }
            if ($key != -1 && $items[$key]['num'] == 0)
                {
                    unset($items[$key]);
                }
                
                file_put_contents("buskets/".$user, serialize($items));
        }
    }
    else
    {
        $items = $_SESSION['busket'];
        if ($_GET['act'] == "delete1")
        {
            $key = -1;
            foreach($items as $k=>$el)
            {
                if ($el['name'] == $_GET['name'])
                {
                    $items[$k]['num']-=1;
                    $key = $k;
                }
            }
            if ($key != -1 && $items[$key]['num'] <= 0)
                {
                    unset($items[$key]);
                }
        $_SESSION['busket'] = array();
        $_SESSION['busket'] = array_merge($_SESSION['busket'], $items);
        }
        
    }
    header('Location: basket.php')
?>