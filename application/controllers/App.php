<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class app extends CI_Controller {
	 function __construct()
	 {
		 parent::__construct();
	 }

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('menu/bottom_menu');
		$this->load->view('content/home');
		$this->load->view('footer/footer');
	}
	public function directory(){
		$this->load->view('header/extra_header');
		$this->load->view('menu/bottom_menu');
		$this->load->view('content/directory');
		$this->load->view('footer/footer');
	}
	public function reward()
	{
		$this->load->view('header/tab_header');
		$this->load->view('menu/bottom_menu');
		$this->load->view('content/reward');
		$this->load->view('footer/footer');
	}

	public function profile()
	{
		$this->load->view('header/profile_header');
		$this->load->view('menu/bottom_menu');
		$this->load->view('content/profile');
		$this->load->view('footer/footer');
	}
}
