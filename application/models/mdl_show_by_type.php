<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_show_by_type extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }

  public function get_data($type){
    switch ($type) {
    case "1":
        $ptype="บ้านเดี่ยว";
        break;
    case "2":
        $ptype="ทาวเฮ้าส์";
        break;
    case "3":
        $ptype="คอนโดมิเนียม";
        break;
    case "4":
        $ptype="อพาตเมนต์";
        break;
    case "5":
        $ptype="ที่ดิน";
        break;
      }
      return $ptype;
  }
}
