<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ASIA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("TOKIO", "PEKÍN", "BANGKOK"),
    array("NUEVA DELHI", "MUMBAI", "BANGALORE", "CALCUTA"),
    array("BEIJING", "SHANGHAI", "HONG KONG")
);

$Asia = array(
    'JAPÓN' => array(
        'Kanto' => array("TOKIO", "YOKOHAMA", "CHIBA"),
        'Kansai' => $cantones[1],
        'Chubu' => ["NAGOYA"],
        'Tohoku' => array("SENDAI", "AOMORI", "AKITA")
    ),

    'INDIA' => array(
        'Norte' => array("NUEVA DELHI", "JAIPUR", "LUCKNOW"),
        'Oeste' => $cantones[1],
        'Sur' => ["BANGALORE", "CHENNAI"],
        'Este' => array("CALCUTA", "BHUBANESWAR", "GUWAHATI")
    ),

    'CHINA' => array(
        'Norte' => array("BEIJING", "TIANJIN", "SHIJIAZHUANG"),
        'Este' => $cantones[1],
        'Sur' => ["CANTÓN", "SHENZHEN"],
        'Oeste' => array("CHENGDU", "CHONGQING", "XIAN")
    ),
);

?>

</body>

</html>
