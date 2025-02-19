<?php 

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testHelloWorld() {
        require_once __DIR__ . '/../src/index.php';
        $this->assertEquals("Hello, World!", sayHello());
    }
}