<?php

require(__DIR__ . " /../vendor/autoload.php");
require(__DIR__ . " /../array_functions.php");

use PHPUnit\Framework\TestCase;


class ArrayTest extends TestCase
{

	private $singleDimensionArray = ['a', 4, 7, 100, 'ty', 17];
//	private $twoDimensionArray = [ [k1 => k2],
// [k1 => k2],
// [k1 => k2],
//];

	public function testItWorks(): void
	{
		$excpetedArray = ['a', 'ty'];
		$decision = function ($item): bool {
			return is_string($item);
		};
		$this->assertSame(
			$excpetedArray,
			filter($this->singleDimensionArray, $decision)
		);



		$this->assertEquals(1, 1);
	}
}