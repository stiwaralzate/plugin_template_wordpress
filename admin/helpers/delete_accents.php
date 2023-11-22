<?php 

    function deleteSpecialCharacters($string){
        $accents = array(
            'Á' => 'A', 'á' => 'a',
            'É' => 'E', 'é' => 'e',
            'Í' => 'I', 'í' => 'i',
            'Ó' => 'O', 'ó' => 'o',
            'Ú' => 'U', 'ú' => 'u',
            'Ñ' => 'N', 'ñ' => 'n'
        );
        $newString =  strtr($string, $accents);
        return preg_replace('[^A-Za-z0-9]', '', $newString);
    }