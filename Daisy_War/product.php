<?php

if (isset($_GET['id'])) {

    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);

    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {

        exit('Product does not exist!');
    }
} else {

    exit('Product does not exist!');
}
?>

<?=template_header('Product')?>

<div class="small-container">
    <div>
    <img src="imgs/<?=$product['img']?>" width="40%" height="40%" alt="<?=$product['name']?>">
    </div>
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
        &#8360;&#8228;<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&#8360;&#8228;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart"  method="post">
            <input type="number" class="btn" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" class="btn" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['desc']?>
        </div>
    </div>
</div>

<?=template_footer()?>