<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        if(!isset($_SESSION)){
            session_start();
        }
        //-> cek login
        if(isset($_POST["login"])){
            $user = $this->input->post("username");
            $password = md5($this->input->post("password"));
            $query = $this->db->query("SELECT * FROM `users` WHERE username = '$user' AND Password='$password'");
            if($query->num_rows() > 0){
                $tmp = $query->result_array();
				$_SESSION['id_user'] = $tmp[0]['id_user'];
                $_SESSION['nama_lengkap'] = $tmp[0]['nama_lengkap'];
            }else{
            	//-> Informasi password & username tidak cocok
            	$this->session->set_flashdata('info', 'Email & Password tidak cocok!');
            }

        }

        //-> membuat perbedaan tingkat login
        if(isset($_SESSION['id_user'])){

           redirect('Admin');
        }

        else{
            $this->load->view('login');
        }

	}


}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
