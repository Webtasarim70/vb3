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
		$tavsiyeler=$this->Vb_model->get_where('videolar',array('video_durum' =>1, 'video_tavsiye'=>1 ) ,'video_eklemetarihi');
		$rastgele=$this->Vb_model->rastgele('videolar',array('video_durum' =>1) ,'video_eklemetarihi');
		$sicaklar=$this->Vb_model->get_where('videolar',array('video_durum' =>1) ,'video_goruntulenme');
		$yeniler=$this->Vb_model->limitli('videolar', 
			array('video_durum' =>1) , 'video_eklemetarihi', 3, 1);
		$onecikarilankategori1 =$this->Vb_model->kat_id(array('kategori_durum' =>1, 'kategori_tavsiye'=>1 ));
		$onecikarilankategori2 =$this->Vb_model->kat_id(array('kategori_durum' =>1, 'kategori_tavsiye'=>2 ));
        $tavsiyekategori1=$this->Vb_model->get_where('videolar', array('video_durum' =>1, 'video_kat'=>$onecikarilankategori1) , 'video_goruntulenme');
        $tavsiyekategori2=$this->Vb_model->get_where('videolar', array('video_durum' =>1, 'video_kat'=>$onecikarilankategori2) , 'video_goruntulenme');

		$menuler;
		$sosyalmenu;
		$kategoriler;
		$yorumlar;


		//data
		$viewData['ayarlar']=$ayarlar;
		$viewData['videolar']=$videolar;
		$viewData['slider']=$slider;
		$viewData['tavsiyeler']=$tavsiyeler;
		$viewData['yeniler']=$yeniler;
		$viewData['rastgele']=$rastgele;
		$viewData['sicaklar']=$sicaklar;
        $viewData['tavsiye1']=$tavsiyekategori1;
        $viewData['tavsiye2']=$tavsiyekategori2;






        $this->load->view('vb/index', $viewData);
		//$this->load->view('vb/index');

	}


}
