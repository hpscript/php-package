<?php
use PHPUnit\Framework\TestCase;
use hpscript\MyPackage\Arithmetic;

class ArithmeticTest extends TestCase {

	protected $object;

	protected function setUp(): void{
		$this->object = new Arithmetic();
	}

	public function add5(){
		$this->assertEquals(8, $this->object->add(3, 5));
	}

	public function add30(){
		$this->assertEquals(45, $this->object->add(15, 30));
	}

	public function subtract3(){
		$this->assertEquals(7, $this->object->subtract(10, 3));
	}

	public function subtract9(){
		$this->assertEquals(-6, $this->object->subtract(3, 9));
	}

	public function multiply6(){
		$this->assertEquals(24, $this->object->multiply(4, 6));
	}

	public function multiply5(){
		$this->assertEquals(-20, $this->object->multiply(4, -5));
	}

	public function testDivide(){
		$this->assertEquals(3, $this->object->divide(6, 2));
		$this->assertEquals(1, $this->object->divide(6, 6));
	}
}