<?php namespace eastoriented\php\block;

use eastoriented\php\block;

class exception
	implements
		block
{
	private
		$exception
	;

	function __construct(\exception $exception)
	{
		$this->exception = $exception;
	}

	function blockArgumentsAre(... $arguments) :void
	{
		throw $this->exception;
	}
}
