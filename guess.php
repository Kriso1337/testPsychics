<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';

use App\Psychic;

$psychics[] = new Psychic('Ванга');
$psychics[] = new Psychic('Пахом');
$psychics[] = new Psychic('Ведьма');

foreach ($psychics as $psychic) {
    if (
        $_SESSION['history'][$psychic->guess()][$psychic->name] 
            == 
        $_POST['number']
        ) {
            $psychic->addTrust();
    } else {
        $psychic->subtractTrust();
    }
}

header('Location: /index.php');
exit();