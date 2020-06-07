<?php
        $item['name'] = 'Mozart';
        $item['cat'] = 'CLASSIC';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Vivaldi';
        $item['cat'] = 'CLASSIC';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Chaikovskii';
        $item['cat'] = 'CLASSIC';
        $item['price'] = '13';
        $arr[] = $item;

        $item['name'] = 'Daft Punk';
        $item['cat'] = 'ELECTRO';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Skrillex';
        $item['cat'] = 'ELECTRO';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Clannad';
        $item['cat'] = 'ELECTRO';
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Nirvana';
        $item['cat'] = 'ROCK';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Metallica';
        $item['cat'] = 'ROCK';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'AC/DC';
        $item['cat'] = 'ROCK';
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Kino';
        $item['cat'] = 'RUSSIAN MUSIC';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Splin';
        $item['cat'] = 'RUSSIAN MUSIC';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Leningrad';
        $item['cat'] = 'RUSSIAN MUSIC';
        $item['price'] = '11';
        $arr[] = $item;

        $item['name'] = 'Lui Armstrong';
        $item['cat'] = 'JAZZ';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Billi Holliday';
        $item['cat'] = 'JAZZ';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Sara Von';
        $item['cat'] = 'JAZZ';
        $item['price'] = '16';
        $arr[] = $item;

        $item['name'] = 'Linkin Park';
        $item['cat'] = 'ALTERNATIVE';
        $item['price'] = '10';
        $arr[] = $item;
        $item['name'] = 'Alice Cooper';
        $item['cat'] = 'ALTERNATIVE';
        $item['price'] = '12';
        $arr[] = $item;
        $item['name'] = 'Bring me the horizon';
        $item['cat'] = 'ALTERNATIVE';
        $item['price'] = '11';
		$arr[] = $item;
		$admin['login'] = 'admin';
		$admin['passwd'] = hash('whirlpool', 'ya_admin');

        $folder = "private";
		$file = "private/items";
		$file_passwd = "./private/passwd";
        if (!file_exists($folder))
            mkdir($folder);
        if (!file_exists($file))
        {
            file_put_contents($file, serialize($arr));
            echo "OK";
        }
		if (!file_exists($file_passwd)) {
			file_put_contents($file_passwd, serialize($admin));
		}
        header('Location: index.php');
?>