<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/application/core/lib/phpMailer/src/SMTP.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/application/core/lib/phpMailer/src/PHPMailer.php');

    // Настройки
    $phpMailer = new PHPMailer;
    $phpMailer->CharSet = 'UTF-8';
    $phpMailer->isSMTP();
    $phpMailer->Host = 'smtp.mail.ru';
    $phpMailer->SMTPAuth = true;
    $phpMailer->Username = 'baglansariev@mail.ru'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
    $phpMailer->Password = 'CEREBRO50500262102'; // Ваш пароль
    $phpMailer->SMTPSecure = 'ssl';
    $phpMailer->Port = 465;
    $phpMailer->setFrom('baglansariev@mail.ru'); // Ваш Email
    $phpMailer->addAddress('baglansariev@mail.ru'); // Email получателя

    if(isset($_POST['name']) && isset($_POST['phone'])){
        // Письмо
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'EGM.KZ: Клиент ' . $_POST['name'] . ' заказал звонок'; // Заголовок письма
        $phpMailer->Body = "Клиент заказал обратный звонок с сайта egm.kz <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Имя: {$_POST['name']} <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Телефон: {$_POST['phone']} <br> \r\n"; // Текст письма
        // Результат
        if(!$phpMailer->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $phpMailer->ErrorInfo;
        } else {
            echo 'ok';
        }
    }

    if(isset($_POST['feedback-name']) && isset($_POST['feedback-phone']) && isset($_POST['feedback-email'])){
        // Письмо
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'EGM.KZ: Клиент ' . $_POST['feedback-name'] . ' заказал звонок'; // Заголовок письма
        $phpMailer->Body = "Клиент заказал обратную связь с главной страницы сайта egm.kz <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Имя: {$_POST['feedback-name']} <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Телефон: {$_POST['feedback-phone']} <br> \r\n"; // Текст письма
        $phpMailer->Body .= "E-mail: {$_POST['feedback-email']} <br> \r\n"; // Текст письма
        // Результат
        if(!$phpMailer->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $phpMailer->ErrorInfo;
        } else {
            echo 'ok';
        }
    }

    if(isset($_POST['contact-name']) &&
        isset($_POST['contact-email']) &&
        isset($_POST['contact-text'])
    ){
        // Письмо
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'EGM.KZ: Клиент ' . $_POST['contact-name'] . ' заказал звонок'; // Заголовок письма
        $phpMailer->Body = "Клиент заказал обратную связь со страницы Контакты сайта egm.kz <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Имя: {$_POST['contact-name']} <br> \r\n"; // Текст письма
        $phpMailer->Body .= "E-mail: {$_POST['contact-email']} <br> \r\n"; // Текст письма
        $phpMailer->Body .= "Сообщение: {$_POST['contact-text']} <br> \r\n"; // Текст письма
        // Результат
        if(!$phpMailer->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $phpMailer->ErrorInfo;
        } else {
            echo 'ok';
        }
    }

