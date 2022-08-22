<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    public function test_email()
    {   
        $data = "a@admin.com";
        $result = Email::validate($data);
        $this->assertTrue($result);
    }
}
