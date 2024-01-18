<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> OCEANÍA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("SÍDNEY", "MELBOURNE", "BRISBANE"),
    array("AUCKLAND", "WELLINGTON", "CHRISTCHURCH", "HAMILTON"),
    array("PORT MORESBY", "LAE", "MADANG")
);

$Oceania = array(
    'AUSTRALIA' => array(
        'Nueva Gales del Sur' => array("SÍDNEY", "NEWCASTLE", "WOLLONGONG"),
        'Queensland' => $cantones[1],
        'Victoria' => ["MELBOURNE", "GEELONG"],
        'Australia Occidental' => array("PERTH", "FREMANTLE", "BUNBURY")
    ),

    'NUEVA ZELANDA' => array(
        'Isla Norte' => array("AUCKLAND", "WELLINGTON", "HAMILTON"),
        'Isla Sur' => $cantones[1],
        'Islas Chatham' => ["WAITANGI", "KAIKOURA"],
        'Islas Subantárticas' => array("DUNEDIN", "INVERCARGILL", "BLUFF")
    ),

    'PAPÚA NUEVA GUINEA' => array(
        'Región de Papúa' => array("PORT MORESBY", "LAE", "MADANG"),
        'Región de Momase' => $cantones[1],
        'Región de Tierras Altas' => ["MOUNT HAGEN", "GOROKA"],
        'Región de Islas' => array("ALOTAU", "KAVIENG", "MANUS")
    ),
);

?>

</body>

</html>
