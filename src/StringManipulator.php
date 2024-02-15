<?php 

class StringManipulator {

    public function capitalizeString($string) {
        if ($string != "" ) {
            return $string;
        } else {
            return "";
        }
    }

    public function concatenatedStrings($string1, $string2) {
        $string1 = str_replace(" ", '', $string1);
        $string2 = str_replace(" ", '', $string2);

        return "$string1" . " $string2";
    }

    public function countVowels($str) {
        $string =  strtolower($str);
        $vogais = ["a", "e", "i", "o", "u"];
        $contagem = 0;

        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vogais)) {
                $contagem++;
            }
        }

        return $contagem;
    }
}




?>