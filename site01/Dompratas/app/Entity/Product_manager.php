<?php

namespace App\Entity;

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
        $this->data = date('y-m-d H:i:s');
        
        // inserir o produto no banco

        // atrubuir o id do produto

        // retornar mensagem de sucesso
    }
}