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

$i=0;
$string;
while ($i<= 20) {
	if(isset($_POST[$i])){
	$string.=$_POST[$i]." ";
	}
	$i++;
}

$to = "boplkj@yandex.ru";

$message = '���: '.$_POST['name'].'; ������: '.$string.'; �������: '.$_POST['telephone'].';';
$result = mail($to, $subject, $message);

    if ($result){ 
        echo "<p>C�������� ������� �����������. ����������, ����������� �� �����</p>";
    }
    else{
        echo "<p>C�������� �� �����������. ����������, ��������� ��� ���</p>";
    }
}
else {
echo "<p>������������ ���� �� ���������. ������� ����� ��������</p>";
}
?>

</body>
</html>