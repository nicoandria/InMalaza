<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Model');
		$model = new Model;
		$data["articles"] = $model->find("*","ArticleCategorie"," order by dateSorti desc");
		$data["alaunes"] = $model->find("*","ArticleAlaUne"," ");
		$dataHeader["categories"] = $model->find("*","Categorie"," ");
		$dataHeader["breakingnews"] = $model->find("*","BreakingNewsArticle"," ");
		$this->load->view('FO/inc/header',$dataHeader);
		$this->load->view('FO/index',$data);
		$this->load->view('FO/inc/footer');
	}
	public function categorie($id){
		$this->load->model('Model');
		$model = new Model;

		$data["articles"] = $model->find("*","ArticleCategorie"," where categorieId = ".$id." order by dateSorti desc");
		$data["alaunes"] = $model->find("*","ArticleAlaUne"," ");
		$data["categorieChoisi"] = $model->find("*","Categorie"," where id=".$id)[0];
		$dataHeader["categories"] = $model->find("*","Categorie"," ");
		$dataHeader["breakingnews"] = $model->find("*","BreakingNewsArticle"," ");
		$this->load->view('FO/inc/header',$dataHeader);
		$this->load->view('FO/index',$data);
		$this->load->view('FO/inc/footer');
	}
	public function detail($id){
		$this->load->model('Model');
		$model = new Model;
		$data['article'] = $model->find("*","ArticleCategorie","where id=".$id)[0];
		$data['articleRelies'] = $model->find("*","ArticleCategorie","where id != ".$id." and categorie='".$data['article']->categorie."' limit 4");
		$dataHeader["categories"] = $model->find("*","Categorie"," ");
		$dataHeader["breakingnews"] = $model->find("*","BreakingNewsArticle"," ");
		$this->load->view('FO/inc/header',$dataHeader);
		$this->load->view('FO/detail',$data);
		$this->load->view('FO/inc/footer');
	}
}
?>