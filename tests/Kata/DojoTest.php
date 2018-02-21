<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class DojoTest extends TestCase
{
    public function testShouldSayHello()
    {
        // Given
        $dojoUnderTest = new Dojo();

        // When
        $actual = $dojoUnderTest->hello();

        // Then
        $this->assertEquals('Welcome in Kata Dojo', $actual);
    }
}
