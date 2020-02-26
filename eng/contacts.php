<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/for_head.php') ?>
        <script src="https://www.google.com/recaptcha/api.js?render=6LeSpdEUAAAAAKJa8d_o0mm7HZ2Os7g4rJiqBVVZ"></script>
        <script>
            grecaptcha.ready(function() {
            grecaptcha.execute('6LeSpdEUAAAAAKJa8d_o0mm7HZ2Os7g4rJiqBVVZ', {action: 'homepage'}).then(function(token) {
                ...
            });
        });
        </script>
    </head>

    <body>
        <div class="wrapper">
            <?php $page = 'contacts'; ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/menu.php') ?>
            <div class="content">
                <p class="title_name">Contacts</p>
                <p class="contacts_text1">For all questions write, call, I will answer with pleasure.</p>
                <p class="contacts_text2">Shipment of works is possible worldwide.</p>

                <ul class="contacts_list">Welcome to cooperation.
                    <li>Done objects and artworks to order</li>
                    <li>Works for ready for use and at the stage of design rooms</li>
                    <li>Partnership with designers</li>
                    <li>Training, master-class organization.</li>
                </ul>

                <a href="https://www.instagram.com/elena_smalta/" target="_blank" ><img src="/style/images/instagram.png" class="icon_insta"></a>
                <a href="https://www.facebook.com/people/Elena-Kirillova/100019066620807" target="_blank" ><img src="/style/images/facebook.png" class="icon_facebook"></a>
                <a href="https://www.saatchiart.com/account/profile/1262063" target="_blank" ><img src="/style/images/saatchi.png" class="icon_saatchiart"></a>
                <a href="https://www.singulart.com/en/artist/elena-kirillova-9887?campaign_id=1049" target="_blank" ><img src="/style/images/singulart.png" class="icon_singulart"></a>
                <a href="https://www.artmajeur.com/lenasicilia" target="_blank" ><img src="/style/images/artmajeur.png" class="icon_artmajeur"></a>
				<p class="contacts_location">Moscow, Russia</p>
                <p class="contacts_phone">Phone: +7-916-683-00-35</p>
                <p class="contacts_mail">E-mail: kirillovamosaico@gmail.com</p>

                <form action="contacts.php" method="post" class="contacts_form">
                    <p class="form_name">Your name:</p>
                    <input type="text" name="first_name" class="contacts_form_name" required><br>
                    <p class="form_email">Email:</p>
                    <input type="text" name="email" class="contacts_form_email" required><br>
                    <p class="form_message">Message:</p>
                    <br><textarea rows="5" class="contacts_form_message" name="message" cols="30" required></textarea><br>
                    <input type="submit" name="submit" value="Submit" class="contacts_form_submit">
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
                    if (mail($to, $subject, $message, $headers)) {
                        ?>
                        <p class="form_answer">The message was successfully sent. Thank you! I will contact you soon.</p>
                    <?php } else { ?>
                        <p class="form_answer">Unfortunately, there was an error while sending your message.</p>
                    <?php
                    }
                }
                ?>


            </div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/eng/footer.php') ?>
        </div>
    </body>
</html>