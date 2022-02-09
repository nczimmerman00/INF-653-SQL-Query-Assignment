<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
    $username = 'mgs_user';
    $password = 'pa55word';
    //$dsn = "mysql:host=localhost; port=3307; dbname=my_guitar_shop2";
    //$username = 'root';
    //$password = "csci441";
    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>