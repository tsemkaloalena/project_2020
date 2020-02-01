<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title><?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/titlename.php') ?></title>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/icons.php') ?>
        <link href="/style/css/mainstyle.css" rel="stylesheet" type="text/css" media="screen">
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155119253-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155119253-1');
</script>

    </head>

    <body>
        <div class="wrapper">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="title_name">Прайс-лист</p>
                <p class="pricelist_name">Картины</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if ($row['statusrus'] == 'Продаётся') {
                            if (($row['type'] == 'picture') and ( $row['id'] !== '47') and ( $row['id'] !== '48') and ( $row['id'] !== '49')) {
                                ?> 
                                <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                    <a href="/rus/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                    <p class="pricelist_info" style="font-weight: 600"><?php echo $row['namerus']; ?></p>
                                    <?php if (isset($row['descriptionrus'])) { ?><p class="pricelist_info"><?php echo $row['descriptionrus'] ?></p><?php } ?>
                                    <?php if (isset($row['description2rus'])) { ?><p class="pricelist_info"><?php echo $row['description2rus'] ?></p><?php } ?>
                                    <?php if (isset($row['materialsrus'])) { ?><p class="pricelist_info">Материалы: <?php echo $row['materialsrus'] ?></p><?php } ?>
                                    <?php if ($row['sizerus'] !== '') { ?><p class="pricelist_info">Размер <?php echo $row['sizerus'] ?></p><?php } ?>
                                    <?php if ($row['weight'] !== '') { ?><p class="pricelist_info">Вес <?php echo $row['weight'] ?> кг</p><?php } ?>
                                    <p class="pricelist_info">Цена: <?php echo $row['price']; ?> руб</p>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Объёмная мозаика</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'volumemosaic') and ( $row['statusrus'] == 'Продаётся')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/rus/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['namerus']; ?></p>
                                <?php if (isset($row['descriptionrus'])) { ?><p class="pricelist_info"><?php echo $row['descriptionrus'] ?></p><?php } ?>
                                <?php if (isset($row['description2rus'])) { ?><p class="pricelist_info"><?php echo $row['description2rus'] ?></p><?php } ?>
                                <?php if (isset($row['materialsrus'])) { ?><p class="pricelist_info">Материалы: <?php echo $row['materialsrus'] ?></p><?php } ?>
                                <?php if ($row['sizerus'] !== '') { ?><p class="pricelist_info">Размер <?php echo $row['sizerus'] ?></p><?php } ?>
                                <p class="pricelist_info">Цена: <?php echo $row['price']; ?> руб</p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Статуэтки</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'figurine') and ( $row['statusrus'] == 'Продаётся')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/rus/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['namerus']; ?></p>
                                <?php if (isset($row['descriptionrus'])) { ?><p class="pricelist_info"><?php echo $row['descriptionrus'] ?></p><?php } ?>
                                <?php if (isset($row['description2rus'])) { ?><p class="pricelist_info"><?php echo $row['description2rus'] ?></p><?php } ?>
                                <?php if (isset($row['materialsrus'])) { ?><p class="pricelist_info">Материалы: <?php echo $row['materialsrus'] ?></p><?php } ?>
                                <?php if ($row['sizerus'] !== '') { ?><p class="pricelist_info">Размер <?php echo $row['sizerus'] ?></p><?php } ?>
                                <p class="pricelist_info">Цена: <?php echo $row['price']; ?> руб</p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Мебель</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'furniture') and ( $row['statusrus'] == 'Продаётся')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/rus/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['namerus']; ?></p>
                                <?php if (isset($row['descriptionrus'])) { ?><p class="pricelist_info"><?php echo $row['descriptionrus'] ?></p><?php } ?>
                                <?php if (isset($row['description2rus'])) { ?><p class="pricelist_info"><?php echo $row['description2rus'] ?></p><?php } ?>
                                <?php if (isset($row['materialsrus'])) { ?><p class="pricelist_info">Материалы: <?php echo $row['materialsrus'] ?></p><?php } ?>
                                <?php if ($row['sizerus'] !== '') { ?><p class="pricelist_info">Размер <?php echo $row['sizerus'] ?></p><?php } ?>
                                <p class="pricelist_info">Цена: <?php echo $row['price']; ?> руб</p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Декор, часы</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'other') and ( $row['statusrus'] == 'Продаётся')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/rus/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['namerus']; ?></p>
                                <?php if (isset($row['descriptionrus'])) { ?><p class="pricelist_info"><?php echo $row['descriptionrus'] ?></p><?php } ?>
                                <?php if (isset($row['description2rus'])) { ?><p class="pricelist_info"><?php echo $row['description2rus'] ?></p><?php } ?>
                                <?php if (isset($row['materialsrus'])) { ?><p class="pricelist_info">Материалы: <?php echo $row['materialsrus'] ?></p><?php } ?>
                                <?php if ($row['sizerus'] !== '') { ?><p class="pricelist_info">Размер <?php echo $row['sizerus'] ?></p><?php } ?>
                                <p class="pricelist_info">Цена: <?php echo $row['price']; ?> руб</p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/footer.php') ?>
        </div>
    </body>






</html>