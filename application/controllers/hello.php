<?php //if( ! define('BASEPATH')) exit('no hacking allowed');

class Hello extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

    public function dbtest() {
    	$this->load->database();
    	$this->db->query($sql, array());
    }

	public function index() {
		echo "this is my index function";
	}

	public function one($name){
		$this->load->helper("url");

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

	public function helpers() {
		$this->load->helper("html");

		echo heading("This is the heading");
	}

	public function libs() {
		$this->load->library("table");

		$this->table->set_heading(array("username", "age"));

		$this->table->add_row(array("Jason", 24));
		$this->table->add_row(array("ahsdkg", 34));

		echo $this->table->generate();
	}
}