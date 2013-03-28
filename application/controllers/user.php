<?php

class User extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function insert($username, $password) {
		$sql = "INSERT INTO users (username, password) VALUES(?,?)";
		$this->db->query($sql, array($username, $password));

		echo "Inseryt";
	}

	public function select() {
		$sql = 'SELECT * FROM users';
		$result = $this->db->query($sql)->result();

		foreach ($result as $user) {
			echo "{$user->username} - {$user->password}";
		}
	}
}