<?php

namespace Hello;

class FizzBuzz
{
	private $number;

	public function setNumber($number)
	{
		$this->number = (int) $number;
	}

	public function getResult()
	{
		if (($this->number % 3 == 0) && ($this->number % 5 == 0)) {
			return "FizzBuzz";
		} else if ($this->number % 3 == 0) {
			return "Fizz";
		} else if ($this->number % 5 == 0) {
			return "Buzz";
		} else {
			return $this->number;
		}
	}
}
