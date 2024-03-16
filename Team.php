<?php

class Team
{
	protected $name;

	protected $members = [];

	public function __construct($name, $members = [])
	{
		$this->name = $name;
		$this->members = $members;
	}

	public static function start(...$params)
	{
		return new static(...$params);
	}

	public function name()
	{
		return $this->name;
	}

	public function members()
	{
		return $this->members;
	}

	public function add($name)
	{
		$this->memberes[] = $name;
	}

	public function cancel()
	{

	}

	public function manager()
	{

	}
}

$acme = new Team('Acme',[
	'Jane Doe',
	'John Doe'
]);



var_dump($acme);