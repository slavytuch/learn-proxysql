<?php

$pdo = new PDO('mysql:dbname=learn_index;host=proxysql;port=6033', 'user', 'password');

$preparedQuery = $pdo->prepare('SELECT `NAME`, `EMAIL` FROM `users` where `ID` = 1');
$preparedQuery->execute();


var_dump($preparedQuery->fetchAll(PDO::FETCH_ASSOC));
var_dump($preparedQuery->errorInfo());