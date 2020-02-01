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
            <?php $page = 'portfolio'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/menu.php') ?>
            <div class="content">
                <p class="title_name">Portfolio</p>
                <div class="portfolio_container">
                    <a href="/eng/portfolio/mosaicpictures.php">
                        <img class="portfolio_img" src="/style/images/memories-5.jpg"alt="">
                        <div class="portfolio_name">Mosaic pictures and panels</div>
                    </a>
                    <a href="/eng/portfolio/volumetricmosaic.php">
                        <img class="portfolio_img" src="/style/images/fragment10-5.jpg"alt="">
                        <div class="portfolio_name">Volumetric mosaic</div>
                    </a>
                    <a href="/eng/portfolio/figurines.php">
                        <img class="portfolio_img" src="/style/images/splash.jpg"alt="">
                        <div class="portfolio_name">Figurines</div>
                    </a>
                    <a href="/eng/portfolio/furniture.php">
                        <img class="portfolio_img" src="/style/images/portfolio/bluestump-1.jpg"alt="">
                        <div class="portfolio_name">Furniture</div>
                    </a>
                    <a href="/eng/portfolio/decorationandclock.php">
                        <img class="portfolio_img" src="/style/images/portfolio/flowerclock.jpg"alt="">
                        <div class="portfolio_name">Decoration, clock</div>
                    </a>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/footer.php') ?>
        </div>
    </body>
</html>