<?php 

require_once "./src/MinhaCLasse.php";
use PHPUnit\Framework\TestCase;

class MinhaCLasseTest extends TestCase{
    public function testSoma() {
        $resultado = (new MinhaCLasse())->Somar(-2, -3);
        $this->assertEquals(-5, $resultado);
    }

    public function testSoma1() {
        $resultado = (new MinhaCLasse())->Somar(2, -3);
        $this->assertEquals(-1, $resultado);
    }

    public function testSoma2() {
        $resultado = (new MinhaCLasse())->Somar(0, 4);
        $this->assertEquals(4, $resultado); 
    }
}


?>