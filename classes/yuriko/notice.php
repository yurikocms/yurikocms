<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Yuriko_Notice{

	static protected $notices = array();
	static protected $views = array();

	/**
	 *
	 * @param <type> $type
	 * @return <type>
	 */
	public static function exists($type = NULL)
	{
		if ($type === NULL)
		{
			return (bool)((sizeof(self::$notices) OR (sizeof(self::$views))));
		}
		else
		{
			return (isset(self::$notices[$type])) OR (isset(self::$views[$type]));
		}
	}

	/**
	 *
	 * @param <type> $message
	 * @param <type> $type
	 */
	public static function add($message, $type = 'success')
	{
		self::$notices[$type][] = $message;
	}

	/**
	 *
	 * @param <type> $type
	 * @param <type> $template
	 */
	public static function render($type = NULL, $template = 'notice/render')
	{
		if ($type == NULL)
		{
			//echo all the types
			if (sizeof(self::$notices) == 0)
			{
				if (sizeof(self::$views) != 0)
				{
					foreach (self::$views as $view)
					{
						//display all the views (this is a repeat render)
						echo $view;
					}
				}
			}
			else
			{
				foreach (self::$notices as $type => $notices)
				{
					//reset the saved views
					self::$views = array();
					//save it incase it needs to be rendered again
					self::$views[$type] = View::factory($template)
						->set('type', $type)
						->set('notices', $notices);
					echo self::$views[$type];
				}
				//clear $notices for new ones
				self::$notices = array();
			}
		}
		else
		{
			//only echo specified type (if not from $notices then from $views
			if (isset(self::$notices[$type]))
			{
				self::$views[$type] = View::factory($template)
						->set('type', $type)
						->set('notices', self::$notices[$type]);
				echo self::$views[$type];
			}
			else
			{
				echo (isset(self::$views[$type]))? self::$views[$type] : NULL;
			}
		}
	}

	/**
	 * Saves all unrendered notices to the session
	 */
	public static function save()
	{
		Session::instance()->set('notices', self::$notices);
	}

	/**
	 * Loads all unread notices from the session
	 */
	public static function load()
	{
		self::$notices = Session::instance()->get_once('notices', array());
	}
}
