<?php

function home()
{
	echo 'hello world!';
}


if (!is_callable($c = @$_GET['c'] ?: function() { home(); }))
	throw new Exception('Error');
$c();