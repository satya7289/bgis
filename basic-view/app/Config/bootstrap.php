<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as 
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Cache Engine Configuration
 * Default settings provided below
 *
 * File storage engine.
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'File', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 * 		'path' => CACHE, //[optional] use system tmp directory - remember to use absolute path
 * 		'prefix' => 'cake_', //[optional]  prefix every cache file with this string
 * 		'lock' => false, //[optional]  use file locking
 * 		'serialize' => true, // [optional]
 * 		'mask' => 0666, // [optional] permission mask to use when creating cache files
 *	));
 *
 * APC (http://pecl.php.net/package/APC)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Apc', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 *
 * Xcache (http://xcache.lighttpd.net/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Xcache', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional] prefix every cache file with this string
 *		'user' => 'user', //user from xcache.admin.user settings
 *		'password' => 'password', //plaintext password (xcache.admin.pass)
 *	));
 *
 * Memcache (http://memcached.org/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Memcache', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 		'servers' => array(
 * 			'127.0.0.1:11211' // localhost, default port 11211
 * 		), //[optional]
 * 		'persistent' => true, // [optional] set this to false for non-persistent connections
 * 		'compress' => false, // [optional] compress data in Memcache (slower, but uses less memory)
 *	));
 *
 *  Wincache (http://php.net/wincache)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Wincache', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 *
 * Redis (http://http://redis.io/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Redis', //[required]
 *		'duration'=> 3600, //[optional]
 *		'probability'=> 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *		'server' => '127.0.0.1' // localhost
 *		'port' => 6379 // default port 6379
 *		'timeout' => 0 // timeout in seconds, 0 = unlimited
 *		'persistent' => true, // [optional] set this to false for non-persistent connections
 *	));
 */
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models', '/next/path/to/models'),
 *     'Model/Behavior'            => array('/path/to/behaviors', '/next/path/to/behaviors'),
 *     'Model/Datasource'          => array('/path/to/datasources', '/next/path/to/datasources'),
 *     'Model/Datasource/Database' => array('/path/to/databases', '/next/path/to/database'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions', '/next/path/to/sessions'),
 *     'Controller'                => array('/path/to/controllers', '/next/path/to/controllers'),
 *     'Controller/Component'      => array('/path/to/components', '/next/path/to/components'),
 *     'Controller/Component/Auth' => array('/path/to/auths', '/next/path/to/auths'),
 *     'Controller/Component/Acl'  => array('/path/to/acls', '/next/path/to/acls'),
 *     'View'                      => array('/path/to/views', '/next/path/to/views'),
 *     'View/Helper'               => array('/path/to/helpers', '/next/path/to/helpers'),
 *     'Console'                   => array('/path/to/consoles', '/next/path/to/consoles'),
 *     'Console/Command'           => array('/path/to/commands', '/next/path/to/commands'),
 *     'Console/Command/Task'      => array('/path/to/tasks', '/next/path/to/tasks'),
 *     'Lib'                       => array('/path/to/libs', '/next/path/to/libs'),
 *     'Locale'                    => array('/path/to/locales', '/next/path/to/locales'),
 *     'Vendor'                    => array('/path/to/vendors', '/next/path/to/vendors'),
 *     'Plugin'                    => array('/path/to/plugins', '/next/path/to/plugins'),
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */


/**
 * You can attach event listeners to the request lifecyle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
 
 
 Cache::config('default', array('engine' => 'File'));
//putenv('TZ=UTC');
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');
// Prints something like: Monday 8th of August 2005 03:12:46 PM
define('baseUrl','http://localhost/BGIS/');

//global $timezone;
//$timezone = array('hr' => 5, 'min' => 30);

function formatDate($date, $format = "d-m-Y", $timestamp = false)
{
	if($timestamp == false)
	{
		$date = strtotime($date);
	}
	return gmdate($format, $date);
}

/** Check if variable is empty or not---
*/
function isEmpty($var)
{
	if(empty($var)) return true;
	else return false;
}
/** Function to show message with specified css class
*/
function showMsg($msg, $class = 'success', $style = '')
{
	$message = "";
	if(is_array($msg))
	{
		foreach($msg as $msg_no =>$msg_val)
			$message .= '<div>'.$msg_val.'</div>'.chr(13);
	}
	else $message = '<div>'.$msg.'</div>';
	if(!isEmpty($style)) $style = ' style="'.$style.'"';
	return '<div class="'.$class.'"'.$style.'>'.$message.'</div>';
}

/** This function is used to convert date to timestamp--
*/
function stringToTime($date, $hr = '', $min = '', $sec = '', $format = 'dd/mm/yyyy'){
	if(isEmpty($hr)) $hr = 0;
	if(isEmpty($min)) $min = 0;
	if(isEmpty($sec)) $sec = 0;
	if(isEmpty($date)) return false;
	$sep = substr($date, 2, 1);
	list($dd, $mm, $yyyy) = split($sep, $date);
	$timestamp = gmmktime($hr, $min, $sec, $mm, $dd, $yyyy);
	return $timestamp;
}

/** Function to get current date and time in specified format
*/
function today($format = 'Y-m-d H:i:s')
{
	return gmdate($format);
}

/** Check if variable is set or not---
*/
function isVar($var)
{
	if(isset($$var) && !empty($$var)) return $var;
	else return false;
}

/** Check if selected date is valid--
*/
function isDate($date, $format = 'dd-mm-yyyy')
{
	$dateArr = explode('-', $date);
	
	if(sizeof($dateArr) < 3 || empty($dateArr)) return false;

	if(strlen($dateArr[1]) < 2 || strlen($dateArr[0]) < 2 || strlen($dateArr[2]) < 4) return false;
	
	if($format == 'dd-mm-yyyy')
	{
		return checkdate($dateArr[1], $dateArr[0], $dateArr[2]);
	}
}

/** Create Timestamp for entered date--
*/
function getTimestamp($date, $format = 'dd-mm-yyyy')
{
	if(isEmpty($date)) return '0';
	
	$dateArr = explode('-', $date);
	if(sizeof($dateArr) < 3 || empty($dateArr)) return '0';
	
	if($format == 'dd-mm-yyyy')
	{
		return $timestamp = gmmktime(0, 0, 0, $dateArr[1], $dateArr[0], $dateArr[2]);
	}
}

/** Function to get current GMT---
*/
function currGMT($format = "U")
{
	return gmdate($format);
}

/** Get Calculateed date
*/
function getCalcDate($format = 'Y-m-d H:i:s', $hr = 0, $min = 0, $sec = 0, $mnth = 0, $day = 0, $yr = 0)
{
	$calcTime = gmmktime(	(gmdate("H") + $hr), (gmdate("i") + $min), (gmdate("s") + $sec), 
						(gmdate("m") + $mnth), (gmdate("d") + $day), (gmdate("Y") + $yr));
	return gmdate($format, $calcTime);
}

/** Add/Subtract Datetime
*/
function addDateTime($date, $format = 'Y-m-d H:i:s', $hr = 0, $min = 0, $sec = 0, $mnth = 0, $day = 0, $yr = 0)
{
	/*If timestamp is not passed then Assume date is passed as Y-m-d H:i:s*/
	if(!is_numeric($date)) $date = strtotime($date);

	$calcTime = mktime(	(date("H", $date) + $hr), (date("i", $date) + $min), 
							(date("s", $date) + $sec), (date("m", $date) + $mnth), 
							(date("d", $date) + $day), (date("Y", $date) + $yr));
	return date($format, $calcTime);
}

/** Function to get time as per timezone. Default would be IST
*/
function getZoneTime($format = 'Y-m-d H:i:s')
{
	global $timezone;
	$calcTime = gmmktime(	(gmdate("H") + $timezone['hr']), (gmdate("i") + $timezone['min']), gmdate("s"), 
							gmdate("m"), gmdate("d"), gmdate("Y"));
	return gmdate($format, $calcTime);
}
/** Function to get Posted Variable
*/
function postedVar($var)
{
	if(isset($_POST[$var]) && is_array($_POST[$var])) return $_POST[$var];
	elseif(isset($_POST[$var]) && !isEmpty($_POST[$var])) return stripslashes($_POST[$var]);
	else return false;
}

/** Function to get Requested Variable
*/
function requestedVar($var)
{
	if(isset($_REQUEST[$var]) && !isEmpty($_REQUEST[$var])) return stripslashes($_REQUEST[$var]);
	else return false;
}


/** Function to change passed DateTime as per timezone. Default would be IST
*/
function changeDateAsPerZoneTime($date, $timestamp = false)
{
	$format = 'Y-m-d H:i:s';
	global $timezone;
	if($timestamp == false) $date = strtotime($date);
	
	$calcTime = $date + (($timezone['hr'] * 60 * 60) + ($timezone['min'] * 60));
	return date($format, $calcTime);
}
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));
CakePlugin::loadAll();

?>
