
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="icon" href="/style/images/logotransparent.png" sizes="32x32" />
        <link href="/style/css/mainstyle.css" rel="stylesheet" type="text/css" media="screen">
    </head>

    <body>
        <div class="wrapper">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="gallery_name">Картины</p>
                <div class="gallery_container">
                    <?php
                    $db = mysqli_connect("localhost", "root", "");
                    mysqli_select_db($db, "art");
                    mysqli_query($db, "SET NAMES utf8");
                    $sql = "SELECT * FROM paintings ORDER BY id DESC";
                    $query = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                        if ($row['type'] == 'picture') {
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