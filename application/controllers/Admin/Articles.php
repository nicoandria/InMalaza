<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

	public function index()
	{
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["articles"] = $model->find("*","ArticleCategorie"," order by dateSorti desc");
		if(isset($_GET['error'])&&$_GET['error']=1){
			$data['error'] = 1;
		}
		$this->load->view('BO/inc/header');
		$this->load->view('BO/articles',$data);
		$this->load->view('BO/inc/footer');
		
	}	
	public function detail(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["article"] = $model->find("*","ArticleCategorie","where id=".$_GET['id'])[0];
		$this->load->view('BO/inc/header');
		$this->load->view('BO/detailArticle',$data);
		$this->load->view('BO/inc/footer');
		
	}
	public function addUi(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data["categories"] = $model->find("*","Categorie"," ");
		$this->load->view('BO/inc/header');
		$this->load->view('BO/ajoutArticle',$data);
		$this->load->view('BO/inc/footer');
	}
	public function add(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		echo "<div id='id'>Loading</div>";
		$this->load->model('model');
		$model = new Model;

		$config['upload_path']          = './images/articles/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 2000;
        $config['max_height']           = 2000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo'))
        {
            $data["error"] = $this->upload->display_errors();
            $data["categories"] = $model->find("*","Categorie"," ");
			$this->load->view('BO/inc/header');
			$this->load->view('BO/ajoutArticle',$data);
			$this->load->view('BO/inc/footer');
			echo "<script>document.getElementbyId('id').visible = false</scipt>";
        }
        else
        {
			$insertion = "'".str_replace("'", "''", $_POST['titre'])."','".str_replace("'", "''", $_POST['contenu'])."','".$this->upload->data()['file_name']."',NOW(),'".$_POST['categorie']."','".str_replace("'", "''", $_POST['articleUrl'])."','".str_replace("'", "''", $_POST['resumes'])."'" ;
        	$model->save("Article (titre,contenu,photos,dateSorti,categorie,articleUrl,resumes)",$insertion);
            header('Location:'.base_url().'Admin/Articles');
        }
	}
	public function delete(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;
		$article = $model->find("*","ArticleCategorie","where id=".$_GET['id'])[0];
		$model->delete("Alaune","where article=".$_GET['id']);
		$model->delete("BreakingNews","where article=".$_GET['id']);
		$model->delete("Article","where id=".$_GET['id']);
		unlink(FCPATH .'images/articles/'.$article->photos);
		header('Location:'.base_url().'Admin/Articles');
	}
	public function updateUi(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		$this->load->model('model');
		$model = new Model;

		$data['article'] = $model->find("*","Article","where id=".$_GET['id'])[0];
		$data["categories"] = $model->find("*","Categorie"," ");
		$this->load->view('BO/inc/header');
		$this->load->view('BO/updateArticle',$data);
		$this->load->view('BO/inc/footer');
	}
	public function update(){
		session_start();
		if(!isset($_SESSION['connect'])){
			header('Location:'.base_url().'Admin/Login?error=1');
		}
		echo "<div id='id'>Loading</div>";
		$this->load->model('model');
		$model = new Model;
		$article = $model->find("*","Article","where id=".$_POST['id'])[0];

		$update = "titre='".str_replace("'", "''", $_POST['titre'])."',contenu='".str_replace("'", "''", $_POST['contenu'])."',categorie='".$_POST['categorie']."',articleUrl='".str_replace("'", "''", $_POST['articleUrl'])."',resumes='".str_replace("'", "''", $_POST['resumes'])."'" ;
		if(!$_FILES['photo']['name']==''){
			echo "blabla";
			
			$config['upload_path']          = './images/articles/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 3000;
	        $config['max_width']            = 2000;
	        $config['max_height']           = 2000;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('photo'))
	        {
	            $data["error"] = $this->upload->display_errors();
	            $data['article'] = $model->find("*","Article","where id=".$_POST['id'])[0];
	            $data["categories"] = $model->find("*","Categorie"," ");
				$this->load->view('BO/inc/header');
				$this->load->view('BO/updateArticle',$data);
				$this->load->view('BO/inc/footer');
				echo "<script>alert('nbaljabl')</scipt>";
	        }
	        else
	        {
	        	unlink(FCPATH .'images/articles/'.$article->photos);
				$update .= ",photos='".$this->upload->data()['file_name']."'";
	        }
		}
		$model->update("Article",$update," id=".$_POST['id']);
        header('Location:'.base_url().'Admin/Articles');
	}
}
