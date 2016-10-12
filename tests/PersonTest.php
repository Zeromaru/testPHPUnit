<?php

use \Hello\Person;

class PersonTest extends PHPUnit_Framework_TestCase
{
	function setUp()
	{
		$this->name = new Person();
	}

	function testFirstNameWithAllCharacterInLowercase()
	{
		$this->name->setFirstName('pinyo');
		$expect = 'Pinyo';
		$actual = $this->name->getFirstName();
		$this->assertEquals($expect, $actual);
	}

	function testFirstNameWithUppercaseYCharacter()
	{
		$this->name->setFirstName('pinYo');
		$expect = 'Pinyo';
		$actual = $this->name->getFirstName();
		$this->assertEquals($expect, $actual);
	}

	function testLastNameWithAllCharacterInLowercase()
	{
		$this->name->setLastName('boonsit');
		$expect = 'Boonsit';
		$actual = $this->name->getLastName();
		$this->assertEquals($expect, $actual);
	}

	function testFullName()
	{
		$this->name->setFirstName('pinyo');
		$this->name->setLastName('boonsit');
		$expect = 'Pinyo Boonsit';
		$actual = $this->name->getFullName();
		$this->assertEquals($expect, $actual);
	}
}
