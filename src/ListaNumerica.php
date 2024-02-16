<?php 

class ListaNumerica {

    public function somarElementos(array $lista) {
        $soma = 0;

        foreach($lista as $numero) {
            $soma += $numero;
        }

        return $soma;
    }

    public function encontrarMaiorElemento(array $lista) {
        if ($lista != []){
            return max($lista);
        } else {
            return null;
        }
    }

    public function encontrarMenorElemento(array $lista) {
        if ($lista != []){
            return min($lista);
        } else {
            return null;
        }
    }

    public function ordernarLista(array $lista) {
        return sort($lista);
    }


}





?>