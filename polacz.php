<?php
    $serverName = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'praktyki';
    
    $baza = mysqli_connect($serverName, $user, $passwd, $db);
    $baza->set_charset("UTF8");
    
    if(!$baza){
        die('Błąd połączenia'.mysqli_connect_error());
    }
?>