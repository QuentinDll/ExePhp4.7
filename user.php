<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_POST['firstname']) &&  !empty($_POST['lastname'])){
                echo $_POST['firstname'] ."  ". $_POST['lastname'];
            } else {
                echo 'Erreur lors de la saisie';
            }
            ?>
        </p>
    </body>
</html>
