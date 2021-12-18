<!-- Carrinho de compras -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    // Adicionar aos favoritos "whishlist"
    if(isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Carrinho de Compras</h5>

        <!--Itens carrinho de compras-->
        <div class="row">
            <div class="col-sm-9">

                <?php
                foreach ($product->getData('cart') as $item) :
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
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text"  data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Apagar</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger px-3">Adicionar aos Favoritos</button>
                            </form>

                        </div>
                        <!-- Quantidade -->

                        <br>

                        <!--
                        <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
                        data-preference-id="<?php echo $item['pay_link'] ?? '1041741071-4b4302d5-68a8-432c-8d85-865cbbe4cf9a'?>" data-source="button">
                        </script>
                        -->
 

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
            <!-- Preço total -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Serviço de entrega gratis.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Total ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> itens) &nbsp;<span class="text-danger">R$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>
                        <button type="submit" class="btn btn-warning mt-3">Confirmar compra</button>
                    </div>
                    <!-- Preço total -->
                </div>
                <!--Itens carrinho de compras-->
            </div>

            
</section>
<!-- Carrinho de compras-->