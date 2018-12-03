<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_control extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
         $this->load->model('M_login');
         $this->load->helper('url');
        // $this->load->library('form_validation');
        // $this->load->library('dompdf_gen');
        // $this->load->library('PHPExcel');
    }

    function index()
    {
    	$data="";
       $data['user']=$this->session->userdata('level');
    	$tpl['content'] = $this->load->view('content',$data,true);
      $this->load->view('user',$tpl);
    }
     function operator()
    {
        $data="";
         $data['user']=$this->session->userdata('level');
        $tpl['content'] = $this->load->view('content',$data,true);
        $this->load->view('operator',$tpl);
    }
     public function Create()
    {
      $user=$this->session->userdata('user');
        $data['user']=$user;
          $data['id_admin']=$this->M_login->oto_admin();
          $this->form_validation->set_rules('nama', 'nama', 'trim|required');
          $this->form_validation->set_rules('user', 'user', 'trim|required');
          $this->form_validation->set_rules('pass', 'pass', 'trim|required');
          $this->form_validation->set_rules('level', 'level', 'trim|required');
          if($this->form_validation->run()==FALSE)
          {
                $data['isi']=$this->M_login->Get_data('pengguna');                    
                $tmp['content']=$this->load->view('add_admin',$data,true);
                $this->load->view('user',$tmp);
          }
          else
          {
            
                $data = array('id_admin' => $this->input->post('id_admin'), 
                               'nama' => $this->input->post('nama'),
                               'user' => $this->input->post('user'),
                               'pass' => md5($this->input->post('pass')),
                               'level' => $this->input->post('level')
                                );
                $quer=$this->M_login->insertData('pengguna',$data);
                redirect("User_control","refresh");
           }
    }
     public function list_admin()
    {
      $user=$this->session->userdata('user');
        $data['user']=$user;
        $data['title'] = "Data Kriteria";
        $data['id_admin']=$this->M_login->oto_admin();
        $data['isi']=$this->M_login->Get_data('pengguna');
        $tpl['content'] = $this->load->view('V_admin',$data,TRUE);
        $this->load->view('user',$tpl);
    }

}


 ?>