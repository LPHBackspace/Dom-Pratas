<?php

// require MySQL Connection
require ('database/DBController.php');

// require  Product class
require ('database/Product.php');

//DBController object
$db = new DBController();

// Product object
$product = new Product($db);

