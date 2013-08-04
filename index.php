<?php
// Include bootstrap
require('bootstrap.php');

try
{
	// Load controller dispatch passing URL routes
	$dispatch = new Dispatch(config('Route')->routes);

	// Run controller based on URL path and HTTP request method
	$controller = $dispatch->controller(PATH, getenv('REQUEST_METHOD'));

	// Send the controller response
	$controller->send();
}
catch (Exception $e)
{
	\Micro\Error::exception($e);
}
