<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_login extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('pengguna', $data);
			return $query;
		}
		public function get($data) {
			$query = $this->db->get('pengguna', $data);
			return $query;
		}
		 function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
     function Get_data($table)
    {
        return $this->db->get($table);
    }
    function oto_admin()
    {
      $query= "SELECT max(RIGHT(id_pengguna,4)) as id_auto from pengguna";
      $data =$this->db->query($query)->row_array();
      $id = $data ['id_auto'];
      $no= (int) substr($id,2,2);
     

      $no++;

      $char="ADM-";
      $new= $char . sprintf("%02s", $no);
      return $new;
    }
   

	}

?>