<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
 	public function __construct()
    {
        parent::__construct();
        $this->load->model('Panel_model');
    }

	public function index()
	{
		$this->load->view('panel/anasayfa');
	}

	public function video()
	{
   		$list= $this->Panel_model->get_all();
        $viewData['list']=$list;
        $this->load->view('panel/video', $viewData);




		
	}
}
