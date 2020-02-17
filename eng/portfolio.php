<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/for_head.php') ?>
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