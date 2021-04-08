<?php

namespace Mini\Controller;

class PuntoOneController
{

    public function index()
    {
        $title="Ejercicio N°1";
        $script="js/home.js";

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/puntos/punto1.php';
        require APP . 'view/_templates/footer.php';
    }


    public function ejercicio1(){
        $sizeX=$_POST['size']; //Tamaño de la X que llega de javascript
        $mitad=0;
        $max=1;
        $menos=$sizeX;
        if ($sizeX%2==0){
            $mitad=$sizeX/2;
        }else{
            $mitad=($sizeX/2)+0.5;
        }
       
        $htmlX='<table>';

        for($i=1;$i<=$sizeX;$i++){
            $htmlX.='<tr>';
            for($j=1;$j<=$sizeX;$j++){
                if($max==$j){
                    $htmlX.='<td>X</td>';
                }else if($menos==$j){
                    $htmlX.='<td>X</td>';
                    
                }else{
                    $htmlX.='<td>_</td>';
                }
            }
            $htmlX.='</tr>';
            $max++;
            $menos=$menos-1;
        }

        $htmlX.='</table>';

        echo  $htmlX;
    }
}