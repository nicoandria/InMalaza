<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BreakingNews extends CI_Controller {

	public function index()
	{
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["breakingnews"] = $model->find("*","BreakingNewsArticle"," order by id desc ");
		$data["articles"] = $model->find("*","Article"," order by dateSorti desc");
		$this->load->view('BO/inc/header');
		$this->load->view('BO/breakingnews',$data);
		$this->load->view('BO/inc/footer');
		
	}		
	public function add(){

		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$breakingnews = $model->find("*","BreakingNews"," ");
		$exist = false;
		foreach ($breakingnews as $breakingnews) {
			if($breakingnews->article==$_POST['article']){
				$exist = true;
				break;
			}
		}
		if(!$exist){
			$model->save("BreakingNews (article,description)","'".$_POST['article']."','".$_POST['description']."'");
			header('Location:'.base_url().'Admin/BreakingNews');
		}
		else{
			header('Location:'.base_url().'Admin/BreakingNews?error=1');	
		}
	}
	public function delete(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$model->delete("BreakingNews","where id=".$_GET['id']);
		header('Location:'.base_url().'Admin/BreakingNews');
	}
}