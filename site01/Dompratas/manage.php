<?php
ob_start();
// header.php
include ('header2.php');

// auto load
require('vendor/autoload.php');


use \App\Entity\Product_manager;
// post validation
if(isset($_POST['item_category'],$_POST['item_name'],$_POST['disponivel'])){
    $obProduct = New Product_manager;
    $obProduct->item_category = $_POST['item_category'];
    $obProduct->item_name = $_POST['item_name'];
    $obProduct->disponivel = $_POST['disponivel'];

    $obProduct->cadastrar();


    header('location: manage.php?status=success');
    exit;
}

?>

<?php
include('Template/_product-manage.php');
?>

<?php
// footer.php
include('footer.php');
?>
