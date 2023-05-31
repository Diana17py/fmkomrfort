<main>
    <section class="hero_container">
        <?php
        require_once('config.php');
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        ?>
        <div class="product_cards">
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
        </div>
    </section>
</main>