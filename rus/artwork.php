<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title><?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/titlename.php') ?></title>
        <link href="/style/css/slides.css" rel="stylesheet">
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

                <section>
                    <div class="row wrap">
                        <?php
                        $id = $_GET["id"];
                        include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                        $sql = "SELECT * FROM paintings WHERE id=" . $id;
                        $query = mysqli_query($db, $sql);
                        $row = mysqli_fetch_array($query);
                        ?>
                        
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/backbutton.php') ?>
                        <?php if ($row['statusrus'] == 'Продаётся') { ?><h2 class="forsale"><a href="/rus/pricelist.php#<?php echo $row['id']; ?>" class="href_to_pricelist">Продаётся</a></h2><?php } ?>
                        
                        <div class="slides_thumbs">
                            <div class="slide_imgs">
                                <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a> 
                                <?php if (isset($row['img2'])) { ?>
                                    <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img2'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img2'] ?>></a>
                                    <?php if (isset($row['img3'])) { ?>
                                        <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img3'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img3'] ?>></a>
                                        <?php if (isset($row['img4'])) { ?>
                                            <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img4'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img4'] ?>></a>
                                            <?php if (isset($row['img5'])) { ?>
                                                <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img5'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img5'] ?>></a>
                                                <?php if (isset($row['img6'])) { ?>
                                                    <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img6'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img6'] ?>></a>
                                                    <?php if (isset($row['img7'])) { ?>
                                                        <a href=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img7'] ?>><img src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img7'] ?>></a>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>

                            </div>
                            <!-- End thumbs-->
                        </div>
                        <!-- End carousel Wrap-->
                    </div>
                </section>
                <h2 style="margin-top: 100px; font-weight: 600"><?php echo $row['namerus']; ?></h2>
                <?php if (isset($row['descriptionrus'])) { ?><h2><?php echo $row['descriptionrus'] ?></h2><?php } ?>
                <?php if (isset($row['description2rus'])) { ?><h2><?php echo $row['description2rus'] ?></h2><?php } ?>
                <?php if (isset($row['materialsrus'])) { ?><h2>Материалы: <?php echo $row['materialsrus'] ?></h2><?php } ?>
                <?php if ($row['sizerus'] !== '') { ?><h2>Размер <?php echo $row['sizerus'] ?></h2><?php } ?>
                <?php if ($row['weight'] !== '') { ?><h2>Вес <?php echo $row['weight'] ?> кг</h2><?php } ?>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/footer.php') ?>

        </div>
    </body>



    <!-- Google jQuery CDN-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Local jQuery Fallback-->
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js">\x3C/script>')</script>
    <!-- Custom jQuery Mobile for swipe functions-->
    <script src="/style/js/jquery.mobile.custom.min.js"></script> 
    <!-- slideshow.js-->
    <script charset="utf-8" src="/style/js/slides.min.js" type="text/javascript"></script> 

    <script>

        $("div.slides_thumbs").slides({thumbs: "on"});
        $("div.slides_con_mark").slides({controller: "on"});
        $("div.slides_thumbs_con").slides({thumbs: "on", controller: "on"});
        $("div.slides_play").slides({controller: "on", markers: "off"});
        $("div.slides_full").slides({full_width_image: "on"});
        $("div.slides_full_thumbs").slides({thumbs: "on", full_width_image: "on"});
        $("div.slides_full_thumbs_con").slides({thumbs: "on", full_width_image: "on", controller: "on"});


    </script>

</html>
