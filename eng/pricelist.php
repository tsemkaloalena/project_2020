<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title><?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/titlename.php') ?></title>
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
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/menu.php') ?>
            <div class="content">
                <p class="title_name">Price list</p>
                <p class="pricelist_name">Mosaic pictures and panels</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if ($row['statuseng'] == 'For sale') {
                            if (($row['type'] == 'picture') and ( $row['id'] !== '47') and ( $row['id'] !== '48') and ( $row['id'] !== '49')) {
                                ?> 
                                <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                    <a href="/eng/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                    <p class="pricelist_info" style="font-weight: 600"><?php echo $row['nameeng']; ?></p>
                                    <?php if (isset($row['descriptioneng'])) { ?><p class="pricelist_info"><?php echo $row['descriptioneng'] ?></p><?php } ?>
                                    <?php if (isset($row['description2eng'])) { ?><p class="pricelist_info"><?php echo $row['description2eng'] ?></p><?php } ?>
                                    <?php if (isset($row['materialseng'])) { ?><p class="pricelist_info">Materials: <?php echo $row['materialseng'] ?></p><?php } ?>
                                    <?php if ($row['sizeeng'] !== '') { ?><p class="pricelist_info">Size <?php echo $row['sizeeng'] ?></p><?php } ?>
                                    <?php if ($row['weight'] !== '') { ?><p class="pricelist_info">Weight <?php echo $row['weight'] ?> kg</p><?php } ?>
                                    <?php if ($row['pricedollar'] !== '') { ?><p class="pricelist_info">Price: <?php echo $row['pricedollar']; ?> $ + shipping</p><?php } ?>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Volumetric mosaic</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'volumemosaic') and ( $row['statuseng'] == 'For sale')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/eng/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['nameeng']; ?></p>
                                <?php if (isset($row['descriptioneng'])) { ?><p class="pricelist_info"><?php echo $row['descriptioneng'] ?></p><?php } ?>
                                <?php if (isset($row['description2eng'])) { ?><p class="pricelist_info"><?php echo $row['description2eng'] ?></p><?php } ?>
                                <?php if (isset($row['materialseng'])) { ?><p class="pricelist_info">Materials: <?php echo $row['materialseng'] ?></p><?php } ?>
                                <?php if ($row['sizeeng'] !== '') { ?><p class="pricelist_info">Size <?php echo $row['sizeeng'] ?></p><?php } ?>
                                <?php if ($row['weight'] !== '') { ?><p class="pricelist_info">Weight <?php echo $row['weight'] ?> kg</p><?php } ?>
                                <?php if ($row['pricedollar'] !== '') { ?><p class="pricelist_info">Price: <?php echo $row['pricedollar']; ?> $ + shipping</p><?php } ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Figurines</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'figurine') and ( $row['statuseng'] == 'For sale')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/eng/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['nameeng']; ?></p>
                                <?php if (isset($row['descriptioneng'])) { ?><p class="pricelist_info"><?php echo $row['descriptioneng'] ?></p><?php } ?>
                                <?php if (isset($row['description2eng'])) { ?><p class="pricelist_info"><?php echo $row['description2eng'] ?></p><?php } ?>
                                <?php if (isset($row['materialseng'])) { ?><p class="pricelist_info">Materials: <?php echo $row['materialseng'] ?></p><?php } ?>
                                <?php if ($row['sizeeng'] !== '') { ?><p class="pricelist_info">Size <?php echo $row['sizeeng'] ?></p><?php } ?>
                                <?php if ($row['weight'] !== '') { ?><p class="pricelist_info">Weight <?php echo $row['weight'] ?> kg</p><?php } ?>
                                <?php if ($row['pricedollar'] !== '') { ?><p class="pricelist_info">Price: <?php echo $row['pricedollar']; ?> $ + shipping</p><?php } ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <p class="pricelist_name">Decoration, clock</p>
                <div class="pricelist_content">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        if (($row['type'] == 'other') and ( $row['statuseng'] == 'For sale')) {
                            ?> 
                            <div class="pricelist_container" id="<?php echo $row['id']; ?>">
                                <a href="/eng/artwork.php?id=<?php echo $row['id']; ?>"><img class="pricelist_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
                                <p class="pricelist_info" style="font-weight: 600"><?php echo $row['nameeng']; ?></p>
                                <?php if (isset($row['descriptioneng'])) { ?><p class="pricelist_info"><?php echo $row['descriptioneng'] ?></p><?php } ?>
                                <?php if (isset($row['description2eng'])) { ?><p class="pricelist_info"><?php echo $row['description2eng'] ?></p><?php } ?>
                                <?php if (isset($row['materialseng'])) { ?><p class="pricelist_info">Materials: <?php echo $row['materialseng'] ?></p><?php } ?>
                                <?php if ($row['sizeeng'] !== '') { ?><p class="pricelist_info">Size <?php echo $row['sizeeng'] ?></p><?php } ?>
                                <?php if ($row['weight'] !== '') { ?><p class="pricelist_info">Weight <?php echo $row['weight'] ?> kg</p><?php } ?>
                                <?php if ($row['pricedollar'] !== '') { ?><p class="pricelist_info">Price: <?php echo $row['pricedollar']; ?> $ + shipping</p><?php } ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>


            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/footer.php') ?>
        </div>
    </body>






</html>