<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Model{
public function ToDatabase($data){
$this->load->database();
 return $this->db->insert("tblregistration",$data);
}
public function getData($Email,$Password){
     $this->load->database();
    $this->db->where(['email'=>$Email,'password'=>$Password]);
  return $this->db->get("tblregistration");
  }
  public function getDat($cond){
     $this->load->database();
	 if($cond!=null)
		 $this->db->where($cond);
  return $this->db->get("tblregistration");
  }

  public function saveCircular($inData){
		$this->load->database();
		/*$value='1';
		$this->db->set('approved',$value);
		$this->db->update('tblcircular');*/
		return $this->db->insert("tblcircular",$inData);
	
  }
  public function getCircular($cond){
	  $this->load->database();
	  if($cond!=null){
	  $this->db->where($cond);}
	  return $this->db->get("tblcircular");
	
  }
  public function updateCircular($updateData,$cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->update("tblCircular",$updateData);
	}
	public function updateNotices($updateData,$cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->update("tblnotice",$updateData);
	}
	public function updateStory($updateData,$cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->update("tblstories",$updateData);
	}
	public function updatePassword($cond,$das){
	$this->load->database();
		$this->db->where($cond);
		return $this->db->update("tblregistration",$das);	
	}
	public function deleteCircular($cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->delete("tblCircular");
	}
	public function getNotices($cond){
	  $this->load->database();
	  if($cond!=null)
	    $this->db->where($cond);
	  return $this->db->get("tblnotice");
	
  }
	public function deletenotice($cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->delete("tblnotice");
	}
	public function ChangeCircular($inData,$cond){
		$this->load->database();
		$this->db->where($cond);
		return $this->db->update("tblCircular",$inData);
	}
	public function setNotice($inData){
		$this->load->database();
		return $this->db->insert("tblnotice",$inData);
	
     }
	 public function getNotice(){
	  $this->load->database();
	  //if($cond!=null){
	  //$this->db->where();}
	  return $this->db->get("tblnotice");
	
  }
  public function setStory($inData)
  {
	  $this->load->database();
	  return $this->db->insert("tblstories",$inData);
  }
  public function takeDatail($cond=null){
	  $this->load->database();
	  if($cond!=null)
		  $this->db->where($cond);
	  return $this->db->get("tblstories");
  }
  public function deletestory($cond){
	  $this->load->database();
	  if($cond!=null)
		  $this->db->where($cond);
	  return $this->db->get("tblstories");
  }
  

}