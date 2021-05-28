<?php namespace eastoriented\php\tests\units\block;

require __DIR__ . '/../../runner.php';

use eastoriented\tests\units;
use eastoriented\php;

class reference extends units\test
{
	function testClass()
	{
		$this->testedClass
			->implements('eastoriented\php\block')
		;
	}

	function testBlockArgumentsAre()
	{
		$this
			->given(
				$variable = null,
				$block = new php\block\reference($variable),
				$argument = uniqid()
			)
			->if(
				$block->blockArgumentsAre($argument)
			)
			->then
				->object($block)
					->isEqualTo(new php\block\reference($variable))
				->string($variable)
					->isEqualTo($argument)

			->if(
				$block->blockArgumentsAre()
			)
			->then
				->object($block)
					->isEqualTo(new php\block\reference($variable))
				->string($variable)
					->isEqualTo($argument)
		;
	}
}
