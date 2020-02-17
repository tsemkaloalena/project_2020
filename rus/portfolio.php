<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/for_head.php') ?>
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