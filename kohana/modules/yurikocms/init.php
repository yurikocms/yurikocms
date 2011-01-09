<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */

Route::set('yuriko.page', function($uri)
{
	//@TODO: Check for the page
	return array();
}, '<uri>')
	->defaults(array(
		'directory'  => 'yuriko',
		'controller' => 'page',
		'action'     => 'view',
	));
