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
			
		// call curl private method for processing request
		$response = $this->curl_call($get_url, $useragent);
		
		// Execute - returns response
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
	
	public function doc_by_agency($type)
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$rest_server = REST_SERVER;
		$get_url = "https://{$rest_server}/agencies";
			
		// call curl private method for processing request
		$response = $this->curl_call($get_url, $useragent);
	
		// Execute - returns response
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
		
		$this->data['doc_type'] = $type;
		$this->load->template("doc_agency", $this->data);
	}
	
	// browse agency by document list
	public function document_list($id)
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$rest_server = REST_SERVER;
		$get_url = "https://{$rest_server}/articles?conditions%5Bagency_ids%5D%5B%5D={$id}&order=newest";
		//$get_url = "https://{$rest_server}/articles.json?conditions%5Bagencies%5D%5B%5D=labor-department&conditions%5Bagencies%5D%5B%5D=labor-statistics-bureau&conditions%5Btype%5D%5B%5D=PRORULE&fields%5B%5D=agencies&fields%5B%5D=pdf_url&order=relevance&page=2";
			
		// call curl private method for processing request
		$response = $this->curl_call($get_url, $useragent);
		
		if(!empty($response))
		{
			$json = json_decode($response, TRUE);			
			$this->data['document'] = $json;
		}
		else
		{
			echo 'Failed to retrieve data';
		}
		
		$config = array();
		$config["base_url"] = base_url("index/document_list/{$id}/");
		$total_row = count($this->data['document']);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 1;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page = ($this->uri->segment(3)) ;
		}
		else
		{
			$page = 1;
		}
		
		$this->data["results"] = $this->data['document'];
		$str_links = $this->pagination->create_links();
		$this->data["links"] = explode('&nbsp;',$str_links );

		$this->load->template("document_view", $this->data);
	}
	
	// view agency by document type
	public function document_type($id, $type)
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$rest_server = REST_SERVER;
		$get_url = "https://{$rest_server}/articles?conditions%5Bagency_ids%5D%5B%5D={$id}&order=newest";
			
		// call curl private method for processing request
		$response = $this->curl_call($get_url, $useragent);
	
		if(!empty($response))
		{
			$json = json_decode($response, TRUE);
			$this->data['document'] = $json;
		}
		else
		{
			echo 'Failed to retrieve data';
		}
	
		$config = array();
		$config["base_url"] = base_url("index/document_type/{$doc_type}/");
		$total_row = count($this->data['document']);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 1;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
	
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page = ($this->uri->segment(3)) ;
		}
		else
		{
			$page = 1;
		}
	
		$this->data["results"] = $this->data['document'];
		$str_links = $this->pagination->create_links();
		$this->data["links"] = explode('&nbsp;',$str_links ); 
		$this->data['doc_type'] = $type;
		
		$this->load->template("document_type", $this->data);
	}	
	
	// curl call
	private function curl_call($get_url, $useragent)
	{
		$ch = curl_init();
		curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_URL => $get_url,
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => TRUE // set to TRUE on QA and Prod
		));
		
		$response = curl_exec($ch);
		return $response;
	}
}