
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/for_head.php') ?>
    </head>

    <body>
        <div class="wrapper">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="title_name">Мебель</p>
                <div class="gallery_container">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/connect_db.php');
                    $sql = "SELECT * FROM paintings ORDER BY num ASC";
                    $query = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                        if ($row['type'] == 'furniture') {
                            ?> 

                            <a href="/rus/artwork.php?id=<?php echo $row['id'] ?>"><img class="gallery_img" src=<?php include($_SERVER['DOCUMENT_ROOT'] . '/connect_img.php') ?><?php echo $row['img1'] ?>></a>
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