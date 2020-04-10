<?php

declare(strict_types=1);

namespace Acme;

final class Foo
{
    public static function inverse(int $x): ?int
    {
        if ($x === 0) {
            return null;
        }

        return -$x;
    }
}
