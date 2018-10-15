<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function sended(){

		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|min_length[3]|max_length[15]',
			array(	//Using customize messages
				'min_length'	=>	'Min length need is 3'
			)
		);

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|min_length[6]|max_length[32]',
			array(//Customize message using variables
				'required'	=>	'{field} should be diferent than nothing'
			)
		);

		$this->form_validation->set_rules('name', 'Fullname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() == FALSE){
			echo '<script> console.log("fewfewfe");</script>';
			$this->load->view('welcome_message');
		}else{
			echo '<script> console.log("Cumplio");</script>';
			$this->load->view('ok');
		}
		
	}
}
