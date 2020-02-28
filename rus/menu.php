<link href="/style/css/menustyle.css" rel="stylesheet" type="text/css" media="screen">
﻿<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet"> 
<?php if ((isset($page)) and ($page == 'home')) { ?>
	<h1 class="logo" style="visibility: visible">Елена Кириллова</h1>
<?php } else { ?>
	<h1 class="logo">Елена Кириллова</h1>
<?php } ?>
<div class="mobile_menu">
<nav>
    <!--<h1 class="logo">Елена Кириллова</h1>-->
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" style="opacity: 0;"/>
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>


        <ul class="topmenu">

            <?php if ((isset($page)) and ($page == 'home')) { ?>
                <li><a href="/rus/home.php" style='color: #c0a97a'>Главная</a></li>
            <?php } else { ?>
                <li><a href="/rus/home.php">Главная</a></li><?php } ?>

            <?php if ((isset($page)) and ($page == 'aboutme')) { ?>
                <li><a href="/rus/aboutme.php" style='color: #c0a97a'>Обо мне</a></li>
            <?php } else { ?>
                <li><a href="/rus/aboutme.php">Обо мне</a></li><?php } ?>

            <?php if ((isset($page)) and ($page == 'portfolio')) { ?>
                <li><a href="/rus/portfolio.php" style='color: #c0a97a'>Портфолио</a>
                <?php } else { ?>
                <li><a href="/rus/portfolio.php">Портфолио</a><?php } ?>

                <ul class="submenu">
                    <li><a href="/rus/portfolio/mosaicpictures.php">Картины</a></li>
                    <li><a href="/rus/portfolio/volumetricmosaic.php">Объёмная мозаика</a></li>
                    <li><a href="/rus/portfolio/figurines.php">Статуэтки</a></li>
                    <li><a href="/rus/portfolio/furniture.php">Мебель</a></li>
                    <li><a href="/rus/portfolio/decorationandclock.php">Декор, часы</a></li>
                </ul>
            </li>
            
            <?php if ((isset($page)) and ($page == 'masterclass')) { ?>
                <li><a href="/rus/masterclass.php" style='color: #c0a97a'>Мастер-классы</a></li>
            <?php } else { ?>
                <li><a href="/rus/masterclass.php">Мастер-классы</a></li><?php } ?>
                
            <?php if ((isset($page)) and ($page == 'exhibitions')) { ?>
                <li><a href="/rus/exhibitions.php" style='color: #c0a97a'>Выставки</a></li>
            <?php } else { ?>
                <li><a href="/rus/exhibitions.php">Выставки</a></li><?php } ?>
            
            <?php if ((isset($page)) and ($page == 'contacts')) { ?>
                <li><a href="/rus/contacts.php" style='color: #c0a97a'>Контакты</a></li>
            <?php } else { ?>
                <li><a href="/rus/contacts.php">Контакты</a></li><?php } ?>

        </ul>

    </div>
</nav>
<table class="menu_language">
    <tr>
		<?php
		$path = $_SERVER['REQUEST_URI'];
		$path = explode("/", $path);

		$new_eng_path = implode("/", array_merge(array("eng"), array_slice($path, 2)));
		$new_eng_path = "" . "/" . $new_eng_path;

		$new_rus_path = implode("/", array_merge(array("rus"), array_slice($path, 2)));
		$new_rus_path = "" . "/" . $new_rus_path;
		if ($new_eng_path == "/eng") {
                    $new_eng_path = "/eng/home.php";
                }
                if ($new_rus_path == "/rus") {
                    $new_rus_path = "/rus/home.php";
                }

?>

		<td style="padding-right: 20px;"><a href="<?php echo $new_rus_path ?>">RUS</a></td>
        <td><a href="<?php echo $new_eng_path ?>">ENG</a></td>
        
        <!--<td style="padding-right: 20px;"><a href="/rus/home.php">RUS</a></td>-->
        <!--<td><a href="/eng/home.php">ENG</a></td>-->
    </tr>
</table>
</div>
