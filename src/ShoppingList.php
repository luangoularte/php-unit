<?php 


//CLasse ShoppingList tem o propósito de manipular e retornar a lista de compras.

class ShoppingList {
    public $listaCompras = [];

    //Adiciona um item à lista
    public function addItem($item) {
        if(!in_array($item, $this->listaCompras)){
            $this->listaCompras[] = $item;
        }
    }

    //Retorna os itens da lista 
    public function getItems() {
        return $this->listaCompras;
    }

    //Remove um item da lista
    public function removeItem($index) {
        
        unset($this->listaCompras[$index]);
        
    }

    //Limpa a lista
    public function clearItems() {
        $this->listaCompras=[];
    }

}

?>