<?php

$form_sent = !empty($_GET);
$hotels_result = ($form_sent) ? [] : $hotels;

if ($form_sent) {

    $park = $_GET["park"] ?? "";
    if ($park == "true") {
        $park = true;
        echo ("Preferenza parcheggio: Si! <br/>");
    } elseif ($park == "false") {
        $park = false;
        echo ("Preferenza parcheggio: No! <br/>");
    }
    ;

    $min_vote = $_GET["min_vote"] ?? "";
    echo ("Voto minimo: " . $min_vote);

    foreach ($hotels as $hotel) {
        if (($hotel["vote"] >= $min_vote) && ($hotel["parking"] == $park)) {
            $hotels_result[] = $hotel;
        }
    }
}
;