<?php

// $ch теперь объект CurlHandle
$ch = curl_init();

enum Status {
    case PENDING;
    case DONE;
}

// Объект Enum
$object = Status::PENDING;

// Переменная, содержащая true 
$true = true;

$cases = [
    $ch,   // или любой другой объект
    new \stdClass(),
];

foreach ($cases as $obj) {
    var_dump("=== case ===");
    var_dump($obj == true);
    var_dump($obj == $true);
    var_dump((bool)$obj);
}
