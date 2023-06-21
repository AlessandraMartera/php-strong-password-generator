<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <?php 
        $length = $_GET['length'];
      

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
                $caratteriPossibli .= "£";
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
   
   
</head>
<body>

    <h1>Strong Password Generator</h1>
    <h3>Genera una password sicura</h3>

    <br />
    <br />

    <div>
        <?php 
        
        echo $length . "<br>"; 

        if ( $length > 0) {
        //    for ($i=0; $i < $length ; $i++) { 
        //     $yourPass = rand( 0, 9);

        //     echo  $yourPass;  
        // }

        echo RandomPass($length);
        } else {
            echo "Nessun parametro inserito";
        }
        
        
    
        
        ?>
    </div>

    <br />
    <br />

    <div>
    <form>
      
        <label for="length">Lunghezza Password:</label>
        <input type="number" name="length" value="<?php echo $length; ?>">

        <br>
        <input type="checkbox" name="lettere">
        <label for="lettere">Lettere</label>
        <input type="checkbox" name="number">
        <label for="number">Numeri</label>
        <input type="checkbox" name="symbols">
        <label for="symbols">Simboli</label>

        <br>
        <input type="submit" value="INVIA">
    </form>

   
    </div>
</body>
</html>