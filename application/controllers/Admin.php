<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view("adminHome",$data);
	}
	public function show()
	{
		$this->load->helper('url');
	   $this->load->helper('form');
		$this->load->view('circular_upload.php');
	
		
	}
	public function Circularupload(){
		
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
					'pic'=>$fileName,'approved'=>'1'
				);
				$flag = $this->Welcome->saveCircular($inData);
				if($flag){
					$this->session->set_flashdata("msg","Circular has been Recorded!!");
				    redirect('Admin/show');}
				else
					echo "Failed";
				
			}else{
				$errors = $this->upload->display_errors();
				echo "Failed<br/>";
				var_dump($errors);
			}
			die;
			
			
		}
		else{
			redirect('Admin');	
			}
		
}
public function accept(){
	$this->load->helper('url');
	if($this->input->post()){
		$newName=time();
		$configuration=array('file_name'=>$newName,'upload_path'=>"./uploads/Pic/",
					'max_size'=>2048,
					'allowed_types'=>'jpg|jpeg|png',
					'file_ext_tolower'=>TRUE);
		$this->load->library('upload');
		$this->upload->initialize($configuration);
		if($this->upload->do_upload('Pic')){
			$file=$this->upload->data();
			$name= $file['file_name'];
			$indata=array('HEAD'=>$this->input->post('StoryName'),
			'Story'=>$this->input->post('Story'),
			'picture'=>$name);
			$this->load->model('Welcome');
			$flag=$this->Welcome->setStory($indata);
			if($flag)
				$this->session->set_flashdata("msg","Data has been Recorded!!");
				redirect('Home/registration');
		}
		else{
			$error=$this->upload->display_errors();
			echo "Failed<br/>";
				var_dump($error);
			}
			die;
		
		
	}
	else{
		redirect('Admin/stories');
	}
		
		
	
}public function changepassword(){
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
			$this->load->view("Admin/changepassword");
		}			
	}
public function editCircular($id){
	$this->load->helper("url");
		$data["title"] = "Enter Circular Details";
		$cond = array("Circular_No"=>$id);
		$this->load->model("Welcome");
		$rec = $this->Welcome->getCircular($cond);
		$data['result'] = $rec->row();
		$this->load->view("editCircular",$data);
}
public function editnotice($id){
	$this->load->helper("url");
		$data['title'] = "Enter Notice Details";
		$cond = array("Serial_no"=>$id);
		$this->load->model("Welcome");
		$rec = $this->Welcome->getNotices($cond);
		$data['result'] = $rec->row();
		$this->load->view("editNotice",$data);
}
public function editessay($id){
	$this->load->helper("url");
		$data['title'] = "Enter Story Details";
		$cond = array("Id"=>$id);
		$this->load->model("Welcome");
		$rec = $this->Welcome->takeDatail($cond);
		$data['result'] = $rec->row();
		$this->load->view("editsto",$data);
}
public function editstory(){
	$this->load->helper('url');
	$data['title'] = "Stories";
	$this->load->model("Welcome");
		$data['records'] = $this->Welcome->takeDatail();
		$this->load->view('editstories.php',$data);
	}
	public function updateCircular()
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

			$updateData = array('Circular_No'=>$this->input->post('CircularNo'),
					'Circular_Head'=>$this->input->post('CircularHead'),
					'pic'=>$fileName
				
			);
			$cond = array("Circular_No"=>$this->input->post("Circular_No"));
			$flag = $this->Welcome->updateCircular($updateData,$cond);
			if($flag){
				echo "Updated";
			redirect('Admin');}
			else
				echo "Failed";
			redirect("Admin");
		}}
		else
			redirect("Admin");
	}
	public function updatenotice()
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

			$updateData = array("Heading"=>$this->input->post("heading"),
					"validdate"=>$this->input->post("validdate"),
					'Pic'=>$fileName
				
			);
			$cond = array('Serial_no'=>$this->input->post('noticeid'));
			$flag = $this->Welcome->updateNotices($updateData,$cond);
			if($flag)
				echo "Updated";
			else
				echo "Failed";
			redirect("Admin");
		}}
		else
			redirect("Admin");
	}
		public function updatestory()
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

			$updateData = array("HEAD"=>$this->input->post("heading"),
					"Story"=>$this->input->post("story"),
					'picture'=>$fileName
				
			);
			$cond = array('Id'=>$this->input->post('storyid'));
			$flag = $this->Welcome->updateStory($updateData,$cond);
			if($flag)
				echo "Updated";
			else
				echo "Failed";
			redirect("Admin");
		}}
		else
			redirect("Admin");
	}
public function deleteCircular($id)
	{
		$this->load->helper("url");
		$cond = array("Circular_No"=>$id);
		$this->load->model("Welcome");
		$flag = $this->Welcome->deleteCircular($cond);
		redirect("Admin");	
	}
	public function approve(){
		$this->load->helper("url");
		$data["title"] = "Circular List";
		$this->load->model("Welcome");
		$cond=array('approved'=>'0');
		$data['records'] = $this->Welcome->getCircular($cond);
		$this->load->view('circular.php',$data);
	}
	public function Notices(){
		$this->load->helper("url");
		$data["title"] = "Notices";
		$this->load->model("Welcome");
		$data['records'] = $this->Welcome->getNotice();
		$this->load->view('notices.php',$data);
	}
	public function deletenotice($id)
	{
		$this->load->helper("url");
		$cond = array("Serial_no "=>$id);
		$this->load->model("Welcome");
		$flag = $this->Welcome->deletenotice($cond);
		redirect("Admin/Notices");	
	}
	public function deletestory($id)
	{
		$this->load->helper("url");
		$cond = array("Id"=>$id);
		$this->load->model("Welcome");
		$this->load->model("Welcome");
		$flag = $this->Welcome->deletestory($cond);
		redirect("Admin/editstory");	
	}

	public function stories(){
		$this->load->helper('url');
	   $this->load->helper('form');
	   $this->load->view("story.php");
	}
	public function Approval($id)
	{
		$this->load->helper("url");
		$cond = array("Circular_No"=>$id);
		$this->load->model("Welcome");
		$inData=array('approved'=>'1');
		$flag = $this->Welcome->ChangeCircular($inData,$cond);
		if($flag){
			$this->session->set_flashdata("message","Circular has been approved");
			redirect('Admin/approve');
		}
		
	}
	public function Notice(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('Notice.php');

	}
	public function saveNotice(){
		$this->load->helper("url");
		if($this->input->post()){
			$this->load->model("Welcome");
			$Name = time();
			$config = array(
					'file_name'=>$Name,
					'upload_path'=>"./uploads/pic/",
					'max_size'=>4589,
					'allowed_types'=>'jpg|jpeg|png',
					'file_ext_tolower'=>TRUE
				);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('Pic')){
				$data = $this->upload->data();
				$fileName =  $data['file_name'];
				
				$inData = array(
					'Heading'=>$this->input->post('notice'),
					'validdate'=>$this->input->post('validDate'),
					'Pic'=>$fileName
				);
				$flag = $this->Welcome->setNotice($inData);
				if($flag){
					$this->session->set_flashdata("msg","Data has been Recorded!!");
				redirect('Admin/Notice');}
				else
					echo "Failed";
				
			}else{
				$errors = $this->upload->display_errors();
				echo "Failed<br/>";
				var_dump($errors);
			}
			die;
			
			
		}
		else{
			redirect('Admin');	
			}

		
	}

}
