<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_sale_house extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }

  public function get_house($params = array()){
    $ptype="บ้านเดี่ยว";
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    //filter data by searched keywords
    if(!empty($params['search']['keywords'])){
        $this->db->like('title',$params['search']['keywords']);
    }
    //sort data by ascending or desceding order
    if(!empty($params['search']['sortBy'])){
        $this->db->order_by('created',$params['search']['sortBy']);
    }else{
        $this->db->order_by('created','desc');
    }
    //set start and limit
    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit'],$params['start']);
    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit']);
    }
    $this->db->where('ptype',$ptype);
    //get records
    $query = $this->db->get();
    $rs=$query->result_array();
    //echo "<pre>";print_r($rs);exit();
    //return fetched data
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
}
