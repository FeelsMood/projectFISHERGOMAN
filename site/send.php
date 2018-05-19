<?php
$numb = $_POST['numb'];
$numb = htmlspecialchars($numb);
$numb = urldecode($numb);
$numb = trim($numb);
//echo $numb;
if (mail("example@mail.ru", "Заявка с сайта", "Тел:".$numb." \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>