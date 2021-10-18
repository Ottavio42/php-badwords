<?php 
$badWord = $_GET['nome'];
$frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam earum reiciendis pariatur, quis, repellat enim asperiores voluptatibus nam error quo suscipit velit in dolorum harum magni iste inventore laboriosam.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $frase; ?>
    </p>
    <p>
        La lunghezza della frase è: <?php echo strlen($frase); ?>
    </p>
    <p>
        <?php echo str_replace($badWord, '***', $frase); ?>
        La lunghezza della frase è: <?php echo strlen($frase); ?>
    </p>
    
</body>
</html>
