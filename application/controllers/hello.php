<?php //if( ! define('BASEPATH')) exit('no hacking allowed');

class Hello extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

	public function index() {
		echo "this is my index function";
	}

	public function one($name){
		$this->load->model("Hello_model", "model");

		$profile = $this->model->getProfile("jason");

		$this->load->view('header');
		$data = array("name" => $name);

		$data['profile'] = $profile;
		$this->load->view('one', $data);
		
	}

	public function two() {
		echo "this is two";
	}
}