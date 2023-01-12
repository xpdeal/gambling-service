<?php

namespace Xpdeal\GamblingServices\Services;

use ProvablyFair\Algorithm;
use ProvablyFair\Seed;
use ProvablyFair\ProvablyFair;
use Ramsey\Uuid\Uuid;

class DoubleService
{

    private $positions;

    private $sides = [
        'even' => 'red',
        'odd' => 'black',
        'jocker' => 'white'
    ];

    public function __construct(int $positions = 28)
    {
        $this->positions = $positions + 1;
    }

    public function run()
    {
        $win = RandomService::random(0, $this->positions);

        return [
            'uuid' => Uuid::uuid4()->toString(),
            'win' => $win,
            'provably_fair' => 'testestestestetse',
            'ts' => time()
        ];
    }
}
