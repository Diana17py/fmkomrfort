<?php
$product_id = $_GET['id'];
if (!is_numeric($product_id)) exit();
require_once('config.php');
$sql = "SELECT * FROM golovna WHERE id =" .$product_id;
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>My shop | <?=$product['title']?></title>
</head>
<body>
<?php
require('./components/Header/index.php')
?>
<section class="product_container">
    <div class="single_product_card_container">
        <div>
            <img class="single_product_card_image" src="<?=$product['image']?>" alt="">
        </div>
        <div class="single_product_card_info">
            <h2 class="single_product_card_title"><?=$product['title']?></h2>
            <h3 class="single_product_card_content"><?=$product['content']?></h3>
            <button class="price_button"><?=$product['price']?> $</button>
        </div>
    </div>
</section>
</body>
</html>