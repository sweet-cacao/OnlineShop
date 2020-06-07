<?php
    $folder = "../private";
    $file = "../private/categories";
    
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
    else if ($_POST["name"] && $_POST["title"] && $_POST["img"] && $_POST["submit1"] === "CREATE" && $cats)
    {
        $new["name"] = $_POST["name"];
        $new["title"] = $_POST["title"];
        $new["img"] = $_POST["img"];
        $cats[] = $new;
        echo "2if";
    }
    else if ($_POST["name"] && ($_POST["title"] || $_POST["img"]) && $_POST["submit2"] === 'MODIFY' && $cats)
    {
        foreach ($cats as $key=>$el)
        {
            if ($el["name"] == $_POST["name"])
            {
                if ($_POST["title"])
                    $cats[$key]["title"] = $_POST["title"];
                if ($_POST["img"])
                    $cats[$key]["img"] = $_POST["img"];
                break;
            }
        }
        echo "3if";
    }
    echo "onlyhere";
    file_put_contents($file, serialize($cats));
    header('Location: ../admin.php');
?>