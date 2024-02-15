<?php 

require_once "./src/StringManipulator.php";

use PHPUnit\Framework\TestCase;

class StringManipulatorTest extends TestCase{
    
    public function testCapitalizeString() {
        $string = new StringManipulator; 
        $resultado = $string->capitalizeString("");
        $this->assertEquals("", $resultado);
    }

    public function testConcatenateStrings() {
        $string = new StringManipulator; 
        $resultado = $string->concatenatedStrings(" Bom", "Di a ");

        $this->assertEquals("Bom Dia", $resultado);
    }

    public function testCountVowels1() {
        $string = new StringManipulator; 
        $resultado = $string->countVowels("Borboleta");

        $this->assertEquals(4, $resultado);
    }

    public function testCountVowels2() {
        $string = new StringManipulator; 
        $resultado = $string->countVowels("engEnhAria");

        $this->assertEquals(5, $resultado);
    }

    public function testCountVowels3() {
        $string = new StringManipulator; 
        $resultado = $string->countVowels("HTML");

        $this->assertEquals(0, $resultado);
    }



}



?>