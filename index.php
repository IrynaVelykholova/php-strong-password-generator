<?php
session_start();

include('functions.php');

if (isset($_GET['lunghezza'])) {

    $passwordLunghezza = $_GET['lunghezza'];
    $usaNumeri = isset($_GET['usa_numeri']);
    $usaLettere = isset($_GET['usa_lettere']);
    $usaSimboli = isset($_GET['usa_simboli']);
    $consentiRipetizione = isset($_GET['consenti_ripetizione']);

    // Genero la password che trovo in functions.php
    $password = generatePassword($passwordLunghezza, $usaNumeri, $usaLettere, $usaSimboli, $consentiRipetizione);
    
    // Salvo la password nella sessione
    $_SESSION['password'] = $password;

    // Redirect alla pagina dedicata per mostrare la password
    header('Location: password.php');
    exit(); // Assicura che lo script si interrompa dopo il reindirizzamento
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Generatore di Password</title>
    </head>

    <body>
        <div class="container mt-5 mb-5 d-flex flex-column align-items-center ">
            <h1 class="mb-3">Generatore di Password (abbastanza) Sicure</h1>
            
            <form action="index.php" method="GET">
                <label for="lunghezza">Lunghezza della password:</label>
                <input type="number" name="lunghezza" required>
                <br>

                <label>Caratteri da includere:</label>
                <input type="checkbox" name="usa_numeri"> Numeri
                <input type="checkbox" name="usa_lettere"> Lettere
                <input type="checkbox" name="usa_simboli"> Simboli
                <br>

                <label for="consenti_ripetizione">Consenti caratteri ripetuti:</label>
                <input type="checkbox" name="consenti_ripetizione">
                <br>

                <input type="submit" value="Genera Password">
            </form>
        </div>
    </body>
</html>