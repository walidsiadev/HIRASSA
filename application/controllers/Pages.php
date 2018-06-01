<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function Index()
	{
		$data['title'] = 'Bienvenue sur HIRASSA';
		/**
		*hade darori idare
		*/
		$this->load->view('main/header',$data);
		/**
		*hade howa cours diale app hena ghedema 
		*/
		$this->load->view('main/home');
		/**
		*hade darori idare
		*/
		$this->load->view('main/footer');
	}
	public function prof()
	{
		$data['title'] = 'HIRASSA | professeur';
		/**
		*hade 3 darori idaro
		*/
		$this->load->view('main/header',$data);
		/**
		*hade howa cours diale app hena ghedema 
		*/
		$this->load->view('prof/prof_v');
		/**
		*hade darori idare
		*/
		$this->load->view('main/footer');
	}
}
