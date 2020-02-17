<html>
    <head>
    	<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    	<?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/for_head.php') ?>
        <link href="/style/css/maingallery.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/style/js/jquery.scrollbox.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <?php $page = 'home'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="title_name">Главная</p>
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
                    <p class="main_text">Современная мозаика - удивительный мир. Море возможностей, любые формы и фактуры, ограниченные только фантазией. Кроме того, работы из мозаики очень практичны. В зависимости от основы, объекты можно размещать во влажных помещениях, на улице, они устойчивы к перепадам температур, не теряют ни цвет, ни форму.</p>
                    <p class="main_text">В своих работах я использую материалы лучших мировых производителей, процесс и результат должны приносить радость.</p>
                    <ul class="main_list">Приглашаю к сотрудничеству.
                        <li>Готовые работы и на заказ</li>
                        <li>Объекты в проектируемые и существующие помещения</li>
                        <li>Сотрудничество с дизайнерами</li>
                        <li>Обучение, проведение мастер-классов.</li>
                    </ul>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/footer.php') ?>
        </div>
    </body>
</html>
