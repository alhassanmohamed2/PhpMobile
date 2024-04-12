<?php
include "database_con.php";

$stmt = $pdo->prepare("SELECT * FROM info");
$stmt->execute();
$result = $stmt->fetchAll();
