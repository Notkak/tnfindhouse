<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_search extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }
  public function get_data($data){
    //echo "<pre>"; print_r($data);exit();
    if($data['search_type']==0){
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==1) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $query = $this->db->get();
        $rs=$query->result_array();
        //echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==2) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('ptype',$data['ptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        //echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==3) {
        $rate="`price`>5000000";
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->where($rate);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
  }
}
