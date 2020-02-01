<link href="/style/css/menustyle.css" rel="stylesheet" type="text/css" media="screen">
﻿<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet"> 
<?php if ((isset($page)) and ($page == 'home')) { ?>
	<h1 class="logo" style="visibility: visible">Elena Kirillova</h1>
<?php } else { ?>
	<h1 class="logo">Elena Kirillova</h1>
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
                <li><a href="/eng/home.php" style='color: #c0a97a'>Home</a></li>
            <?php } else { ?>
                <li><a href="/eng/home.php">Home</a></li><?php } ?>

            <?php if ((isset($page)) and ($page == 'aboutme')) { ?>
                <li><a href="/eng/aboutme.php" style='color: #c0a97a'>About</a></li>
            <?php } else { ?>
                <li><a href="/eng/aboutme.php">About</a></li><?php } ?>

            <?php if ((isset($page)) and ($page == 'portfolio')) { ?>
                <li><a href="/eng/portfolio.php" style='color: #c0a97a'>Portfolio</a>
                <?php } else { ?>
                <li><a href="/eng/portfolio.php">Portfolio</a><?php } ?>

                <ul class="submenu">
                    <li><a href="/eng/portfolio/mosaicpictures.php">Mosaic pictures and panels</a></li>
                    <li><a href="/eng/portfolio/volumetricmosaic.php">Volumetric mosaic</a></li>
                    <li><a href="/eng/portfolio/figurines.php">Figurines</a></li>
                    <li><a href="/eng/portfolio/furniture.php">Furniture</a></li>
                    <li><a href="/eng/portfolio/decorationandclock.php">Decoration, clock</a></li>
                </ul>
            </li>


            <?php if ((isset($page)) and ($page == 'exhibitions')) { ?>
                <li><a href="/eng/exhibitions.php" style='color: #c0a97a'>Exhibitions</a></li>
            <?php } else { ?>
                <li><a href="/eng/exhibitions.php">Exhibitions</a></li><?php } ?>
            
            <?php if ((isset($page)) and ($page == 'contacts')) { ?>
                <li><a href="/eng/contacts.php" style='color: #c0a97a'>Contact</a></li>
            <?php } else { ?>
                <li><a href="/eng/contacts.php">Contact</a></li><?php } ?>

        </ul>
    </div>
</nav>
<table class="menu_language_eng_version">
    <tr>
        <td style="padding-right: 20px;"><a href="/rus/home.php">RUS</a></td>
        <td><a href="/eng/home.php">ENG</a></td>
    </tr>
</table>
</div>