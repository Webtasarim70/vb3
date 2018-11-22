<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vb_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		//site ayarları
		$ayarlar= $this->Vb_model->get_row(array('ayar_id' =>1), 'ayarlar');
		
		//videolar
		$videolar=$this->Vb_model->get_all('videolar','video_id');
		$slider=$this->Vb_model->get_where('videolar',array('video_durum' =>1 ,'video_slider'=>1 ) ,'video_eklemetarihi');
		$tavsiyeler=$this->Vb_model->get_where('videolar',array('video_durum' =>1 ,'video_tavsiye'=>1 ) ,'video_eklemetarihi');
		$onecikan;
		$rastgele;
		$sicaklar;
		$yeniler;

		$menuler;
		$sosyalmenu;
		$kategoriler;
		$yorumlar;


		//data
		$viewData['ayarlar']=$ayarlar;
		$viewData['videolar']=$videolar;
		$viewData['slider']=$slider;
		$viewData['tavsiyeler']=$tavsiyeler;


		$this->load->view('vb/index', $viewData);
		//$this->load->view('vb/index');

	}


}
