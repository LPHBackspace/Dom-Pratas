<?php
ob_start();
// header.php
include ('header2.php');
?>


<?php

// Carrinho
count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');
// Carrinho

// Whishlist
count($product->getData('wishlist')) ? include('Template/_whishlist_template.php') : include('Template/notFound/_whishlist_notFound.php');
// Whishlist

// Mais populares
include('Template/_mais-populares.php');
// Mais populares

// Social icons
include('Template/_social-icons.php');
// Social icons
?>

<?php
// footer.php
include('footer.php');
?>
