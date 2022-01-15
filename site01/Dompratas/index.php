<?php
ob_start();
// header.php
include ('header.php');

// auto load
require('vendor/autoload.php');
?>

<?php
   // Banner
   include('Template/_banner.php');
   // Banner

   // Mais populares
   include('Template/_mais-populares.php');
   // Mais populares

   // Filtrar itens
   include('Template/_filtrar-itens.php');
   // Filtrar itens

   // Anúncio
   include('Template/_anuncio.php');
   // Anúncio

   // Social icons
   include('Template/_social-icons.php');
   // Social icons
?>

<?php
// footer.php
include('footer.php');
?>
