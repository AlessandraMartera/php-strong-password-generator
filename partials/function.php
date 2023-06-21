
<?php 
        include __DIR__ . '../index.php';
        // $length = $_GET['length'];
      
        function RandomPass($length){
        $caratteriPossibli = "";

        $character = false;
        $num = false;
        $symbols = true;

        if ($character || $num || $symbols ){
            if ( $character ){
            $caratteriPossibli .= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
            }
            if ( $num ) {
            $caratteriPossibli .= "0123456789";
            }
            if ( $symbols ) {
                $caratteriPossibli .= "!$%&/()=?^";
            }

            // !£$%&/()=?^
            // inizializzo la stringa random
            $stringa = "";
            $i = 0;

            while ($i < $length) {

            // estrazione casuale di un un carattere dalla lista possibili caratteri
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