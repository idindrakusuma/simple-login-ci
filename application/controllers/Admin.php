<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
        	redirect(base_url());
        }
	}
	public function index()
	{
		echo "Halaman Admin, ".$_SESSION['nama_lengkap']."!";
		echo "
			<a href='Admin/logout'> Logout</a>
		";
	}

	public function logout(){
		session_destroy();
    	redirect(base_url());
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */