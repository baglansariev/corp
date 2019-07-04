<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/application/core/lib/phpMailer/src/PHPMailer.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/application/core/lib/phpMailer/src/SMTP.php');

        // Настройки
    $phpMailer = new PHPMailer;
    $phpMailer->CharSet = 'UTF-8';
    $phpMailer->isSMTP();
    $phpMailer->Host = 'smtp.mail.ru';
    $phpMailer->SMTPAuth = true;
    $phpMailer->Username = 'baglansariev@mail.ru'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
    $phpMailer->Password = 'CEREBRO50500262102'; // Ваш пароль
    $phpMailer->SMTPSecure = 'ssl';
    $phpMailer->Port = 25;
    $phpMailer->setFrom('baglansariev@mail.ru'); // Ваш Email
    $phpMailer->addAddress('baglansariev@mail.ru'); // Email получателя

    function modalFormSend($name, $phone, $phpMailer){
        // Письмо
        $phpMailer->isHTML(true);
        $phpMailer->Subject = 'ASARKAZYNA.KZ: Клиент ' . $name . ' заказал звонок'; // Заголовок письма
        $phpMailer->Body = "Имя: $name \r\n Телефон: $phone \r\n"; // Текст письма

        // Результат
        if(!$phpMailer->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $phpMailer->ErrorInfo;
        } else {
            echo 'ok';
        }

//        echo 'works';
    }

    if(isset($_POST['name']) && isset($_POST['phone'])){
        modalFormSend($_POST['name'], $_POST['phone'], $phpMailer);
    }