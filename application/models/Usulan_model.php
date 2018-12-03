<?php
class Usulan_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
 	function Get_data($table){
        return $this->db->get($table);
 	
  }
  function get_data_proses()
  {
    $query=$this->db->query("SELECT nama_usulan, t_usulan.id_usulan , id_dt_usulan, kriteria.nama_kriteria as nama_kriteria,  kriteria.kd_kriteria,sub_kriteria.nilai as nilai, tipe_kriteria, t_dt_usulan.kd_sub_kriteria, sub_kriteria.keterangan, tanggal, lokasi, bobot 
            FROM `t_usulan` left join 
            t_dt_usulan on t_usulan.id_usulan=t_dt_usulan.id_usulan 
            left join 
            sub_kriteria on t_dt_usulan.kd_sub_kriteria=sub_kriteria.kd_sub_kriteria 
            left JOIN
            kriteria on sub_kriteria.kd_kriteria=kriteria.kd_kriteria 
            where 
            sub_kriteria.kd_sub_kriteria is NOT null");
      return $query->result();

           
  }
  function get_kriteria()
  {
     $query=$this->db->query("SELECT kd_kriteria, nama_kriteria from kriteria");
     return $query->result();
  }
  
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function oto_Usulan()
    {
      $query= "SELECT max(RIGHT(id_usulan,3)) as id_auto from t_usulan";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,1,3);
      $date=date('Y');

      $no++;

      $char="U";
      $new= $char .$date. sprintf("%03s", $no);
      return $new;
    }
    function oto_DUsulan()
    {
      $query= "SELECT max(RIGHT(id_dt_usulan,3)) as id_auto from t_dt_usulan";
      $data =$this->db->query($query)->row_array();
       $id = $data ['id_auto'];
       $no= (int) substr($id,1);
        $date=date('Y');

      $no++;

      $char="DU";
      $new= $char .$date. sprintf("%03s",$no);
      return $new;
    }
    function kriteria()
    {
      $query= "SELECT max(RIGHT(id_kriteria,20)) as id_auto from tabel_kriteria";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,1,2);

      $no++;

      $char="K";
      $new= $char . sprintf("%02s", $no);
      return $new;
    }        
    function bobot()
    {
      $query= "SELECT max(RIGHT(id_bobot,20)) as id_auto from tabel_bobot";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,2,3);

      $no++;

      $char="BB";
      $new= $char . sprintf("%03s", $no);
      return $new;
    }
    function bobotkriteria()
    {
      $query= "SELECT max(RIGHT(id_bobotkriteria,20)) as id_auto from tabel_bobot_kriteria";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,2,3);

      $no++;

      $char="BK";
      $new= $char . sprintf("%03s", $no);
      return $new;
    }
    function Admin()
    {
      $query= "SELECT max(RIGHT(id_user,20)) as id_auto from tabel_user";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,3,2);

      $no++;

      $char="ADM";
      $new= $char . sprintf("%03s", $no);
      return $new;
    }
   
    function Delete($table,$field,$id)
    {
        $this->db->where($field,$id);
        $this->db->delete($table);
    }   
 	function get_detail1($table,$id_table,$id) {
        $this->db->where($id_table,$id);
        $query = $this->db->get($table);
        $isi=$query->row_array();
        return $isi;
    }	
      function get_detail12($table,$id_table,$id) {
        $this->db->where($id_table,$id);
        $query = $this->db->get($table);
        $isi=$query->result_array();
        return $isi;
    } 
    public function updateData1($table,$data,$field,$id)
    {
        $this->db->where($field,$id);
        $this->db->update($table,$data);
    }
    function updateData2($table,$data,$field,$id)
    {
        $this->db->where($field,$id);
        $this->db->update($table,$data);
    }   
}
?>