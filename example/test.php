<?php

require_once '../vendor/autoload.php';

use Xpdeal\GamblingServices\Services\DoubleService;
use Xpdeal\GamblingServices\Services\RandomService;

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$randon = new DoubleService;

dd($randon->run());
// jordan -> 0y9DOalJ