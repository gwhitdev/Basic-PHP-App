<?php
namespace App\Models;

class Task
{
	public $description;
	public $completed = 0;

	public function __construct(string $description)
	{
		$this->description = $description;
	}
}