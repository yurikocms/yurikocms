<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */
 
class Controller_Yuriko_Page extends Controller_Template {

	/**
	 * 'Builds' the page based on $permalink.
	 * Finds all the different nodes this page is made of
	 * and initializes all the sub-requests, placing the response
	 * in the right section of the page.
	 *
	 * @param string $permalink - page permalink
	 */
	public function action_index($permalink = NULL)
	{
		// the route would be found in the node_routes table
		$route = route::get('yuriko_admin');
		// the params would be found in the node_route_params
		$uri1 = $route->uri(array('params' => 'Cool Nav!'));
		$uri2 = $route->uri(array('params' => 'Cool Content!'));
		$uri3 = $route->uri(array('params' => 'Cool Side Nav!'));
		$uri4 = $route->uri(array('params' => 'Cool Copyright!'));
		// 'Main Content' would be the section found in the DB
		section::set('Sub-Header', Request::factory($uri1)->execute());
		section::set('Main Content', Request::factory($uri2)->execute());
		section::set('Side Panel', Request::factory($uri3)->execute());
		section::set('Gutter', Request::factory($uri4)->execute());
	}

} // End Yuriko Page Controller
