<?php

namespace App\Entity;

use \App\Db\Database;

class Product_manager{

    /**
     * Id do produto
     * @var integer
     */
    public $id;

    /**
     * Categoria do ítem
     * @var string
     */
    public $item_category;

    /**
     * Nome do ítem
     * @var string
     */
    public $item_name;

    /**
     * Definir se o produto está disponível
     * @var string(s/n)
     */
    public $disponivel;



    /**
     * Metodo de cadastro
     * @return boolean
     */
    public function cadastrar(){
        //Definir a data
        $this->data = date('Y-m-d H:i:s');
        
        // inserir o produto no banco
        $obDatabase = NEW Database('product');
        $this->id = $obDatabase->insert([
            'item_name' => $this->item_name,
            'item_category' => $this->item_category,
            'available' => $this->disponivel,
            'item_register' =>$this-> data
        ]);

        // retornar mensagem de sucesso
        return true;
    }
}  