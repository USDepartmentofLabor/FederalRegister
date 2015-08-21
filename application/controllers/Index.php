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
		$this->data['browse_agency'] = "Federal Register Documents by Agency";
	}
	
	public function index()
	{
		$this->load->template("index", $this->data);
	}
	
	public function agency()
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$rest_server = REST_SERVER;
		$get_url = "https://{$rest_server}/agencies";
			
		$ch = curl_init();
		curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_URL => $get_url,
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => TRUE // set to TRUE on QA and Prod
		));
		
		// Execute - returns response
		$response = curl_exec($ch);
		if(!empty($response))
		{
			//$json_string = json_decode(json_encode($response, JSON_PRETTY_PRINT));
			//$json_string = $this->pretty_print($response);
			$json = json_decode($response, TRUE);
			
			$this->data['agency_list'] = $json;
		}
		else
		{
			echo 'Failed to retrieve data';
		}

		$this->load->template("agency", $this->data);
	}
	
	// browse agency by document list
	public function document_list($id)
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$rest_server = REST_SERVER;
		$get_url = "https://{$rest_server}/articles?conditions%5Bagency_ids%5D%5B%5D={$id}&order=newest";
			
		$ch = curl_init();
		curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_URL => $get_url,
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => TRUE // set to TRUE on QA and Prod
		));
		
		// Execute - returns response
		$response = curl_exec($ch);
		if(!empty($response))
		{
			$json = json_decode($response, TRUE);			
			$this->data['document'] = $json;
		}
		else
		{
			echo 'Failed to retrieve data';
		}

		$this->load->template("document_view", $this->data);
	}
	
	// this private method regurgitates the already parsed JSON string into a prettier format
	private function pretty_print($response)
	{
		$result = '';
		$level = 0;
		$in_quotes = false;
		$in_escape = false;
		$ends_line_level = NULL;
		$json_length = strlen( $response );
	
		for( $i = 0; $i < $json_length; $i++ ) {
			$char = $response[$i];
			$new_line_level = NULL;
			$post = "";
			if( $ends_line_level !== NULL ) {
				$new_line_level = $ends_line_level;
				$ends_line_level = NULL;
			}
			if ( $in_escape ) {
				$in_escape = false;
			} else if( $char === '"' ) {
				$in_quotes = !$in_quotes;
			} else if( ! $in_quotes ) {
				switch( $char ) {
					case '}': case ']':
						$level--;
						$ends_line_level = NULL;
						$new_line_level = $level;
						break;
	
					case '{': case '[':
						$level++;
					case ',':
						$ends_line_level = $level;
						break;
	
					case ':':
						$post = " ";
						break;
	
					case " ": case "\t": case "\n": case "\r":
						$char = "";
						$ends_line_level = $new_line_level;
						$new_line_level = NULL;
						break;
				}
			} else if ( $char === '\\' ) {
				$in_escape = true;
			}
			if( $new_line_level !== NULL ) {
				$result .= "\n".str_repeat( "\t", $new_line_level );
			}
			$result .= $char.$post;
		}
	
		return $result;
	}
}