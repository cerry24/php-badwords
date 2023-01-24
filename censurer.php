<!DOCTYPE html>

<?php 
    $paragraph = $_GET['paragraph'];
    $bannedWord = $_GET['banned-word'];
    $censuredParagraph = str_replace($bannedWord, '***', $paragraph);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>response</title>
    </head>
    <body>
        <main>
            <h2>Paragrafo inserito</h2>
            <?php
                echo $paragraph;
            ?>
            <h3>Lunghezza paragrafo</h3>
            <?php
                echo strlen($paragraph);
            ?>

            <h2>Paragrafo censurato</h2>
            <?php
                echo $censuredParagraph;
            ?>
            <h3>Lunghezza paragrafo</h3>
            <?php
                echo strlen($censuredParagraph);
            ?>
        </main>
    </body>
</html>