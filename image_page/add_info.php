<?php
include "database_con.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
     $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    
    $sql = "INSERT INTO info(title, url) VALUES(:title, :url)";
    $stmt = $pdo->prepare($sql);
    
     $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':url', $url, PDO::PARAM_STR);

    $stmt->execute();
    
    header('location: index.php');
}