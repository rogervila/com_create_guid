<?php

use PHPUnit\Framework\TestCase;

final class ImplementationTest extends TestCase
{
  public function testImplementation()
  {
    $this->assertTrue(function_exists('com_create_guid'));
  }
}
