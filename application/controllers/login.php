<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library("session");
    $this->load->model('mdl_login');
  }

  public function index()
  {
    if($this->chk_login()==false){
      redirect(base_url('home/login_fail'));
    }else{
      redirect(base_url('home'));
    }
  }

  public function chk_login()
  {
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if ($this->form_validation->run()==FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
      $email=$this->input->post('email');
      $password=$this->input->post('password');
      //echo $email,$password,$checkbox; die();
      $result=$this->mdl_login->get_data($email);
      if($result){
        foreach ($result as $row) {
          $salt=$row->salt;
          $encrypted_password=$row->encrypted_password;
          $session_arr = array(
            'uid'=>$row->user_id,
            'name'=>$row->first_name,
            'lname'=>$row->last_name,
            'img'=>$row->userimage,
            'tel'=>$row->tel,
            'permission'=>$row->permission,
            'is_login'=> true
          );
        }
            if($this->mdl_login->verifyHash($password.$salt,$encrypted_password)){
              $this->session->set_userdata($session_arr);
              $info['success']=true;
              $info['message']="เข้าสู่ระะบบสำเร็จ, ยินดีต้อนรับคุณ".$session_arr['name'];
            }else{
              //redirect(base_url('front/home/login_fail'));
              $info['errors']="อีเมล หรือ พาสเวิร์ดของคุณไม่ถูกต้อง";
              $info['success']=false;
            }
      }else{
        //redirect(base_url('front/home/login_fail'));
        $info['errors']="อีเมล หรือ พาสเวิร์ดของคุณไม่ถูกต้อง";
        $info['success']=false;
      }
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($info));
    //echo $email,$password; die();

  }

  public function logout(){
    $this->session->unset_userdata($session_arr);
    $this->session->sess_destroy();
    redirect(base_url('homepage'));

  }

}
