<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> EUROPA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("LONDRES", "MANCHESTER", "EDIMBURGO"),
    array("BERLÍN", "MÚNICH", "HAMBURGO", "FRANKFURT"),
    array("AMSTERDAM", "ROTTERDAM", "UTRECHT")
);

$Europa = array(
    'REINO UNIDO' => array(
        'Inglaterra' => array("LONDRES", "MANCHESTER", "EDIMBURGO"),
        'Escocia' => $cantones[1],
        'Gales' => ["CARDIFF"],
        'Irlanda del Norte' => array("BELFAST", "LONDONDERRY", "ARMAGH")
    ),

    'ALEMANIA' => array(
        'Berlín' => array("BERLÍN", "MÚNICH", "HAMBURGO", "FRANKFURT"),
        'Baviera' => $cantones[1],
        'Hesse' => ["FRANKFURT"],
        'Renania del Norte-Westfalia' => array("COLONIA", "DÜSSELDORF", "ESSEN")
    ),

    'PAÍSES BAJOS' => array(
        'Holanda Septentrional' => array("AMSTERDAM", "HAARLEM", "ALKMAAR"),
        'Holanda Meridional' => $cantones[1],
        'Utrecht' => ["UTRECHT"]
    ),
);

?>

</body>

</html>
