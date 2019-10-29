<?php namespace eastoriented\php\block\container;

use eastoriented\php\{
	block,
	container\iterator
};

class fifo extends block\container
{
	function __construct(block... $blocks)
	{
		parent::__construct(new iterator\fifo, ... $blocks);
	}
}
