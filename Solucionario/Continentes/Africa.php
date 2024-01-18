<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ÁFRICA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("LUSAKA", "KIGALI", "ACCRA"),
    array("DAR ES SALAAM", "ADDIS ABABA", "MAPUTO", "LIBREVILLE"),
    array("BAMAKO", "BRAZZAVILLE", "ANTANANARIVO")
);

$Africa = array(
    'ZAMBIA' => array(
        'Lusaka' => array("LUSAKA", "NDOLA", "KITWE"),
        'Ndola' => $cantones[1],
        'Kitwe' => ["KITWE"],
        'Kabwe' => array("KABWE", "CHINGOLA", "MUFULIRA"),
        'Livingstone' => array("LIVINGSTONE", "CHOMA", "MONZE")
    ),

    'TANZANIA' => array(
        'Dar es Salaam' => array("DAR ES SALAAM", "MBEYA", "ARUSHA"),
        'Zanzibar' => $cantones[1],
        'Dodoma' => ["DODOMA"],
        'Mwanza' => array("MWANZA", "SHINYANGA", "MUSOMA")
    ),

    'MALI' => array(
        'Bamako' => array("BAMAKO", "SÉGOU", "MOPTI"),
        'Sikasso' => $cantones[1],
        'Timbuktu' => ["TIMBUKTU"],
        'Gao' => array("GAO", "KIDAL", "TOMBOUCTOU")
    ),
);

?>

</body>

</html>

