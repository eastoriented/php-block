<?php namespace eastoriented\php\block;

use eastoriented\php;

class functor
	implements
		php\block
{
	private
		$callable
	;

	function __construct(callable $callable)
	{
		$this->callable = $callable;
	}

	function blockArgumentsAre(... $arguments) :void
	{
		call_user_func_array($this->callable, $arguments);
	}
}
