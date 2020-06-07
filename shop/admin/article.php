<?php
    $folder = "../private";
    $file = "../private/items";
    
    if (file_exists($folder) && file_exists($file))
    {
        $cats = unserialize(file_get_contents($file));
        echo "good";
    }
    else
    {
        echo "ERROR\n";
        exit();
    }
    print_r($_POST);

    if ($_POST["name"] && $_POST["submit3"] === "DELETE" && $cats)
    {
        foreach ($cats as $key=>$el)
        {
            if ($el["name"] == $_POST["name"])
            {
                $for_del = $key;
                break;
            }
            echo "1if";
        }
        unset($cats[$for_del]);
    }
    else if ($_POST["name"] && $_POST["cat"] && $_POST["price"] && $_POST["submit1"] === "CREATE" && $cats)
    {
        $new["name"] = $_POST["name"];
        $new["cat"] = array_diff(explode(",", trim($_POST["cat"])), array(''));
        $new["price"] = $_POST["price"];
        $cats[] = $new;
        echo "2if";
    }
    else if ($_POST["name"] && ($_POST["cat"] || $_POST["price"]) && $_POST["submit2"] === 'MODIFY' && $cats)
    {
        foreach ($cats as $key=>$el)
        {
            if ($el["name"] == $_POST["name"])
            {
                if ($_POST["cat"])
                    $cats[$key]["cat"] = array_merge($cats[$key]["cat"], array_diff(explode(",", trim($_POST["cat"])), array('')));
                if ($_POST["price"])
                    $cats[$key]["price"] = $_POST["price"];
                break;
            }
        }
        echo "3if";
    }
    echo "onlyhere";
    file_put_contents($file, serialize($cats));
    header('Location: ../admin.php');
?>

?>