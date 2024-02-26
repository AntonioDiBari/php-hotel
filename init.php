<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


$form_sent = !empty($_GET);
$hotels_result = ($form_sent) ? [] : $hotels;

if ($form_sent) {

    $park = $_GET["park"] ?? "";
    if ($park == "true") {
        $park = true;
    } elseif ($park == "false") {
        $park = false;
    };
    var_dump($park);

    $min_vote = $_GET["min_vote"] ?? "";
    echo $min_vote;

    foreach ($hotels as $hotel) {
        if (($hotel["vote"] >= $min_vote) && ($hotel["parking"] == $park)) {
            $hotels_result[] = $hotel;
        }
    }
};
