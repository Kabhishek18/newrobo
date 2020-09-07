<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model{
    
function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->product   = 'product';
        $this->cat   = 'cat';
         $this->blog   = 'blog';
        $this->order = 'userorder';
        $this->review = 'review';
        $this->gallery = 'gallery';
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
    
    public function ListBlog($id = '')
    {
        $this->db->select('*');
        $this->db->from($this->blog);
       
        if($id){
            $array = array('id' => $id,'blog_status' =>'0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('blog_status' =>'0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function ListBlogLimit($id,$value)
    {
        $this->db->select('*');
        $this->db->from($this->blog);
       
    
            $array = array('blog_status' =>'0');
            $this->db->where($array);
            $this->db->limit($id);
            $this->db->order_by($value, 'DESC');
            $query  = $this->db->get();
            $result = $query->result_array();
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function InsertReview($reg)
    {
       $insert = $this->db->insert($this->review,$reg);
            return $insert?true:false;
    }

    public function ListReviewBlog($id = '')
    {
        $this->db->select('*');
        $this->db->from($this->review);
            $array = array('review_blog_id' =>$id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function MostCommentReview()
    {
         $this->db->select('*,COUNT("review_blog_id")');
        $this->db->from($this->review);
         $this->db->group_by('review_blog_id'); 
         $this->db->limit(5);
            $query  = $this->db->get();
            $result = $query->result_array();
        
        // return fetched data
        return !empty($result)?$result:false;
    }

   public function CategoryGallery($id = '')
    {
       $this->db->select('*');
        $this->db->from($this->gallery);
            $array = array('category' =>$id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        
        // return fetched data
        return !empty($result)?$result:false;
    } 
}
?>