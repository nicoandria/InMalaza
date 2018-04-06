<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deconnexion extends CI_Controller {

	public function index()
	{
		session_start();
		session_destroy();
		header('Location:'.base_url().'Admin/Login');
		
	}		
}