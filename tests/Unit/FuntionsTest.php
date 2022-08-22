<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FuntionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_function_email()
    {   
        $result = validate_email('a@admin.com');
        $this->assertTrue($result);

        $result = validate_email('a@@admin.com');
        $this->assertFalse($result);
    }
}
