<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name DOL Federal Register
 * 
 * @package Index Controller
 * @author  johnsonpatrickk (Patrick Johnson Jr.)
 * @license	http://developer.dol.gov
 * @version 1.0.0
 */

class Index extends CI_Controller
{
	var $data = array();
	
	public function __construct()
	{
		parent::__construct();
		
		$this->data['title'] = "U.S. Department of Labor";
		$this->data['subtitle'] = "Register Documents";
		$this->data['browse_doc'] = "Browse all documents by:";
	}
	
	public function index()
	{
		$this->load->template("index", $this->data);
	}
	
	
}