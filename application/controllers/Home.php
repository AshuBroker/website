<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header.php');
		$this->load->helper("url");
		$this->load->model("Welcome");
		$data['records'] = $this->Welcome->getNotice();
		$cond=array('approved'=>'1');
		$data['Detail']=$this->Welcome->getCircular($cond);
		$this->load->view("section",$data);
		$this->load->view('footer.php');
		
	}
	public function companyDetail(){
		$this->load->view('about.php');
	}
	public function getDetail(){
	$this->load->model('Welcome');
	$this->load->helper('url');
	$data['record']=$this->Welcome->takeDatail();
	$this->load->view('stories.php',$data);
    }
	public function registration(){
	   $this->load->helper('url');
	   $this->load->helper('form');
	$this->load->view('registration.php');
    }
	public function login(){
	   $this->load->helper('url');
	   $this->load->helper('form');
	$this->load->view('login.php');
    }
	public function logout(){
	 $this->session->unset_userdata("sessionLogin");
	 redirect("Home/login");
    }
	public function regCheck(){
		$this->load->helper('url');
		if($this->input->post())
		{
			$Name=$this->input->post("Name");
			$Email=$this->input->post("Email");
			$Mobile=$this->input->post("Mobile");
			$DOB=$this->input->post("DOB");
			$Department=$this->input->post("Department");
			$Address=$this->input->post("Address");
			$Password=$this->input->post("Password");
			$ar=array('name'=>$Name,'email'=>$Email,'mobile'=>$Mobile,'BirthDate'=>$DOB,'department'=>$Department,'address'=>$Address,'password'=>$Password);
			$this->load->model('Welcome');
			$flag=$this->Welcome->ToDatabase($ar);
			if($flag)
				$this->session->set_flashdata("msg","Data has been Recorded!!");
				redirect('Home/registration');
			//else
				//$this->session->set_flashdata("msg","Data has  not been  Recorded!!");
				//redirect('Home/registration');

		}
        else
        {
			redirect("Home/registration");
		}			
		
	}
	public function loginCheck(){
		$this->load->helper('url');
		
			$Email=$this->input->post("Email");
			$Password=$this->input->post("password");
			$this->load->model('Welcome');
			$q=$this->Welcome->getData($Email,$Password);
			if(($q->num_rows())==0){
				$this->session->set_flashdata("msg","User credential is wrong.");
				redirect('Home/login');
				}
			else{
				$row = $q->row();
			$sessionData = array(
				"Password"=>$row->password,
				"USER"=>$row->Type,
				"ID"=>$row->Id
				);
				$this->session->set_userdata("sessionLogin",$sessionData);
				if($this->session->userdata("sessionLogin"))
				{
					 if($this->session->sessionLogin["USER"]=="Admin")
						 redirect('Admin/index');
					 else 
						redirect('Staff/index');
				}
							

	      }
			
        			
	}
	public function Files(){
		$this->load->helper("url");
		$this->load->model("Welcome");
		$cond=array('approved'=>'1');
		$data['records'] = $this->Welcome->getCircular($cond);
		$this->load->view("file",$data);
	}
	public function filter(){
		$search_Id = $this->input->post("searchId");
		$cond = array("Circular_No"=>$search_Id);
		$this->load->model("Welcome");
		$data["records"] = $this->Welcome->getCircular($cond);
		$this->load->view("ajaxDropDown",$data);
	}
}