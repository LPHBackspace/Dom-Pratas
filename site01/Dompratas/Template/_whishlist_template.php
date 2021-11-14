<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteWishlist($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Favoritos</h5>

        <!--Itens carrinho de compras-->
        <div class="row">
            <div class="col-sm-9">

                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>

                        <!-- Item-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "assents/products/produto1.jpeg" ?>" style="height: 120px" alt="cart" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                                <small>Dom Pratas</small>
                                <!-- Avaliação -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">25 Avaliações</a>
                                </div>
                                <!-- Avaliação -->

                                <!-- Quantidade -->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Apagar</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Adicionar ao Carrinho</button>
                                    </form>

                                </div>
                                <!-- Quantidade -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    R$ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0 ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Item-->

                        <?php
                        return $item['item_price'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>

            </div>
        </div>
    </div>
</section>