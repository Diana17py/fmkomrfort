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
$category_id = $_POST['category'];



mysqli_query($conn, "INSERT INTO `products` (`id`, `title`,  `image`,`content`, `price`, `categoryID`) VALUES (NULL, '$title','$image', '$content',  '$price', '$category_id')");
header('Location: index.php');