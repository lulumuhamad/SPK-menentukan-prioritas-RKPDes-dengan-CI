<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kriteria_control extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            //$this->Security_model->login_check();
            $this->load->library('form_validation');
            $this->load->model('Kriteria_model');
        }

    public function index()
    {
        $id = $this->input->get('kd_kriteria',true);
        $user=$this->session->userdata('user');
        $data['user']=$user;
        $data['kd_kriteria']=$this->Kriteria_model->oto_kriteria();
        $data['title'] = "Data Kriteria";

        $tampil_sub="SELECT * from sub_kriteria where kd_kriteria='$id'";
        $data['tampil_sub']=$this->db->query($tampil_sub);
        $data['isi']=$this->Kriteria_model->Get_data('kriteria');
        
        $tpl['content'] = $this->load->view('V_kriteria',$data,TRUE);
        if($user=='operator'){
        $this->load->view('operator',$tpl);
      }else{
        $this->load->view('user',$tpl);
      }
    }
    public function Create()
    {
          $data['kd_kriteria']=$this->Kriteria_model->oto_kriteria();
          $this->form_validation->set_rules('nama_kriteria', 'nama_kriteria', 'trim|required');
          $this->form_validation->set_rules('bobot', 'bobot', 'trim|required');
          if($this->form_validation->run()==FALSE)
          {
                $data['isi']=$this->Kriteria_model->Get_data('kriteria');                    
                $tmp['content']=$this->load->view('add_kriteria',$data,true);
                $this->load->view('operator',$tmp);
          }
          else
          {
            
                $data = array('kd_kriteria' => $this->input->post('kd_kriteria'), 
                               'nama_kriteria' => $this->input->post('nama_kriteria'),
                               'bobot' => $this->input->post('bobot')
                                );
                $quer=$this->Kriteria_model->insertData('kriteria',$data);
                redirect("Kriteria_control","refresh");
           }
    }
   public function edit()
    { 
        
                $id = $this->input->get('kd_kriteria',true);    
                $this->form_validation->set_rules('nama_kriteria', 'nama_kriteria', 'trim|required');
                $this->form_validation->set_rules('bobot', 'bobot', 'trim|required');
                $this->form_validation->set_rules('tipe_kriteria', 'tipe_kriteria', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                  $data['error']="";
                    $data['Kriteria'] = $this->Kriteria_model->get_kriteria('kriteria','kd_kriteria',$id);
                    $tmp['content']=$this->load->view('edit_kriteria',$data,true);
                    $this->load->view('operator',$tmp);
                }
        
    }
    public function Update()
  {
    
      $this->form_validation->set_rules('nama_kriteria', 'nama_kriteria', 'trim|required');
      $this->form_validation->set_rules('bobot', 'bobot', 'trim|required');
      $this->form_validation->set_rules('tipe_kriteria', 'tipe_kriteria', 'trim|required');
      $id=$this->input->post('kd_kriteria');
    
      
      if ($this->form_validation->run() == FALSE)
      {
       
        /*data yang ditampilkan*/
        $data['error']=validation_errors();
        $data['Kriteria'] = $this->Kriteria_model->get_kriteria('kriteria','kd_kriteria',$id);
                $tmp['content']=$this->load->view('edit_kriteria',$data,true);
                $this->load->view('operator',$tmp); 
               
      } 
      else
      {
        $data= array (
               'nama_kriteria' => $this->input->post('nama_kriteria'),
               'bobot' => $this->input->post('bobot'),
               'tipe_kriteria' => $this->input->post('tipe_kriteria')
            );

        $this->Kriteria_model->updateData('kriteria',$data,'kd_kriteria',$id);
        //echo $this->db->last_query();
        redirect('Kriteria_control','refresh');
      }
    
    /*}
    else
    {
      header('location:'.base_url().'web/log');
    }*/ 

  }

    public function delete()
     {
           
            $field='kd_kriteria';
            $id = $this->input->get('kd_kriteria',true);
            $this->Kriteria_model->delete('sub_kriteria',$field,$id);    
            $query = $this->Kriteria_model->delete('kriteria',$field,$id);                   
            if ($query)
                {
                    
                    $this->session->set_flashdata('message', 'Delete Record Success');
                    redirect("Kriteria_control","refresh");
                }
            else
                {
                    $this->session->set_flashdata("message","gagal");
                    redirect("Kriteria_control","refresh");
                }
        }
      public function tampil_sub_kriteria()
    {
       // $data['id_sub_kriteria']=$this->Kriteria_model->oto_sub_kriteria();
        $id = $this->input->get('kd_kriteria',true); 
        $user=$this->session->userdata('user');
        $data['user']=$user;
        $kriteria=$this->db->query("SELECT * from kriteria where kd_kriteria='$id'");
        $data['kriteria']=$kriteria;
        
        $tampil_sub="SELECT * from sub_kriteria where kd_kriteria='$id'";
        $data['title'] = "Data Subkriteria";
        $data['tampil_sub']=$this->db->query($tampil_sub);
        $tpl['content'] = $this->load->view('V_sub_kriteria',$data,TRUE);
       $this->load->view('operator',$tpl);
        
    }
     public function tambah_sub()
    {
          $id = $this->input->get('kd_kriteria',true); 
          $kd_sub_kriteria=$this->Kriteria_model->oto_subkriteria();
          $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
          $this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
          if($this->form_validation->run()==FALSE)
          {
                $data['isi']=$this->Kriteria_model->Get_data('sub_kriteria');                    
                $tmp['content']=$this->load->view('v_sub_kriteria',$data,true);
                $this->load->view('operator',$tmp);
          }
          else
          {
            
                $data = array('kd_sub_kriteria' => $kd_sub_kriteria,
                                'kd_kriteria' => $id, 
                               'keterangan' => $this->input->post('keterangan'),
                               'nilai' => $this->input->post('nilai')
                                );
                $quer=$this->Kriteria_model->insertData('sub_kriteria',$data);
                redirect("Kriteria_control/tampil_sub_kriteria/?kd_kriteria=".$id,"refresh");
           }
    }
     public function editsub()
    { 
        
                $id = $this->input->get('kd_sub_kriteria',true);    
                $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
                $this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                  $data['error']="";
                    $data['Kriteria'] = $this->Kriteria_model->get_kriteria('sub_kriteria','kd_sub_kriteria',$id);
                $tmp['content']=$this->load->view('edit_sub_kriteria',$data,true);
                    $this->load->view('operator',$tmp);
                }
        
    }
    public function Updatesub()
  {
    
      $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
      $this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
      $id=$this->input->post('kd_sub_kriteria');
      $kd_kriteria=$this->input->post('kd_kriteria');
    
      
      if ($this->form_validation->run() == FALSE)
      {
       
        /*data yang ditampilkan*/
        $data['error']=validation_errors();
        $data['sub_Kriteria'] = $this->Kriteria_model->get_kriteria('sub_kriteria','kd_sub_kriteria',$id);
                $tmp['content']=$this->load->view('edit_kriteria',$data,true);
                $this->load->view('operator',$tmp); 
               
      } 
      else
      {
        $data= array (
               'keterangan' => $this->input->post('keterangan'),
               'nilai' => $this->input->post('nilai')
            );

        $this->Kriteria_model->updateData('sub_kriteria',$data,'kd_sub_kriteria',$id);
        //echo $this->db->last_query();
        redirect('Kriteria_control/tampil_sub_kriteria/?kd_kriteria='.$kd_kriteria,'refresh');
      }
    
    /*}
    else
    {
      header('location:'.base_url().'web/log');
    }*/ 

  }
 public function deletesub()
     {
           
            $id = $this->input->get('kd_sub_kriteria',true);
            
            $query=$this->Kriteria_model->delete('sub_kriteria','kd_sub_kriteria',$id);    
            if ($query)
                {
                     $this->session->set_flashdata('message', 'Delete Record Success');
                    redirect("Kriteria_control/","refresh");
                }
            else
                {
                    $this->session->set_flashdata("message","gagal");
                     redirect("Kriteria_control/","refresh");
                }
        }
    
    
}