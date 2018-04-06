<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alaune extends CI_Controller {

	public function index()
	{
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["alaunes"] = $model->find("*","AlauneArticle"," ");
		$data["articles"] = $model->find("*","Article"," order by dateSorti desc");
		$this->load->view('BO/inc/header');
		$this->load->view('BO/alaune',$data);
		$this->load->view('BO/inc/footer');
		
	}		
	public function add(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$alaunes = $model->find("*","Alaune"," ");
		$exist = false;
		foreach ($alaunes as $alaune) {
			if($alaune->article==$_POST['article']){
				$exist = true;
				break;
			}
		}
		if(!$exist){
			$config['upload_path']          = './images/alaune/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 3000;
	        $config['max_width']            = 2000;
	        $config['max_height']           = 2000;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('photo'))
	        {
	            $data["error"] = $this->upload->display_errors();
	            $data["categories"] = $model->find("*","AlauneArticle"," ");
	            $data["alaunes"] = $model->find("*","AlauneArticle"," ");
	            $data["articles"] = $model->find("*","Article"," order by dateSorti desc");
				$this->load->view('BO/inc/header');
				$this->load->view('BO/alaune',$data);
				$this->load->view('BO/inc/footer');
				echo $data["error"];
	        }
	        else
	        {
				$insertion = "'".$_POST['article']."','".$this->upload->data()['file_name']."'";
	        	$model->save("Alaune (article,photo)",$insertion);
	            header('Location:'.base_url().'Admin/Alaune');
	        }
		}
		else{
			header('Location:'.base_url().'Admin/Alaune?error=1');	
		}
	}
	public function delete(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;
		$alaune = $model->find("*","Alaune","where id=".$_GET['id'])[0];
		$model->delete("Alaune","where id=".$_GET['id']);
		unlink(FCPATH .'images/alaune/'.$alaune->photo);
		header('Location:'.base_url().'Admin/Alaune');
	}
}