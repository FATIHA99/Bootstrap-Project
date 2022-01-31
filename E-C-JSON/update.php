<?php
include 'header.php';
require 'functions.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "not_found.php";
    exit;
}


//

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = array_merge($user, $_POST);
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture    '], $user);
        header("Location: Students.php");
    
}




?>
  <?php include '_form.php'; ?>

 
 

