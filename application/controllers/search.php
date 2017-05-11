<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class search extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_search','mse');
    $this->load->library('Ajax_pagination');
    $this->perPage = 2;
  }
  public function index(){
    $province=$this->input->post('province');
    $ptype=$this->input->post('ptype');
    $price=$this->input->post('price');
    $proptype=$this->input->post('proptype');
    $dataSearch=array('province'=>$province,
                      'ptype'=>$ptype,
                      'price'=>  $price,
                      'proptype'=>$proptype);
    // echo "<pre>"; print_r($dataSearch);exit();
    if($province=="0"&&$ptype=="0"&&$price=="0"&&$proptype=="0"){
          // echo "0";exit();
          $dataSearch['search_type']=0;
          $data['posts']=$this->mse->get_data($dataSearch);
          $data['title']="ค้นหาอสังหาริมทรัพย์";
          $this->load->view('header',$data);
          $this->load->view('search');
          $this->load->view('show_search',$data);
          $this->load->view('footer');
          // echo "<pre>"; print_r($data);exit();

        }
    else if ($province!="0"&&$ptype=="0"&&$price=="0"&&$proptype=="0") {
      // echo "1";exit();
      $dataSearch['search_type']=1;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($province=="0"&&$ptype!="0"&&$price=="0"&&$proptype=="0") {
      // echo "2";exit();
      $dataSearch['search_type']=2;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($province=="0"&&$ptype=="0"&&$price!="0"&&$proptype=="0") {
      // echo "3";exit();
      $dataSearch['search_type']=3;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
  }
}
