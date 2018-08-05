<?php
    $adminemail="777zhm@gmail.com";
    $site="amarys";
    $username=$_POST["username"];
    $usercompany=$_POST["usercompany"]; 
    $useremail=$_POST["useremail"]; 
    $usertext=$_POST["usertext"]; 
    $msg=" 
    Клиент $usernameblabla воспользовался формой обратной связи на сайте $site
    ФИО: $username
    Компания: $usercompany
    E-mail: $useremail 
    Сообщение: $usertext
"; 
mail("$adminemail", "Клиент $username воспользовался контактной формой на сайте $site", "$msg");
header('Location: http://amarys.com.ua/ru/index.html');
exit; 
 ?>