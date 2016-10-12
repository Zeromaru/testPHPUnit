<?php

namespace Hello;

class Person
{
	private $first_name;
	private $last_name;

	public function setFirstName($first_name)
	{
		$this->first_name = ucfirst(strtolower($first_name));
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setLastName($last_name)
	{
		$this->last_name = ucfirst(strtolower($last_name));
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
