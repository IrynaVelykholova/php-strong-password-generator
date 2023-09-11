<?php

function generatePassword($lunghezza, $usaNumeri, $usaLettere, $usaSimboli, $consentiRipetizione) {
    $numeri = '0123456789';
    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $simboli = '!@#$%^&*()_-+=<>?';

    $caratteri = '';

    //concatenazione
    if ($usaNumeri) {
        $caratteri .= $numeri;
    }
    if ($usaLettere) {
        $caratteri .= $lettere;
    }
    if ($usaSimboli) {
        $caratteri .= $simboli;
    }

    // Generazione la password casuale
    $password = '';
    //prendo la lunghezza dei caratteri
    $caratteriLunghezza = strlen($caratteri);

    for ($i = 0; $i < $lunghezza; $i++) {
        $carattereRandom = $caratteri[rand(0, $caratteriLunghezza - 1)];

        // Rimuovo caratteri ripetuti
        if (!$consentiRipetizione) {
            $caratteri = str_replace($carattereRandom, '', $caratteri);
            $caratteriLunghezza = strlen($caratteri);
        }
        $password .= $carattereRandom;
    }
    return $password;
}

?>