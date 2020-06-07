<?php
        $item['name'] = 'Mozart';
        $item['cat'] = array('CLASSIC');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Vivaldi';
        $item['cat'] = array('CLASSIC');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Chaikovskii';
        $item['cat'] = array('CLASSIC');
        $item['price'] = '13';
        $arr[] = $item;

        $item['name'] = 'Daft Punk';
        $item['cat'] = array('ELECTRO');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Skrillex';
        $item['cat'] = array('ELECTRO');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Clannad';
        $item['cat'] = array('ELECTRO');
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Nirvana';
        $item['cat'] = array('ROCK');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Metallica';
        $item['cat'] = array('ROCK');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'AC/DC';
        $item['cat'] = array('ROCK');
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Kino';
        $item['cat'] = array('RUSSIAN MUSIC');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Splin';
        $item['cat'] = array('RUSSIAN MUSIC');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Leningrad';
        $item['cat'] = array('RUSSIAN MUSIC');
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Lui Armstrong';
        $item['cat'] = array('JAZZ');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Billi Holliday';
        $item['cat'] = array('JAZZ');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Sara Von';
        $item['cat'] = array('JAZZ');
        $item['price'] = '16';
        $arr[] = $item;

        $item['name'] = 'Linkin Park';
        $item['cat'] = array('ALTERNATIVE');
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Alice Cooper';
        $item['cat'] = array('ALTERNATIVE');
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Bring me the horizon';
        $item['cat'] = array('ALTERNATIVE');
        $item['price'] = '11';
        $arr[] = $item;

        $folder = "private";
        $file = "private/items";
        if (!file_exists($folder))
            mkdir($folder);
        if (!file_exists($file))
        {
            file_put_contents($file, serialize($arr));
            echo "OK";
        }

        $cat['img'] = 'img/vivaldi.jpg';
        $cat['name'] = 'CLASSIC';
        $cat['title'] = 'Vivaldi';
        $cats[] = $cat;
        $cat['img'] = 'img/electro.jpg';
        $cat['name'] = 'ELECTRO';
        $cat['title'] = 'Daft Punk';
        $cats[] = $cat;
        $cat['img'] = 'img/metallica.jpg';
        $cat['name'] = 'ROCK';
        $cat['title'] = 'Metallica';
        $cats[] = $cat;
        $cat['img'] = 'img/zoi.jpeg';
        $cat['name'] = 'RUSSIAN MUSIC';
        $cat['title'] = 'Kino';
        $cats[] = $cat;
        $cat['img'] = 'img/jazz.jpg';
        $cat['name'] = 'JAZZ';
        $cat['title'] = 'Vivaldi';
        $cats[] = $cat;
        $cat['img'] = 'img/alternative.jpg';
        $cat['name'] = 'ALTERNATIVE';
        $cat['title'] = 'Linkin Park';
        $cats[] = $cat;

        $file = "private/categories";
        
        if (!file_exists($file))
        {
            file_put_contents($file, serialize($cats));
            echo "OK";
        }
        header('Location: index.php');
?>