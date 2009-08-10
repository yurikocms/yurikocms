<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */

/**
 * Setup Routes
 */
Route::set('admin', 'admin(/<permalink>(/<id>))')
	->defaults(array(
		'controller' => 'page',
		'action'     => 'load',
		'permalink'  => 'main',
		'directory'  => 'admin',
	));