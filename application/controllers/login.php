<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		
		//$this->load->view('frontend/contak',$data);
		$data['title']='RKPDes';
		$tmp['content']=$this->load->view('front', $data,TRUE);
		$this->load->view('front',$tmp);
		;
	}
	public function cek_login() {
		$data = array('user' => $this->input->post('user', TRUE),
						'pass' => md5($this->input->post('pass', TRUE))
			);
		$this->load->model('M_login'); // load model_user
		$user = $this->M_login->cek_user($data);
		if ($user->num_rows() == 1) {
			foreach ($user->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_admin'] = $sess->id_admin;
				$sess_data['user'] = $sess->user;
				$sess_data['pass'] = $sess->pass;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='kades') {
				redirect('User_control');
			}
			elseif ($this->session->userdata('level')=='operator') {
				redirect('User_control/operator');
			}		
		}
		
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
	}
}

		public function logout() {
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('welcome');
	}

}

?>