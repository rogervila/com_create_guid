<?php

use PHPUnit\Framework\TestCase;

final class ImplementationTest extends TestCase
{
    public function testImplementation()
    {
        $this->assertTrue(function_exists('com_create_guid'));

        $result = com_create_guid();

        $this->assertEquals(36, strlen($result));
        $this->assertEquals('-', substr($result, 8, 1));
        $this->assertEquals('-', substr($result, 13, 1));
        $this->assertEquals('-', substr($result, 18, 1));
        $this->assertEquals('-', substr($result, 23, 1));
    }
}
