<?php

namespace Xpdeal\GamblingServices\Services;

use Exception;

class RandomService
{
    public static function random(int $min, int $max): int
    {
        return mt_rand($min, $max);
    }

    /**
     * @param array<mixed> $sides
     */
    public static function flip(array $sides = ['A', 'B']): mixed
    {
        if (count($sides) !== 2) {
            return new Exception('Invalide params in $sides (require 2 values)');
        }

        return [
            'result' => $sides[mt_rand(0, 1)],
            'probably_fair' => (new HashService)->encrypty('1qaqaqaq')
        ];
    }
}
