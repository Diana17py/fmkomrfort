<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'myShop';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}


$title = $_POST['title'];
$image = $_POST['image'];
$content = $_POST['content'];
$price = $_POST['price'];
$category = $_POST['category'];
$id = $_POST['id'];


mysqli_query($conn, "UPDATE `products` SET `title` = '$title', `image` = '$image', `content` = '$content', `price` = '$price', `categoryID` = '$category' WHERE `products`.`id` = '$id'");
header('Location: index.php');