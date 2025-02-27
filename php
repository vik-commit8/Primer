
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = htmlspecialchars($_POST['name']);
       $email = htmlspecialchars($_POST['email']);
       $message = htmlspecialchars($_POST['message']);

       // Установите почтовый адрес, на который будете получать сообщения
       $to = "your-email@example.com"; 
       $subject = "Новое сообщение от $name";
       $body = "Имя: $name\nEmail: $email\nСообщение: $message";
       $headers = "От: $email";

       if (mail($to, $subject, $body, $headers)) {
           echo "Сообщение отправлено успешно.";
       } else {
           echo "Произошла ошибка. Попробуйте еще раз.";
       }
   }
   ?>
   
