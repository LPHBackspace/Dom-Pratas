<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using gatData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query( query."SELECT * FROM {$table}");

        $resultArray = array();

        // getch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}