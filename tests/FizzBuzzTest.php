<?php

use \Hello\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	function setUp()
	{
		$this->number = new FizzBuzz();
	}

	function testNumber3IsFizzOrBuzzOrFizzBuzzOrOther()
	{
		$this->number->setNumber(3);
		$expect = 'Fizz';
		$actual = $this->number->getResult();
		$this->assertEquals($expect, $actual);
	}

	function testNumber5IsFizzOrBuzzOrFizzBuzzOrOther()
	{
		$this->number->setNumber(5);
		$expect = 'Buzz';
		$actual = $this->number->getResult();
		$this->assertEquals($expect, $actual);
	}

	function testNumber15IsFizzOrBuzzOrFizzBuzzOrOther()
	{
		$this->number->setNumber(15);
		$expect = 'FizzBuzz';
		$actual = $this->number->getResult();
		$this->assertEquals($expect, $actual);
	}

	function testNumber11IsFizzOrBuzzOrFizzBuzzOrOther()
	{
		$this->number->setNumber(11);
		$expect = 11;
		$actual = $this->number->getResult();
		$this->assertEquals($expect, $actual);
	}
}
