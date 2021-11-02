<!--Mais Populares-->
<?php

  //request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Mais Populares</h4>
        <hr>
        <!--Owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? './assents/products/produto1.jpeg'; ?>" alt="Corrente e pulseira masculina 3x1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? 'Unknown'; ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>R$ <?php echo $item['item_price'] ?? '0' ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Adicionar ao carrinho</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } //close foreach function ?>

        </div>
        <!--Owl carousel-->
    </div>
</section>
<!--Mais Populares-->
