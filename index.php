<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <?php 
        $length = $_GET['length'];
        include './partials/function.php';
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