<?php
    $cat['img'] = 'vivaldi.jpg';
    $cat['name'] = 'CLASSIC';
    $cat['title'] = 'Vivaldi';
    $cats[] = $cat;
    $cat['img'] = 'electro.jpg';
    $cat['name'] = 'ELECTRO';
    $cat['title'] = 'Daft Punk';
    $cats[] = $cat;
    $cat['img'] = 'metallica.jpg';
    $cat['name'] = 'ROCK';
    $cat['title'] = 'Metallica';
    $cats[] = $cat;
    $cat['img'] = 'zoi.jpeg';
    $cat['name'] = 'Russian Music';
    $cat['title'] = 'Kino';
    $cats[] = $cat;
    $cat['img'] = 'jazz.jpg';
    $cat['name'] = 'JAZZ';
    $cat['title'] = 'Vivaldi';
    $cats[] = $cat;
    $cat['img'] = 'alternative.jpg';
    $cat['name'] = 'ALTERNATIVE';
    $cat['title'] = 'Linkin Park';
    $cats[] = $cat;
    foreach ($cats as $el)
    {
        echo "<div class='imgblock'>
        <img src='img/".$el['img']."'"." title=".$el['title'].">
        <span><a href ='", "items.php?cat=".$el['name']."'>".$el['name']."</a></span>
        </div>";
    }
?>