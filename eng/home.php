<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title><?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/titlename.php') ?></title>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/icons.php') ?>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="/style/css/mainstyle.css" rel="stylesheet" type="text/css">
        <link href="/style/css/maingallery.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/style/js/jquery.scrollbox.js"></script>
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
            <?php $page = 'home'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/menu.php') ?>
            <div class="content">
                <p class="title_name">Home</p>
                <div class="body-content">
                    <div id="demo5" class="scroll-img">
                        <ul>
                            <li><img src="/style/images/portfolio/turtle-1.jpg"></li>
                            <li><img src="/style/images/fragment9-2.jpg"></li>
                            <li><img src="/style/images/fragment1-2.jpg"></li>
                            <li><img src="/style/images/portfolio/appletree-1.jpg"></li>
                            <li><img src="/style/images/portfolio/apple1-1.jpg"></li>
                            <li><img src="/style/images/memories-3.jpg"></li>
                            <li><img src="/style/images/portfolio/frog-1.jpg"></li>
                            <li><img src="/style/images/portfolio/apple9-2.jpg"></li>
                            <li><img src="/style/images/fragment10-3.jpg"></li>

                        </ul>
                    </div>
                    <div id="demo5-btn" class="text-center">
                        <button class="btn" id="demo5-backward" style="background: #fff; border-color: #fff; box-shadow: none;"><i class="icon-chevron-left"></i></button>
                        <button class="btn" id="demo5-forward" style="background: #fff; border-color: #fff; box-shadow: none;"><i class="icon-chevron-right"></i></button>
                    </div>
                </div>
                <script>
                    $(function () {

                        $('#demo5').scrollbox({
                            direction: 'h',
                            distance: 290
                        });
                        $('#demo5-backward').click(function () {
                            $('#demo5').trigger('backward');
                        });
                        $('#demo5-forward').click(function () {
                            $('#demo5').trigger('forward');
                        });

                    });
                </script>
                
                

                <div class="main_text_container">
                    <p class="main_text">Modern mosaic is an exciting and breathtaking world. A wide variety of opportunities, any forms and texture, limited only by your own imagination. Besides, mosaic works are very worksworks  usable. Depending on base, artworks can be placed in dank rooms or outside, they are resistant to temperature changes and don't become pale in color as well as lose their forms.</p>
                    <p class="main_text">I use materials from the best world producers in my works, as the process and the result should bring happiness.</p>
                    <ul class="main_list">Welcome to cooperation.
                        <li>Done objects and artworks to order</li>
                        <li>Works for ready for use and at the stage of design rooms</li>
                        <li>Partnership with designers</li>
                        <li>Training, master-class organization.</li>
                    </ul>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/footer.php') ?>
        </div>
    </body>
</html>
