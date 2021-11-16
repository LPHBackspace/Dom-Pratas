
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Carrinho de Compras</h5>

        <!--Itens carrinho de compras-->
        <div class="row">
            <div class="col-sm-9">

                <!-- Carrinho vazio -->

                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assents/empty_cart3.png" alt="Carrinho Vazio" class="img-fluid" style="height: 200px;">
                        <p class="font-baloo font-size-16 text-black-50">O Carrinho Está Vazio</p>
                    </div>
                </div>
                <!-- Carrinho vazio -->

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