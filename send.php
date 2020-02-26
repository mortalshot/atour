<?php
if($_POST)
{
$to = "info.allbusiness.lv@gmail.com";
$from = 'allbusiness.lv';
$subject = "Заявка с сайта";
$message = 'Имя: '.$_POST['name'].';<br/> Имя: '.$_POST['country'].';<br/> телефон: '.$_POST['phone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <allbusiness.lv>\r\n";
$result = mail($to, $subject, $message, $headers);

}

ini_set('short_open_tag', 'On');
header('Refresh: 5; URL=/');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="5; url=/">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body
{
   
   background:#b1e361 url(zakaz.jpg) top -70% center no-repeat;
   
   
}


<script type="text/javascript">
setTimeout('location.replace("/")', 5000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
!
</body>
</html>