<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usulan_control extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->cek_login();
       //is_login();
        $this->load->model('Usulan_model');
        $user=$this->session->userdata('user');
        $data['user']=$user;
        
        // $this->load->library('PHPExcel');
    }

   public function index()
    {

        $data['title'] = "Data Usulan";
        $data['user']=$this->session->userdata('user');
        $data['id_usulan']=$this->Usulan_model->oto_Usulan();
        $data['isi']=$this->Usulan_model->Get_data('t_usulan');
        $tmp['content'] = $this->load->view('V_usulan',$data,TRUE);
        $this->load->view('operator',$tmp);
    }
     Public  function Create()
    {
        $this->form_validation->set_rules('id_usulan', 'id_usulan', 'trim|required');
         $this->form_validation->set_rules('nama_usulan', 'nama_usulan', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
        $data['tgl'] = date('Y-m-d');
        $data['id_usulan']=$this->Usulan_model->oto_Usulan();
        
          if($this->form_validation->run()==false)
          {     
                $data['isi']=$this->Usulan_model->Get_data('t_usulan'); 

                $tmp['content']=$this->load->view('add_usulan',$data,true);
                $this->load->view('operator',$tmp);
          }

          else
          {
                $data = array('id_usulan' => $this->input->post('id_usulan'), 
                               'nama_usulan' => $this->input->post('nama_usulan'),
                               'tanggal' => $this->input->post('tanggal'),
                               'lokasi' => $this->input->post('lokasi'),
                               
                                );
                 
                $quer=$this->Usulan_model->insertData('t_usulan',$data);
                $krit=$this->db->get('kriteria')->result();
                
                foreach ($krit as $key => $value) {
                $idp=$this->Usulan_model->oto_DUsulan();
                $idpp=$this->input->post($value->kd_kriteria);
                $dataaa = array('id_dt_usulan' => $idp,
                                  'id_usulan' => $this->input->post('id_usulan'),
                                  'kd_kriteria' => $value->kd_kriteria,
                                  'kd_sub_kriteria' =>$idpp 
                                  );
                  $this->Usulan_model->insertData('t_dt_usulan',$dataaa);
                }

                redirect("Usulan_control","refresh");
           }
    }
    public function Create1()
    {
      $this->form_validation->set_rules('id_usulan', 'id_usulan', 'trim|required');
          $this->form_validation->set_rules('nama_usulan', 'nama_usulan', 'trim|required');
          $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
      $this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
     $tgl=date('Y-m-d');
     $periode1=date('Y');
     $periode2=date('Y')+1;
     $periode= $periode1.'/'.$periode2;
          $data['id_usulan']=$this->Usulan_model->oto_Usulan();
          $data['tgl']=$tgl;
     
          if($this->form_validation->run()==FALSE)
          {
                $data['isi']=$this->Usulan_model->Get_data('t_usulan');                    
                $tmp['content']=$this->load->view('add_usulan1',$data,true);
            $this->load->view('operator',$tmp);
          }
          else
          {
                $data = array('id_usulan' => $this->input->post('id_usulan'), 
                               'nama_usulan' => $this->input->post('nama_usulan'),
                               'tanggal' => $tgl,
                               'lokasi' => $this->input->post('lokasi'),
                               'periode' => $periode,
                               
                                );
                 
                $quer=$this->Usulan_model->insertData('t_usulan',$data);
                $krit=$this->db->get('kriteria')->result();
                
                foreach ($krit as $key => $value) {
                  $idp=$this->Usulan_model->oto_DUsulan();
                  $idpp=$this->input->post($value->kd_kriteria);
                  $dataaa = array('id_dt_usulan' => $idp,
                                  'id_usulan' => $this->input->post('id_usulan'),
                                 // 'kd_kriteria' => $value->kd_kriteria,
                                  'kd_sub_kriteria' =>$idpp 
                                  );
                  $this->Usulan_model->insertData('t_dt_usulan',$dataaa);
                }
                redirect("Usulan_control","refresh");
           }
    }
    public function Update()
    { 
        
                $id = $this->input->get('id_usulan',true);    
                $this->form_validation->set_rules('id_usulan', 'id_usulan', 'trim|required');
          $this->form_validation->set_rules('nama_usulan', 'nama_usulan', 'trim|required');
          $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
      $this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
                if($this->form_validation->run()==FALSE)
                {
                    $data['error']="";
                    $data['op'] = $this->Usulan_model->get_detail1('t_usulan','id_usulan',$id);
                    $tmp['content']=$this->load->view('Edit_usulan',$data,true);
                    $this->load->view('operator',$tmp);
                }
        
    }
    public function Update_action()
  {
   
            $this->form_validation->set_rules('nama_usulan', 'nama_usulan', 'trim|required');
            // $this->form_validation->set_rules('nama_usulan', 'nama_usulan', 'trim|required');
            // $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
            // $this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
            $id=$this->input->post('id_usulan');
                
      
      if ($this->form_validation->run() == FALSE)
      {
        
        $data['error']=validation_errors();
        $data['Usulan'] = $this->Usulan_model->get_detail1('t_usulan','id_usulan',$id);
                $tmp['content']=$this->load->view('Edit_usulan',$data,true);
                $this->load->view('User',$tmp); 
      }
      else
      {
        $field='id_usulan';
        $id = $this->input->post('id_usulan',true);
        $data= array (
            'id_usulan' => $this->input->post('id_usulan'), 
                               'nama_usulan' => $this->input->post('nama_usulan'),
                               'tanggal' => $this->input->post('tanggal'),
                               'lokasi' => $this->input->post('lokasi'),
                               );
            $quer=$this->Usulan_model->updateData1('t_usulan',$data,$field,$id);
            $krit=$this->db->get('kriteria')->result();
                
                foreach ($krit as $key => $value) {
                
                $idpp=$this->input->post($value->kd_kriteria);
                $dataaa = array(
                                  'kd_sub_kriteria' =>$idpp 
                                  );
                  $this->Usulan_model->updateData1('t_dt_usulan',$dataaa,$field,$id);
                }

                redirect("Usulan_control","refresh");
  }
}
    
    public function delete()
     {
           
            $field='id_usulan';
            $id = $this->input->get('id_usulan',true);    
            $this->Usulan_model->delete('t_dt_usulan',$field,$id);                   
            $query = $this->Usulan_model->delete('t_usulan',$field,$id);                   
            if ($query)
                {
                    $this->session->set_flashdata("message","berhasil");
                    redirect("Usulan_control","refresh");
                }
            else
                {
                    $this->session->set_flashdata("message","gagal");
                    redirect("Usulan_control","refresh");
                }
        }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_usulan', 'nama usulan', 'trim|required');
	$this->form_validation->set_rules('volume', 'volume', 'trim|required');
	$this->form_validation->set_rules('manfaat', 'manfaat', 'trim|required');
	$this->form_validation->set_rules('waktu_pelaksanaan', 'waktu pelaksanaan', 'trim|required');
	$this->form_validation->set_rules('anggaran', 'anggaran', 'trim|required');
	$this->form_validation->set_rules('nilai_vektor', 'nilai vektor', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('id_usulan', 'id_usulan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    function autocomplate(){
            
        
        $this->db->like('keterangan', $_GET['term']);
        $this->db->select('keterangan');
        $ket = $this->db->get('sub_kriteria')->result();
        foreach ($ket as $ket) {
            $return_arr[] = $ket->keterangan;
        }

        echo json_encode($return_arr);
    }
    function autocomplate_volume(){
        $this->db->like('keterangan', $_GET['term']);
        $this->db->select('keterangan');
        $ket = $this->db->get('sub_kriteria')->result();
        foreach ($ket as $ket) {
            $return_arr[] = $ket->keterangan;
        }

        echo json_encode($return_arr);
    }

    public function hitung(){
      $periode=$_POST['periode'];
      $data['periode']=$periode;
      

        $C="SELECT
            nama_usulan, t_usulan.id_usulan , id_dt_usulan, kriteria.nama_kriteria as nama_kriteria,  kriteria.kd_kriteria,sub_kriteria.nilai as nilai, tipe_kriteria, t_dt_usulan.kd_sub_kriteria, sub_kriteria.keterangan, tanggal, lokasi, bobot , nilai_vektor, periode
            FROM `t_usulan` 
            left join 
            t_dt_usulan on t_usulan.id_usulan=t_dt_usulan.id_usulan 
            left join 
            sub_kriteria on t_dt_usulan.kd_sub_kriteria=sub_kriteria.kd_sub_kriteria 
            left JOIN
            kriteria on sub_kriteria.kd_kriteria=kriteria.kd_kriteria 
            where 
            sub_kriteria.kd_sub_kriteria is NOT null and t_usulan.periode='$periode'";
            $krit="SELECT * from kriteria";
            $data['k'] = $this->db->query($krit)->result();
            $data['kriteria'] = $this->db->query($C)->result();
        $tmp['content'] = $this->load->view('V_hitung',$data,TRUE);
        $this->load->view('operator',$tmp);
    }
    public function hitung1(){
       
            $data['kriteria'] = $this->Usulan_model->get_data_proses();
            $data['k'] = $this->Usulan_model->get_kriteria();

        
            $tmp['content'] = $this->load->view('V_hitung1',$data,TRUE);
            $this->load->view('User',$tmp);



    }
   public function laporan(){
    $periode=$_GET['periode'];
    $data['periode']=$periode;
   
        $C="SELECT
            nilai_vektor, nama_usulan, t_usulan.id_usulan , id_dt_usulan, kriteria.nama_kriteria as nama_kriteria,  kriteria.kd_kriteria,sub_kriteria.nilai as nilai, t_dt_usulan.kd_sub_kriteria, sub_kriteria.keterangan, tanggal, lokasi,  periode
            FROM `t_usulan` 
            left join 
            t_dt_usulan on t_usulan.id_usulan=t_dt_usulan.id_usulan 
            left join 
            sub_kriteria on t_dt_usulan.kd_sub_kriteria=sub_kriteria.kd_sub_kriteria 
            left JOIN
            kriteria on sub_kriteria.kd_kriteria=kriteria.kd_kriteria 
            where 
            sub_kriteria.kd_sub_kriteria is NOT null and periode ='$periode'";

            $krit="SELECT kd_kriteria, nama_kriteria from kriteria";

            $data['k'] = $this->db->query($krit)->result();
            $data['kriteria'] = $this->db->query($C)->result();
            $this->load->view('cetak_pdf',$data);
            $paper_size  = 'A4'; //paper size
            $orientation = 'Landscape'; //tipe format kertas
            $html = $this->output->get_output();
            
            $this->dompdf->set_paper($paper_size, $orientation);
            //Convert to PDF
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }
    function cetak_excel(){
       $periode=$_GET['periode'];
         $C="SELECT
            nama_usulan, t_usulan.id_usulan , id_dt_usulan, kriteria.nama_kriteria as nama_kriteria,  kriteria.kd_kriteria,sub_kriteria.nilai as nilai, tipe_kriteria, t_dt_usulan.kd_sub_kriteria, sub_kriteria.keterangan, tanggal, lokasi, bobot 
            FROM `t_usulan` 
            left join 
            t_dt_usulan on t_usulan.id_usulan=t_dt_usulan.id_usulan 
            left join 
            sub_kriteria on t_dt_usulan.kd_sub_kriteria=sub_kriteria.kd_sub_kriteria 
            left JOIN
            kriteria on sub_kriteria.kd_kriteria=kriteria.kd_kriteria 
            where 
            sub_kriteria.kd_sub_kriteria is NOT null  and t_usulan.periode='$periode' order by nilai_vektor desc";

            $krit="SELECT kd_kriteria, nama_kriteria from kriteria";

            $data['k'] = $this->db->query($krit)->result();
            $data['kriteria'] = $this->db->query($C)->result();
            $this->load->view('cetak_excel',$data);
        }






        // ini untuk kepala desa
        //   ini untuk kepala desa
        //     ini untuk kepala desa
      function lihatranking($periode=''){
        $user=$this->session->userdata('user');
        $data['user']=$user;
        $periode = $_REQUEST['periode'];
        $data['periode']=$periode;
        $lihatranking="SELECT * from t_usulan where periode='$periode' order by nilai_vektor desc";
        $data['title'] = "Data Ranking";
        $data['isi']=$this->db->query($lihatranking)->result();
        $tmp['content'] = $this->load->view('V_ranking',$data,TRUE);
        $this->load->view('user',$tmp);
      }
       function lihatranking1(){
        $data['title'] = "Data Ranking";
         $lihatranking="SELECT * from t_usulan ";
        $data['isi1']=$this->db->query($lihatranking)->result();
        $tmp['content'] = $this->load->view('V_ranking1',$data,TRUE);
        $this->load->view('operator',$tmp);
      }
            

}

/* End of file C_usulan.php */
/* Location: ./application/controllers/C_usulan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-18 13:59:35 */
/* http://harviacode.com */