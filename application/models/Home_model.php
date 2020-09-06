<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'admin';
        $this->students   = 'users';
        $this->category   = 'cat';
        $this->course   = 'product';
    }


	public function Authentication($auth)
	{	
		$this->db->select('*');
		$this->db->from($this->users);
		$array = array('users_email' => $auth['users_email'],'users_password' => $auth['users_password']);
		$this->db->where($array);
		$query = $this->db->get();
		if($query->num_rows() !=0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	public function CheckEmail($auth)
	{
		$this->db->select('*');
		$this->db->from($this->users);
		$array = array('users_email' => $auth['users_email']);
		$this->db->where($array);
		$query = $this->db->get();
		if($query->num_rows() !=0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function ListStudent($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->students);
       
        if($id){
            $array = array('id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}


	public function ListCategory($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}


    public function ChangeCategory($reg)
    {   
        if ($reg['id']) {
            $this->db->where('id',$reg['id']);
            $update = $this->db->update($this->category,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->category,$reg);
            return $insert?true:false;
        }
    }

    public function DeleteCategory($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->category);
       return $update?true:false;
    }

	public function ListCourse($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->course);
       
        if($id){
            $array = array('id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}

	public function ChangeCourse($reg)
	{	
		if ($reg['id']) {
			$this->db->where('id',$reg['id']);
        	$update = $this->db->update($this->course,$reg);
       		return $update?true:false;
		}
		else{
			$insert = $this->db->insert($this->course,$reg);
        	return $insert?true:false;
    	}
	}

    public function DeleteCourse($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->course);
       return $update?true:false;
    }



}
