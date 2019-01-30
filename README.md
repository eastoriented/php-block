# eastoriented/php-block [![Build Status](https://travis-ci.org/eastoriented/php-block.svg?branch=master)](https://travis-ci.org/eastoriented/php-block)

`eastoriented/php-block` is a east oriented PHP library to execute block of code using arguments.
All public methods in all classes return `void`.

## How to use it?

The file `src/block.php` define the interface `eastoriented\php\block`.  
The file `src/block/functor.php` contains a class which implements `eastoriented\php\block` using [PHP callable](http://php.net/callable):

```
use eastoriented\php\block;

(new block\functor(function() { echo 'Hello world!'; }))->blockArgumentsAre(); // display 'Hello world!'
(new block\functor(function($message) { echo $message; }))->blockArgumentsAre('Hello world!'); // display 'Hello world!'
(new block\functor(function($hello, $world) { echo $hello . ' ' . $world . '!'; }))->blockArgumentsAre('Hello', 'world'); // display 'Hello world!'
```

The file `src/block/exception.php` contains a class which implements `eastoriented\php\block` to throw exception:

```
use eastoriented\php\block;

(new block\exception(new \exception))->blockArgumentsAre(); // throw $exception
```

## Contributing

### About workflow

We're using pull request to introduce new features and bug fixes.  
Please, try to be explicit in your commit messages:

1. Explain why the change was made ;
2. Explain technical implementation (you can provide links to any relevant tickets, articles or other resources).

You can use the following template:

```
# If applied, this commit will...

# Explain why this change is being made

# Provide links to any relevant tickets, articles or other resources
```

To use it, just put it in a text file in (for example) your home and define it as a template:

```
# git config --global commit.template ~/.git_commit_template.txt
```

### About testing

To run unit tests, just do `make unit-tests`.  
Moreover, you can executre specific test file using `./bin/php tests/units/src/path/to/file.php`.

## Languages and tools

- PHP 7.[1-3] ;
- [*atoum*](http://docs.atoum.org).
