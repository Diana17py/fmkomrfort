<?php
require('components/Header/index.php');
$category_id = $_GET['id'];
require_once('config.php');
$sql = "SELECT * FROM products WHERE categoryID =" .$category_id;
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>FMKomfort</title>
</head>
<body>
<section class="category_container">
    <?php foreach ($result as $product):?>
        <div class="product_card">
            <div class="product_card_info">
                <img src="<?=$product['image']?>" class="product_card_image" alt="<?=$product['title']?>">
                <p class="product_card_title"><?=$product['title']?></p>
            </div>
            <div class="product_card_buttons">
                <a href="product.php?id=<?=$product['id']?>" class="product_card_button">Read More</a>
                <button class="price_button"><?=$product['price']?> $</button>
            </div>
        </div>
    <?php endforeach;?>
</section>
</body>
</html>
