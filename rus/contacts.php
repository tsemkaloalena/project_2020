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
            <?php $page = 'contacts'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/menu.php') ?>
            <div class="content">
                <p class="title_name">Контакты</p>
                <p class="contacts_text1">По всем вопросам пишите, звоните, с удовольствием отвечу.</p>
                <p class="contacts_text2">Отправка работ возможна по всему миру.</p>
                <ul class="contacts_list">Приглашаю к сотрудничеству.
                    <li>Готовые работы и на заказ</li>
                    <li>Объекты в проектируемые и существующие помещения</li>
                    <li>Сотрудничество с дизайнерами</li>
                    <li>Обучение, проведение мастер-классов.</li>
                </ul>

                <a href="https://www.instagram.com/elena_smalta/" target="_blank" ><img src="/style/images/instagram.png" class="icon_insta"></a>
                <a href="https://www.facebook.com/people/Elena-Kirillova/100019066620807" target="_blank" ><img src="/style/images/facebook.png" class="icon_facebook"></a>
                <a href="https://www.livemaster.ru/kirillovamosaic" target="_blank" ><img src="/style/images/livemaster.jpg" class="icon_livemaster"></a>
                <p class="contacts_location">Москва, Россия</p>
                <p class="contacts_phone">Телефон: +7-916-683-00-35</p>
                <p class="contacts_mail">E-mail: kirillovamosaico@gmail.com</p>

                <form action="contacts.php" method="post" class="contacts_form">
                    <p class="form_name">Ваше имя:</p>
                    <input type="text" name="first_name" class="contacts_form_name" required><br>
                    <p class="form_email">Email:</p>
                    <input type="text" name="email" class="contacts_form_email" required><br>
                    <p class="form_message">Сообщение:</p>
                    <br><textarea rows="5" class="contacts_form_message" name="message" cols="30" required></textarea><br>
                    <input type="submit" name="submit" value="Отправить" class="contacts_form_submit">
                </form>
                <?php
                error_reporting(0);
                if (isset($_POST['submit'])) {
                    $to = "kirillovamosaico@gmail.com";
                    $from = $_POST['email'];
                    $first_name = $_POST['first_name'];
                    $subject = "Форма отправки сообщений с сайта";
                    $message = $first_name . " оставил(а) сообщение:" . "\n\n" . $_POST['message'];
                    $headers = "From:" . $from;
                    if (mail($to, $subject, $message, $headers)) { ?>
                        <p class="form_answer">Сообщение успешно отправлено. Спасибо! Я скоро свяжусь с Вами.</p>
                    <?php } else { ?>
                        <p class="form_answer">К сожалению, при отправке сообщения возникла ошибка.</p>
                    <?php }
                }
                ?>

            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/rus/footer.php') ?>
        </div>
    </body>
</html>