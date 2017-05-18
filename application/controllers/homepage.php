<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class homepage extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_home_slide','mhs');
  }

  function index(){
    $data['totalRec'] = count($this->mhs->get_house_slide());
    $data['posts'] = $this->mhs->get_house_slide();
    $data2['totalRec'] = count($this->mhs->get_townhouse_slide());
    $data2['posts'] = $this->mhs->get_townhouse_slide();
    $data3['totalRec'] = count($this->mhs->get_condo_slide());
    $data3['posts'] = $this->mhs->get_condo_slide();
    $data4['totalRec'] = count($this->mhs->get_land_slide());
    $data4['posts'] = $this->mhs->get_land_slide();
    $data['title']="หน้าหลัก";
    // echo "<pre>";print_r($data);exit();
    $this->load->view('header',$data);
    $this->load->view('search');
    $this->load->view('house_slide',$data);
    $this->load->view('townhouse_slide',$data2);
    $this->load->view('condo_slide',$data3);
    $this->load->view('land_slide',$data4);
    $this->load->view('footer');
  }
}
