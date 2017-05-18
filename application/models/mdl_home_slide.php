<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_home_slide extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }

  public function get_house_slide(){
    $type=array(
                  'ptype'=>"บ้านเดี่ยว",
                  'activation'=>'Yes'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->where($type);
    $this->db->order_by('property_id','DESC');
    $query = $this->db->get();
    $rs=$query->result_array();
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
  public function get_townhouse_slide(){
    $type=array(
                  'ptype'=>"ทาวน์เฮ้าส์",
                  'activation'=>'Yes'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->where($type);
    $this->db->order_by('property_id','DESC');
    $query = $this->db->get();
    $rs=$query->result_array();
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
  public function get_condo_slide(){
    $type=array(
                  'ptype'=>"คอนโด",
                  'activation'=>'Yes'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->where($type);
    $this->db->order_by('property_id','DESC');
    $query = $this->db->get();
    $rs=$query->result_array();
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
  public function get_land_slide(){
    $type=array(
                  'ptype'=>"ที่ดิน",
                  'activation'=>'Yes'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->where($type);
    $this->db->order_by('property_id','DESC');
    $query = $this->db->get();
    $rs=$query->result_array();
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
}
