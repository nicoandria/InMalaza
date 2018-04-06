<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		header('Location:'.base_url().'login.php');
		
	}		
	public function connect(){
		if($_POST['username']=="admin"&&$_POST['password']=="admin1234"){
			session_start();
			$_SESSION['connect'] = 'ok';
			header('Location:'.base_url().'Admin/Articles');
		}
		else{
			header('Location:'.base_url().'login.php?error=2');
		}
	}
	
}
?>