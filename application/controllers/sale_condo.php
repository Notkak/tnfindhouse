<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sale_condo extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_sale_condo','msc');
    $this->load->library('Ajax_pagination');
    $this->perPage = 2;
  }

  public function index(){
    $totalRec = count($this->msc->get_condo());

    //pagination configuration
    $config['target']      = '#postList';
    $config['base_url']    = base_url().'sale_condo/ajax_condo/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $data['posts'] = $this->msc->get_condo(array('limit'=>$this->perPage));
    // echo "<pre>";print_r($rs_data);exit();
    $data['title']="คอนโดมิเนียม";
    $this->load->view('header',$data);
    $this->load->view('show_sale_condo',$data);
    $this->load->view('footer');
  }

  function ajax_condo(){
      $conditions = array();

      //calc offset number
      $page = $this->input->post('page');
      if(!$page){
          $offset = 0;
      }else{
          $offset = $page;
      }

      //set conditions for search
      $keywords = $this->input->post('keywords');
      $sortBy = $this->input->post('sortBy');
      if(!empty($keywords)){
          $conditions['search']['keywords'] = $keywords;
      }
      if(!empty($sortBy)){
          $conditions['search']['sortBy'] = $sortBy;
      }

      //total rows count
      $totalRec = count($this->msc->get_condo($conditions));

      //pagination configuration
      $config['target']      = '#postList';
      $config['base_url']    = base_url().'sale_condo/ajax_condo/';
      $config['total_rows']  = $totalRec;
      $config['per_page']    = $this->perPage;
      $config['link_func']   = 'searchFilter';
      $this->ajax_pagination->initialize($config);

      //set start and limit
      $conditions['start'] = $offset;
      $conditions['limit'] = $this->perPage;

      //get posts data
      $data['posts'] = $this->msc->get_condo($conditions);

      //load the view
      $this->load->view('ajax_sale_show', $data, false);
  }


}
