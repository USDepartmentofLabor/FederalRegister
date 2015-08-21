<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name DOL Federal Register
 *
 * @package Template loader
 * @author  johnsonpatrickk (Patrick Johnson Jr.)
 * @license	http://developer.dol.gov
 * @version 1.0.0
 */

/*
|--------------------------------------------------------------------------
| Template loader class. This is custom loader class that overrides CI_Loader
| default class
|--------------------------------------------------------------------------
|
|
*/
 
class MY_Loader extends CI_Loader
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function template($template_name, $vars = array())
	{
		$template = 'default';
		
		$this->view($template. '/header', $vars);
		$this->view($template. '/' . $template_name, $vars);
		$this->view($template. '/footer', $vars);
	}
}