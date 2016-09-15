<?php

if (!defined('BASEPATH'))

	exit('No direct script access allowed');



class Register extends CI_Controller

{
	function __construct()

	{

		parent::__construct();

		$this->load->database();

		/*cash control*/

		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');

		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

		$this->output->set_header('Pragma: no-cache');

		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

		

	}

	

	/***default functin, redirects to login page if no admin logged in yet***/

	public function index()

	{
		$this->load->view('register_user');
    }

	
function add_user($param1 = '', $param2 = '', $param3 = '')

	{
    $this->db->where('email', $this->input->post('email'));
	$query = $this->db->get('patient');
	if($query->num_rows >= 1)
	{   
		$this->session->set_flashdata('flash_message', get_phrase('user already exists'));
	    redirect(base_url() . 'index.php?register', 'refresh');
	}


          if ($param1 == 'adduser') {

			$data['name']                      = $this->input->post('name');

			$data['email']                     = $this->input->post('email');

			$data['password']                  = $this->input->post('password');

			$data['address']                   = $this->input->post('address');

			$data['phone']                     = $this->input->post('phone');

			$data['sex']                       = $this->input->post('sex');

			$data['birth_date']                = $this->input->post('birth_date');

			$data['age']                       = $this->input->post('age');

			$data['blood_group']               = $this->input->post('blood_group');

			$data['next_of_kin']               = $this->input->post('next_of_kin_full_name');

			$data['next_of_kin_phon']               = $this->input->post('next_of_kin_phone');

			$data['account_opening_timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));

			$this->db->insert('patient', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			redirect(base_url() . 'index.php?login', 'refresh');

		}
		

	}

	
	function validate_user($str)

	{

		  $query = $this->db->get_where($this->input->post('login_type'), array(

			'email' => $this->input->post('email'),

			'password' => $this->input->post('password')

		));

		if ($query->num_rows() > 0) {

			$this->session->set_flashdata('flash_message', get_phrase('login_failed'));

			return FALSE;

		}else {

			return true;

		}

	}

	
	

	

}

