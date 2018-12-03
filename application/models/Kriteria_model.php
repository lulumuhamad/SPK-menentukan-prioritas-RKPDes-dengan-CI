<?php
class Kriteria_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    function Get_data($table)
    {
        return $this->db->get($table);
    }
    function Get_data_sub($table)
    {
      $this->db->join('kriteria','sub_kriteria.id_kriteria=kriteria.id_kriteria');
        $dd= $this->db->get('sub_kriteria');
        return $dd;
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function oto_kriteria()
    {
      $query= "SELECT max(RIGHT(kd_kriteria,4)) as id_auto from kriteria";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,2,2);
      $no++;
      $char="KT";
      $new= $char . sprintf("%02s", $no);
      return $new;
    }
    function oto_subkriteria()
    {
      $query= "SELECT max(RIGHT(kd_sub_kriteria,5)) as id_auto from sub_kriteria";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,3,2);
      $no++;
      $char="DKT";
      $new= $char . sprintf("%02s", $no);
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
    function get_kriteria($table,$id_table,$id) {
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
    function updateData($table,$data,$field,$id)
    {
        $this->db->where($field,$id);
        $this->db->update($table,$data);
    }   
}
?>