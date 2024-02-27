<?php

$form_sent = !empty($_GET);
$hotels_result = ($form_sent) ? [] : $hotels;

$min_vote = $_GET["min_vote"] ?? false;
// echo ("Voto minimo: " . $min_vote);
$park = $_GET["park"] ?? " ";

if ($form_sent) {

    if ($park == "true") {
        $park = true;
        // echo ("Preferenza parcheggio: Si! <br/>");
    } elseif ($park == "false") {
        $park = false;
        // echo ("Preferenza parcheggio: No! <br/>");
    }
    ;

    // foreach ($hotels as $hotel) {
    //     if (($hotel["vote"] >= $min_vote) && ($hotel["parking"] == $park)) {
    //         $hotels_result[] = $hotel;
    //     }
    // }

    $hotels = array_filter(
        $hotels,
        fn($hotel) => (
            ($hotel["vote"] >= $min_vote) && ($hotel["parking"] == $park))
    );
}
;