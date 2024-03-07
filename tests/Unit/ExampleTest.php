<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_bla_bla(): void
    {
        $data = [
            [
                "name" => "test",
            ],
        ];

        $result = $data[0];

        $this->assertEquals(["name" => "test",], $result);
    }
}
