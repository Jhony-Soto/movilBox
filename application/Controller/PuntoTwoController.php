<?php

namespace Mini\Controller;

class PuntoTwoController
{

    public function index()
    {
        $title="Ejercicio N°2";
        $script="js/punto2.js";

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/puntos/punto2.php';
        require APP . 'view/_templates/footer.php';
    }


    public function ejercicio2(){
        $array=json_decode($_POST['array']); //Tamaño de la X que llega de javascript
        
        $uno = '';
        $dos = '';
        $tres = '';
        $cuatro = '';
        $cinco = '';
        for($i = 0; $i < count($array); $i++){
            switch ($array[$i]) {
                case 1:
                    $uno .= '* ';
                    break;
                case 2:
                    $dos.= '* ';
                    break;
                case 3:
                    $tres.= '* ';
                    break;
                case 4:
                    $cuatro.= '* ';
                    break;
                case 5:
                    $cinco.= '* ';
                    break;
            }
        }
        $html="<ul>";
        $html.= "<li>1: $uno</li>";
        $html.= "<li>2: $dos</li>";
        $html.= "<li>3: $tres</li>";
        $html.= "<li>4: $cuatro</li>";
        $html.= "<li>5: $cinco</li>";
        $html.="</ul>";

        echo $html;

    }
}