<?php 
    $text1 = $_GET['text'];

    $text2 = str_replace("Ciao", "***", $text1);
    /* $text2_length = strlen($text2); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TESTO E LUNGHEZZA ORIGINALE</h1>
    <div>
        <p>
            <?php 
                echo $text1;
            ?>
        </p>
        <div>
            <?php 
                echo strlen($text1);
            ?>
        </div>
    </div>

    

    <div>
        <a href="./index.php">Torna alla home</a>
    </div>
</body>
</html>