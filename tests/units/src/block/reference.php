<?php namespace eastoriented\php\block\tests\units\block;

require __DIR__ . '/../../runner.php';

use eastoriented\tests\units;

class reference extends units\test
{
	function testClass()
	{
		$this->testedClass
			->implements('eastoriented\php\block')
		;
	}
}
