<?php namespace eastoriented\php\block;

use eastoriented\php\block;

class reference extends block\functor
{
	function __construct(& $reference)
	{
		$this->reference = & $reference;
	}

	function blockArgumentsAre(...$arguments): void
	{
		if (array_key_exists(0, $arguments))
		{
			$this->reference = $arguments[0];
		}
	}
}
