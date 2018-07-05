<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}
	public function about(){
         echo $_GET['a'];



	}
}
