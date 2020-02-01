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
            <?php $page = 'portfolio'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="title_name">Портфолио</p>
                <div class="portfolio_container">
                    <a href="/rus/portfolio/mosaicpictures.php">
                        <img class="portfolio_img" src="/style/images/memories-5.jpg"alt="">
                        <div class="portfolio_name">Картины</div>
                    </a>
                    <a href="/rus/portfolio/volumetricmosaic.php">
                        <img class="portfolio_img" src="/style/images/fragment10-5.jpg"alt="">
                        <div class="portfolio_name">Объёмная мозаика</div>
                    </a>
                    <a href="/rus/portfolio/figurines.php">
                        <img class="portfolio_img" src="/style/images/splash.jpg"alt="">
                        <div class="portfolio_name">Статуэтки</div>
                    </a>
                    <a href="/rus/portfolio/furniture.php">
                        <img class="portfolio_img" src="/style/images/portfolio/bluestump-1.jpg"alt="">
                        <div class="portfolio_name">Мебель</div>
                    </a>
                    <a href="/rus/portfolio/decorationandclock.php">
                        <img class="portfolio_img" src="/style/images/portfolio/flowerclock.jpg"alt="">
                        <div class="portfolio_name">Декор, часы</div>
                    </a>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/footer.php') ?>
        </div>
    </body>
</html>