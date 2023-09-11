<?php
session_start();

$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Password Generata</title>
    </head>

    <body>
        <div class="container mt-5 d-flex flex-column align-items-center">
            <h1 class="mb-3">Password Generata</h1>
            <p>La tua password generata è: <?php echo $password; ?></p>
            <br>
            <a href="./index.php">Torna indietro</a>
        </div>
    </body>
</html>