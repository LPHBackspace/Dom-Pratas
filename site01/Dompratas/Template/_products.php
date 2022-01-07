<?php

  $item_id = $_GET['item_id'] ?? 1;
  foreach($product->getData() as $item) :
      if($item['item_id'] == $item_id) :
?>
<!--Produto-->
<section id="product" class="py-3 container">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? 'assents/products/produto1.jpeg'?>" alt="produto" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">


                        <a href="<?php echo $item['item_link']?>"><button class="btn btn-danger form-control">Prosseguir compra</button></a>
                    

                    </div>
                    <div class="col">

                    <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">No Carrinho</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Adicionar ao Carrinho</button>';
                                }
                                ?>
                            </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>Dom Pratas</small>
                <div class="rating text-warning font-size-12">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20 notas | 11 comentários</a>
                </div>
                <hr class="m-0">

                <!--Preço-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Preço:</td>
                        <td class="font-size-16 text-danger">R$ <span><?php echo $item['item_price'] ?? "0"; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Impostos incluidos</small></td>
                    </tr>
                </table>
                <!--Preço-->

                <!--Política-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Reinbolsamos<br>seu dinheiro</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Entrega em<br>até 10 dias</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 ano<br>de Garantia</a>
                        </div>
                    </div>
                </div>
                <!--Política-->

                <hr>

                <!--Detalhes de entrega-->
                <div class="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Entrega entre: Out 11 - Out 21</small>
                    <small>Sold by<a href="#">Daily Diamonts</a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-att-color-primary"></i>&nbsp;&nbsp;Enviar para cliente: 424201</small>
                </div>
                <!--Detalhes de entrega-->

                <div class="quantity row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Cor:</h6>
                                <div class="p-2 color-emerald-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-blue-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">

                        <!-- Quantidade de produtos -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qnt:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- Quantidade de produtos -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container product-details">
    <h6 class="font-rubik">Detalhes do produto</h6>
    <hr>
    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta, eos in at perferendis, vel vitae autem facere voluptates quo iusto ut saepe quidem incidunt molestiae perspiciatis. Molestias, cum nisi.</p>
    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta, eos in at perferendis, vel vitae autem facere voluptates quo iusto ut saepe quidem incidunt molestiae perspiciatis. Molestias, cum nisi.</p>
</div>
<!--Produto-->
<?php
      endif;
      endforeach;
      ?>