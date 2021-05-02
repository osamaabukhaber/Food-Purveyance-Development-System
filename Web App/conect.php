<?php 
    $dsn = 'mysql:host=localhost;dbname=merchant'; // Data source name
    $user = 'root'; // The user name to conest
    $pass = ''; // The password name to conest
    $opton = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ,
    );
    try {
        $con = new PDO($dsn,$user,$pass,$opton);
        $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo 'faild to conect' . $e->getMessage();
    }
    
