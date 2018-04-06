<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["categories"] = $model->find("*","Categorie"," ");
		if(isset($_GET['error'])&&$_GET['error']=1){
			$data['error'] = 1;
		}
		$this->load->view('BO/inc/header');
		$this->load->view('BO/categories',$data);
		$this->load->view('BO/inc/footer');
		
	}		
	public function add(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$categories = $model->find("*","Categorie"," ");
		$exist = false;
		foreach ($categories as $categorie) {
			if($categorie->nom==$_POST['nom']){
				$exist = true;
				break;
			}
		}
		if(!$exist){
			$model->save("Categorie (nom)","'".$_POST['nom']."'");
			header('Location:'.base_url().'Admin/Categories');
		}
		else{
			header('Location:'.base_url().'Admin/Categories?error=1');	
		}
		
	}
	public function delete(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$model->delete("Categorie","where id=".$_GET['id']);
		header('Location:'.base_url().'Admin/Categories');
	}
	public function update(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["categorieUpdate"] = $model->find("*","Categorie"," where id=".$_GET['id'])[0];
		$data["categories"] = $model->find("*","Categorie"," ");
		if(isset($_GET['error'])&&$_GET['error']=1){
			$data['error'] = 1;
		}
		$this->load->view('BO/inc/header');
		$this->load->view('BO/categories',$data);
		$this->load->view('BO/inc/footer');
		
	}
	public function finalizeUpdate(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$model->update("Categorie","nom='".$_POST['nom']."'" ,"id=".$_POST['id']);
		header('Location:'.base_url().'Admin/Categories');
	}
}