<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /** @test */
    public function test_que_ca_marche()
    {
        ob_start();
        include 'public/index.php';
        $result = ob_get_clean();

        $this->assertEquals("Hello", $result);
    }
}
