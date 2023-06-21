<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <?php 
      $length = $_GET['length'];
      if ( $length > 0 ){
      
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
        // echo "Nessun parametro inserito";
        echo $length;
        echo rand(0,15);
        ?>
    </div>

    <br />
    <br />

    <div>
    <form>
      
        <label for="length">Lunghezza Password:</label>
        <input type="number" name="length" value="<?php echo $length; ?>">
        <input type="submit" value="INVIA">
    </form>

   
    </div>
</body>
</html>