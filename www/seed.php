<?php
error_reporting(E_ALL);
require 'vendor/autoload.php';

$itemCount = 100000;

$pdo = new PDO('mysql:dbname=learn_index;host=database', 'user', 'password');
$userList = [];
$faker = Faker\Factory::create();
for ($i = 0; $i < $itemCount; ++$i) {
    $userList[] = '"' . implode('", "', [
        $faker->name,
        $faker->email,
        $faker->phoneNumber
    ]) . '"';
}

$query = 'INSERT INTO `users` (`NAME`, `EMAIL`, `PHONE`) VALUES ('.implode('), (', $userList) . ');';

$result = $pdo->exec($query);
var_dump($result);
var_dump($pdo->errorInfo());