<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$openingTime = [
    'monday' => '9am - 17pm',
    'thuesday' => '9am - 17pm',
    'wednesday' => '9am - 12am',
    'thurday' => '9am - 17pm',
    'Friday' => '9am - 15pm',
    'saterday' => '10am - 12pm',
    'Sunday' => 'closed',
];

echo $twig->render('details.html.twig', ['openingTime' => $openingTime]);