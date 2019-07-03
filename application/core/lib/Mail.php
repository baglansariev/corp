<?php
    namespace application\core\lib;
    use application\core\lib\Request;
    use application\core\lib\phpMailer\src\PHPMailer;
    use application\core\lib\phpMailer\src\SMTP;

    class Mail
    {
        public $phpMailer;
        public $request;

        public function __construct()
        {
            $this->request = new Request;
            $this->phpMailer = new PHPMailer;

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

//            $this->modalFormSend();
            echo 'HI';
        }
        public function modalFormSend()
        {
            if(isset($this->request->post['name']) && isset($this->request->post['phone'])){
                $clientName = $this->request->post['name'];
                $clientPhone = $this->request->post['phone'];

                // Письмо
//                $phpMailer->isHTML(true);
//                $phpMailer->Subject = 'ASARKAZYNA.KZ: Клиент заказал звонок'; // Заголовок письма
//                $phpMailer->Body = "Имя: $name \r\n Телефон: $number \r\n"; // Текст письма
//                // Результат
//                if(!$phpMailer->send()) {
//                    echo 'Message could not be sent.';
//                    echo 'Mailer Error: ' . $phpMailer->ErrorInfo;
//                } else {
//                    echo 'ok';
//                }
                echo 'works';
            }
        }
    }