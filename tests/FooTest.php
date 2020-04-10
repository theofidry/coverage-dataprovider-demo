<?php

declare(strict_types=1);

namespace Acme;

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function test_it_can_inverse_passed_value(int $value, ?int $expected): void
    {
        $this->assertSame($expected, Foo::inverse($value));
    }

    public function valueProvider(): iterable
    {
        yield [0, null];

        yield [-1, 1];

        yield [1, -1];
    }
}
