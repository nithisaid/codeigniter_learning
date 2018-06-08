<?php

class Blog extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('location_model');
	}

	public function index()
	{
		$data['content'] = "page/index";
		$this->load->view('template/default_template',$data);
	}
    public function about()
	{
		$filepath = "assets/data/ministry.txt";
		$datafile = fopen($filepath,"r") or die ("unable to open file "+$filepath);
		$rawdata = fread($datafile, filesize($filepath));

		$rowdata = explode("\n",$rawdata);
		foreach ($rowdata as $line) {
			$tmp = explode(",",$line);
			$data["file_data"][] = $tmp;  // In CI Passing multiple data using Array. 
										  // For Example use $data['file_data'][] reference is file_data.
		}
		$data['content'] = "page/about";
		$this->load->view('template/default_template',$data);
		fclose($datafile);
  }
    public function contact()
	{
		$data['content'] = "page/contact";
		$this->load->view('template/default_template',$data);
	}

	public function showlocation() {
		// Test connect database form CI framework 2 options
		// 1. Query Bulider -> 
		//    $this->db = Use for call dierct to table.
		//    $this->db->get('tablename')->result();  = Select * form tablename
		//	  $this->db->insert or delete or update
		//
		// 2. Model
		// 	2.1 Create Model on models/ such as location_model.php 
		//  for example
		//    class Location_model extends CI_Model {
		// 		public function getLocation() {
		// 			return $this->db->get('locations')->result();
		// 			}
		// 		}
		// 	2.2 Make __construct function on main controller and write
		//  	parent::__construct();
		//		$this->load->model('name_model');
		//  2.3 $this->name_model->methods()
		//
		// Note:
		// Before you are use db. You much have to enable on config/autoload
		// and set $autoload['libraries'] = array('database');

		$query = $this->db->get('locations')->result();
		print_r($query);
	}

	public function showlocationmodel() {
		echo "<pre>";
		print_r($this->location_model->getLocation());
		echo "</pre>";
	}

	public function addLocation() {
		// Insert
		$data = array (
			'lat' => '13.7841',
			'lng' => '100.541',
			'description' => 'add form code',
			'status' => '1'
		);
		echo $this->location_model->addLocation($data);
	}
	

}
