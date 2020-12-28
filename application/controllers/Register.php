<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register  extends CI_Controller {

	

	

	public function index()
	{

		$data['title']='Add User';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('age', 'Age', 'required|is_numeric|validate_age');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
 

		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
		

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}

	

		if ($this->form_validation->run() == FALSE) {


     	$this->load->view('include/header');
		$this->load->view('register');
		$this->load->view('include/footer');



		} else {


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['age']=$this->input->post('age');
			$idata['mobile']=$this->input->post('mobile');
			$idata['password']=$this->input->post('password');
			$idata['Type']=$this->input->post('user_type');




			//FILE UPLOAD CODE//
			if(!empty($_FILES) && ($_FILES['picture']['name'])){

		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('picture')) {
		 $this->session->set_flashdata('message', $this->upload->display_errors());

		redirect('Register');
		} else {
		$avatar = $this->upload->data();
		$picture = $avatar['file_name'];

		$idata['picture']=$picture;
		}

		}else{

		$message='<div class="alert alert-danger">Please Add Your image</div>';

		$this->session->set_flashdata('message',$message);

		redirect('Register');

		}



			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
}
