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
        $result = $this->db->con->query( "SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        // linha 22 (era para ficar resulttype "2:58:00")
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}

