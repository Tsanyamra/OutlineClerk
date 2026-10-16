<?php
/**
 * Tests for OutlineClerk
 */

use PHPUnit\Framework\TestCase;
use Outlineclerk\Outlineclerk;

class OutlineclerkTest extends TestCase {
    private Outlineclerk $instance;

    protected function setUp(): void {
        $this->instance = new Outlineclerk(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlineclerk::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
