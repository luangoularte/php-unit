<?php 

require_once "./src/ShoppingList.php";
use PHPUnit\Framework\TestCase;

class ShoppingListTest extends TestCase{

    //Verifica se o método addItem adiciona um item à lista
    public function testAddItem() {
        $lista = new ShoppingList();
        $lista->addItem("banana");
        $item = ["banana"];
        $array = $lista->getItems();
        $this->assertEquals($item, $array);
    }

    //Verifica se o método removeItem remove um item da lista
    public function testRemoveItem() {
        $lista = new ShoppingList;
        $lista->addItem("banana");
        $array = $lista->getItems();
        if(in_array("banana", $array)){
            $lista->removeItem(0);
        }
        $array2 = $lista->getItems();
        $this->assertEquals([], $array2);
    }

    public function testAddDuplicado() {
        $lista = new ShoppingList();
        $lista->addItem("banana");
        $lista->addItem("banana");
        $item = ["banana"];
        $array = $lista->getItems();
        $this->assertEquals($item, $array);
    }

    public function testClearItems() {
        $lista = new ShoppingList();
        $lista->clearItems();
        $array = $lista->getItems();
        $clear = [];
        $this->assertEquals($clear, $array);
    }


}
?>