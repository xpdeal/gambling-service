<?php

require_once '../vendor/autoload.php';

use Xpdeal\GamblingServices\Services\RandomService;

function dd($data)
{
    // echo '<pre>';
    print_r($data);
    //echo '</pre>';
}

//$randon = new Hash;

dd(RandomService::flip(['Vermelho', 'Preto']));

// jordan -> 0y9DOalJ
