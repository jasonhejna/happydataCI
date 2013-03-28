<?php //if( ! define('BASEPATH')) exit('no hacking allowed');

class Hello_model extends CI_Model {
	public function getProfile($name) {
		return array("fullName" => "Jason hejna2", "age" => 24);
	}
}