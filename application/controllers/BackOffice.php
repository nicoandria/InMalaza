<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller {

	public function index()
	{
		header('Location:'.base_url().'Admin/Login');
		
	}
}
?>