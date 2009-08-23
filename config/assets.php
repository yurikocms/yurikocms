<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * This is where assets and asset dependencies are defined.
 * 
 * rules:
 * directories - if a view is used in one of these directories, the asset is loaded
 * views - if any of the views are used, the asset is loaded
 * regex - if the full view path matches this regex, the asset is loaded
 * exclude_directories - a list of directories to exclude from rules
 * exclude_views - a list of views to exclude from rules
 * exclude_regex - if the full view path matches this regex, the asset is not loaded
 *
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 *
 * Thanks Ebonhand for the feedback and great ideas.
 */

return array
(
	'default_styles' => array
	(
		'file' => array('media/css/styles', 'css'),
		'weight' => 50,
		// rules for when this asset should be included
		'rules' => array
		(
			// when any view inside the templates dir is loaded
			'directories' => array('templates'),
			// except for templates/ajax.php
			'exclude_views' => array('templates/ajax'),
		),
	),
	'framework' => array
	(
		'files' => array
		(
			array('media/css/reset', 'css'),
			array('media/css/typography', 'css'),
			array('media/css/960', 'css'),
		),
		'weight' => 0,
		'rules' => array
		(
			'directories' => array('templates'),
			'regex' => array('(.*)'),
			'exclude_views' => array('templates/ajax'),
		),
	),
	'ie6_fix' => array
	(
		'file' => array('media/css/ie6-styles', 'css'),
		'weight' => 55, // included after styles.css
		'wrapper' => array('<!--[if IE 6]>', '<![endif]-->'),
		'rules' => array
		(
			'directories' => array('templates'),
			'exclude_views' => array('ajax'),
		),
	),
);