<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if(!empty($_POST['telephone'] ))
{
$to = "boplkj@yandex.ru";

$message = 'Имя: '.$_POST['name'].'; Нажали: '.$_POST['Checkbox1'].','.$_POST['Checkbox2'].'; Телефон: '.$_POST['telephone'].';';
$result = mail($to, $subject, $message);

    if ($result){ 
        echo "<p>Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите номер телефона</p>";
}
?>

</body>
</html>