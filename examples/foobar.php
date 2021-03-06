<?php
/**
 * TrackMania Web Services SDK for PHP - Examples
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @author      $Author$:
 * @version     $Revision$:
 * @date        $Date$:
 */
require_once __DIR__.'/../src/autoload.php';

try
{
	$foobar = new TrackMania\WebServices\Foobar();
	print_r($foobar->get());
	echo "\n";
	print_r($foobar->delete());
	echo "\n";
}
catch(\TrackMania\WebServices\Exception $e)
{
	printf('HTTP Response: %d %s', $e->getHTTPStatusCode(),
		$e->getHTTPStatusMessage());
	echo "\n";
	printf('API Response: %s (%d)', $e->getMessage(), $e->getCode());
	echo "\n";
}
echo "\n";
?>