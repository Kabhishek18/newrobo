<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model{
    
function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->product   = 'product';
        $this->cat   = 'cat';
        $this->coupon = 'coupon';
        $this->order = 'userorder';
        $this->review = 'review';
    }    
   public function Authentication($auth)
    {   
        $this->db->select('*');
        $this->db->from($this->user);
        $array = array('user_email' => $auth['user_email'],'user_password' => $auth['user_password']);
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
        $this->db->from($this->user);
        $array = array('user_email' => $auth['user_email']);
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

}
?>