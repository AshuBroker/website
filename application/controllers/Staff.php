<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
		$this->load->helper("url");
		$this->load->model("Welcome");
		$cond=array('approved'=>'1');
		$data['records'] = $this->Welcome->getCircular($cond);
		$this->load->view("staff.php",$data);
	}
	public function shows()
	{
		
		$this->load->view('circularupload1.php');
		
	}
	public function changepassword(){
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->view('changepass.php');
}
public function check(){
	$this->load->model("Welcome");
	$this->load->library('session');
	$cond=array("Id"=>$this->session->sessionLogin["ID"]);
		$result= $this->Welcome->getDat($cond);
		if($this->input->post()){
			$this->load->library("form_validation");
			$this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
			$this->form_validation->set_rules('currentpassword','Current password','required|max_length[20]',array("required"=>"*Enter value in %s","max_length"=>"Maximum length is 20 chars"));
			$this->form_validation->set_rules('newpassword','NewPassword','required|max_length[10]',array("required"=>"*Enter value in %s","max_length"=>"Maximum length is 10 chars"));
			$this->form_validation->set_rules('reenterpassword','RE-Enterpassword','required|max_length[10]|matches[newpassword]',array("required"=>"*Enter value in %s","max_length"=>"Maximum length is 10 chars"));
			
			
			if($this->form_validation->run()==FALSE){	
				$this->load->view('changepass.php');
			}else{ $arr=$result->row();
				if($this->input->post("currentpassword")==$arr->password){
					if($this->input->post("newpassword")==$this->input->post("reenterpassword")){
						$pas=$this->input->post("newpassword");
						$das=array("password"=>$pas);
						$flag=$this->Welcome->updatePassword($cond,$das);
						if($flag){
							echo "Saved";
						redirect('Home/logout');}
						}
				}
					
					else{
						echo "wrong password Entered";
						}
	
			}		
		}
		else
		{
			$this->load->view("Staff/changepassword");
		}			
	}
	public function circularupload()
	{
		$this->load->helper("url");
		if($this->input->post()){
			$this->load->model("Welcome");
			$newName = time();
			$config = array(
					'file_name'=>$newName,
					'upload_path'=>"./uploads/pic/",
					'max_size'=>2048,
					'allowed_types'=>'jpg|jpeg|png',
					'file_ext_tolower'=>TRUE
				);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('Pic')){
				$data = $this->upload->data();
				$fileName =  $data['file_name'];
				
				$inData = array(
					'Circular_No'=>$this->input->post('CircularNo'),
					'Circular_Head'=>$this->input->post('CircularHead'),
					'pic'=>$fileName,
				);
				$flag = $this->Welcome->saveCircular($inData);
				if($flag)
					$this->session->set_flashdata("msg","Data has been Recorded!!");
				redirect('Staff/shows');
				
			}else{
				$errors = $this->upload->display_errors();
				echo "Failed<br/>";
				var_dump($errors);
			}
			die;
			
			
		}
		else{
			redirect('Staff');	
			}
		
    }
}
