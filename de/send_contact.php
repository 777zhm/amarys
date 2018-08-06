<?php
    $adminemail="brijesh@amarys.eu, olha@amarys.eu";
    $site="amarys.eu";
    $username=$_POST["username"];
    $usercompany=$_POST["usercompany"]; 
    $useremail=$_POST["useremail"]; 
    $usertext=$_POST["usertext"]; 
    $msg=" 
    Client $username used the feedback form on the site $site
    Client name: $username
    Company name: $usercompany
    E-mail: $useremail 
    Message: $usertext
"; 
mail("$adminemail", "Client $username used the feedback form on the site $site", "$msg");
header('Location: http://amarys.eu/de/index.html');
exit; 
 ?>