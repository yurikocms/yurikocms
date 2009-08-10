<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */

/**
 * Setup notices
 */
Event::add('yuriko.post_routes', array('notice', 'load'));
//save the unused notices right before headers are sent or user is redirected
Event::add('yuriko.send_headers', array('notice', 'save'));
Event::add('yuriko.redirect', array('notice', 'save'));

/**
 * Setup Routes
 */
Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'main',
		'action'     => 'index',
		'directory'  => 'admin',
	));