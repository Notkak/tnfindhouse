<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class show_by_type extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_show_by_type','ms');
  }

  public function index($type){
  switch ($type) {
    case "1":
        $data['title']="บ้านเดี่ยว";
        break;
    case "2":
        $data['title']="ทาวเฮ้าส์";
        break;
    case "3":
        $data['title']="คอนโดมิเนียม";
        break;
    case "4":
        $data['title']="อพาตเมนต์";
        break;
    case "5":
        $data['title']="ที่ดิน";
        break;
  }
    $rs=$this->ms->get_data($type);
    echo $rs;exit();
    $this->load->view('header',$data);
    $this->load->view('show_by_type',$data);
    $this->load->view('footer');
  }
}
