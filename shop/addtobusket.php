<?php
    session_start();
    // $_SESSION['user'] = "Ann";
    $_SESSION['user-logged'] = "Ann";
    if ($_SESSION['busket'])
        $items = $_SESSION['busket'];
    else
    {
        $_SESSION['busket'] = array();
        $items = array();
    }

    $user = $_SESSION['user-logged'];

    $item['name'] = $_GET['name'];
    $item['price'] = $_GET['price'];
    $item['num'] = 1;
  
    if ($user != "")
    {
        $folder = "buskets"; 
        if (!file_exists($folder))
            mkdir($folder);
        $file = $folder."/".$user;
        if (file_exists($folder) && file_exists($file))
        {
            $items = unserialize(file_get_contents($file));
        }
    }
    $flag = 0;
    foreach ($items as $k=>$el)
    {
        if ($el['name'] == $item['name'])
        {
            $flag = 1;
            $items[$k]['num'] +=1;
            break;
        }
    }
    if ($flag == 0)
        $items[] = $item;
    
    if ($user == "")
    {
        $items = $_SESSION["busket"];
        $flag = 0;
        foreach ($items as $k=>$el)
        {
            if ($el['name'] == $item['name'])
            {
                $flag = 1;
                $items[$k]['num'] +=1;
                break;
            }
        }
        if ($flag == 0)
        {   $items[] = $item;
            $_SESSION['busket'][] = $item;
        }
        else
        {
            $_SESSION['busket'] = $items;
        }
    }
    else
    {
        file_put_contents($file, serialize($items));
    }
    header('Location: basket.php')
?>