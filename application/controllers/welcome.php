<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function sendmail(){
		$this->load->library("phpmailer_lib");
		
        $from = $this->input->post('email');
        $from_name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
		
		$status = $this->phpmailer_lib->sendEmail($from,$from_name,$subject,$message);
	    if($status){
			echo 'Email Send Successfully.';
		}else{
			echo 'Message could not be sent.';
		}
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */