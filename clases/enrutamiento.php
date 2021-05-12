<?php

class servicioRutas {

    public function Ruta($i) {

        switch ($i) {
            case 1:
                $v = "nosotros.php";
                break;
           
            
            default:
            $v = "home.php";
            break;

        }
       
        return $v;
           
    }


    public function SubRuta($i) {

        switch ($i) {
            case 1:
                $v = "registro.php";
                break;

            case 2:
                $v = "nota.php";
                break;
         
            default:
            $v = "card.php";
            break;

        }
   
        return $v;
           
    }
    
      


}

?>