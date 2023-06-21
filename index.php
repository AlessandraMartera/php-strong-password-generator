<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Password Generator</title>

    <?php 
        session_start();
        $length = $_GET['length'];

        include './partials/function.php';
    ?>

   
</head>
<body>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura <?php echo $num; ?> </h2>

    <br />
    <br />

    <div class="display">
        <?php 

        if ( $length > 0) {
            $pass = RandomPass($length);
            $_SESSION['pass'] = $pass;
            header('Location: pass-page.php');

        } else {
            echo "Nessun parametro inserito";
        }

        ?>
    </div>

    <br />
    <br />

    <div class="container">
    <form>
      
        <label for="length">Lunghezza Password:</label>
        <input type="number" name="length" value="<?php echo $length; ?>">

        <br>
        <input type="checkbox" name="letter" default="on" >
        <label for="lettere">Lettere</label>
        <br>
        <input type="checkbox" name="number">
        <label for="number">Numeri</label>
        <br>
        <input type="checkbox" name="symbols">
        <label for="symbols">Simboli</label>
        
        <br>
        <input type="submit" value="INVIA">
    </form>

   
    </div>
</body>
</html>