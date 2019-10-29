<?php namespace eastoriented\php\block;

use eastoriented\php;

class container
	implements
		php\block
{
	private
		$iterator,
		$blocks
	;

	function __construct(php\container\iterator $iterator, php\block... $blocks)
	{
		$this->iterator = $iterator;
		$this->blocks = $blocks;
	}

	function blockArgumentsAre(... $arguments) :void
	{
		$this->iterator
			->variablesForIteratorBlockAre(
				new php\container\iterator\block\functor(
					function($iterator, $block)
					{
						$block->blockArgumentsAre();
					}
				),
				... $this->blocks
			)
		;
	}
}
