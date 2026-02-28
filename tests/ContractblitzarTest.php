<?php
/**
 * Tests for ContractBlitzar
 */

use PHPUnit\Framework\TestCase;
use Contractblitzar\Contractblitzar;

class ContractblitzarTest extends TestCase {
    private Contractblitzar $instance;

    protected function setUp(): void {
        $this->instance = new Contractblitzar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractblitzar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
