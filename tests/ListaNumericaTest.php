<?php


require_once "./src/ListaNumerica.php";

use PHPUnit\Framework\TestCase;

class ListaNumericaTest extends TestCase{

    private readonly ListaNumerica $ListaNumerica;

    public function setup(): void {
        $this->ListaNumerica = new ListaNumerica;
    }


    //somarElementos(array $lista)

    public function testSomarElementos() {
        $resultado = $this->ListaNumerica->somarElementos([1, 2, 3, 4, 5]);

        $this->assertEquals(15, $resultado);
    }

    public function testSomarElementosComListaVazia() {
        $resultado = $this->ListaNumerica->somarElementos([]);

        $this->assertEquals(0, $resultado);
    }

    public function testSomarElementosComNumerosNegativos() {
        $resultado = $this->ListaNumerica->somarElementos([-1, -2, -3, -4, -5]);

        $this->assertEquals(-15, $resultado);
    }

    public function testSomarElementosComZeros() {
        $resultado = $this->ListaNumerica->somarElementos([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testSomarElementosComListaVariada() {
        $resultado = $this->ListaNumerica->somarElementos([-1, 3, -7, 0, 2]);

        $this->assertEquals(-3, $resultado);
    }



    //encontrarMaiorElemento(array $lista)

    public function testEcontrarMaiorElemento() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([43, 23, 65, 34, 12]);

        $this->assertEquals(65, $resultado);
    }

    public function testEcontrarMaiorElementoComListaVazia() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMaiorElementoComNumerosNegativos() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([-43, -23, -65, -34, -12]);

        $this->assertEquals(-12, $resultado);
    }

    public function testEcontrarMaiorElementoComZeros() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMaiorElementoComListaVariada() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([13, -43, 0, 2, -5]);

        $this->assertEquals(13, $resultado);
    }


    //encontrarMenorElemento(array $lista)

    public function testEcontrarMenorElemento() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([32, 54, 23, 87, 54]);

        $this->assertEquals(23, $resultado);
    }

    public function testEcontrarMenorElementoComListaVazia() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([]);

        $this->assertEquals(null, $resultado);
    }

    public function testEcontrarMenorElementoComNumerosNegativos() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([-21, -43, -22, -76, -65]);

        $this->assertEquals(-76, $resultado);
    }

    public function testEcontrarMenorElementoComZeros() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMenorElementoComListaVariada() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([21, -43, 1, 0, -8]);

        $this->assertEquals(-43, $resultado);
    }


    //ordenarLista(array $lista)

    public function testOrdenarLista() {
        $resultado = $this->ListaNumerica->ordernarLista([4, 3, 8, 2, 7]);

        $this->assertEquals([2, 3, 4, 7, 8], $resultado);
    }




}




?>