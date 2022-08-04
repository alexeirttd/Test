<?php

function DB_Connect(){
    $pdo = new PDO('mysql:host=localhost;dbname=php_study;charset=utf8;', 'root', '');
    return $pdo;
}
