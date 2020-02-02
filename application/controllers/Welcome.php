<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data = [
            "title"   => "Test on Idealight Indonesia",
            "user"    => json_decode(file_get_contents('https://randomuser.me/api/')),
        ];
        
		$this->load->view('main', $data);
        
//        return $this->output
//            ->set_content_type('application/json')
//            ->set_status_header(500)
//            ->set_output(json_encode($data));
	}
}
