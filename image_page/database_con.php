<?php

$host ='localhost:3306';
$db = 'test';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;dbname=$db";

$pdo = new PDO($dsn, $user, $pass);