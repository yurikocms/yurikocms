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
		$page = ORM::factory('page')->where('name','=',$permalink)->find();
		//get all nodes on this page
		$page_nodes = $page->page_nodes->find_all();
		foreach ($page_nodes as $page_node)
		{
			$route_params = array();
			//get this node
			$node = $page_node->node;
			//get custom parameters for this node
			$params = $node->node_route_parameters->find_all();
			foreach ($params as $param)
			{
				$route_params[$param->key] = $param->value;
			}
			//replace node params with page_node params
			$params = $page_node->node_route_parameters->find_all();
			foreach ($params as $param)
			{
				$route_params[$param->key] = $param->value;
			}
			//get the route
			$node_route = $node->node_route;
			//route name (to make the sub-request)
			$route = route::get($node_route->name);
			//find the uri (@TODO: parameters)
			$uri = $route->uri($route_params);
			//execute sub-request and put output in the right section
			section::set($page_node->section, Request::factory($uri)
				->execute());
		}

	}

} // End Yuriko Page Controller
