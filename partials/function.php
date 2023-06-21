
<?php 
        // include '../index.php';
        
      
        function RandomPass($length){
        $caratteriPossibli = "";

        $letter = $_GET['letter'];
        $num =  $_GET['number'];
        $symbols =  $_GET['symbols'];

        if ($letter || $num || $symbols ){
            
            if ( $letter ){
            $caratteriPossibli .= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
            }
            if ( $num ) {
            $caratteriPossibli .= "0123456789";
            }
            if ( $symbols ) {
                $caratteriPossibli .= "!$%&/()=?^";
            }

            // inizializzo la stringa random
            $stringa = "";
            $i = 0;

            while ($i < $length) {

            // estrazione casuale di un un carattere dalla lista possibili caratteri
            // substr(string $string, int $offset, ?int $length = null): string
            $carattere = substr($caratteriPossibli,rand(0,strlen($caratteriPossibli)-1),1);

            // prima di inserire il carattere controllo non sia già presente nella stringa random fin'ora creata
            if (!strstr($stringa, $carattere)) {
                $stringa .= $carattere;
                $i++;
                }
            
            }
            return $stringa;

        }
        else {
            return "Non hai selezionato nessuna scelta";
        }
       
       
    }
    ?>