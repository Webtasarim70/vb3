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
		$list= $this->Panel_model->get_all('videolar', 'video_id');
		$viewData['list']=$list;
		$this->load->view('panel/video', $viewData);
	}

	public function video_form($id)
	{
		$where=array('video_id' => $id);
		$list = $this->Panel_model->get($where);
		$viewData['list']=$list;
		$this->load->view('panel/video_edit', $viewData);
	}

	public function delete($id)
	{
		$where = array('video_id' => $id);

		$this->Panel_model->delete($where);

		$alert = array(
			'title'  => 'İşlem Başarılıdır',
			'message' => 'Kayıt Silindi..',
			'icon'    =>'check',
			'type'      =>'success'
		);
		$this->session->set_flashdata('alert', $alert);
		redirect(base_url('panel/video'));
	}

	public function update($id)
	{
		$where = array('video_id' => $id);
		$data =array(
			'video_baslik' => $this->input->post('video_baslik'),
			'video_sahibi' => $this->input->post('video_sahibi'),
			'video_resim' => $this->input->post('video_resim'),
			'video_aciklama' => $this->input->post('video_aciklama'),
			'video_etiketler' => $this->input->post('video_etiketler'),
			'video_durum' => $this->input->post('video_durum'),
			'video_tavsiye' => $this->input->post('video_tavsiye'),
		);

		$update=$this->Panel_model->update($where, $data);
		if ($update){
			$alert = array(
				'title'   => 'İşlem Başarılıdır',
				'message' => 'Güncelleme Başarılıdır..',
				'icon'    =>'check',
				'type'      =>'success'
			);

		} else{
			$alert = array(
				'title'    => 'İşlem Başarısız',
				'message'  => 'Güncelleme Yapılmadı',
				'icon'     =>'ban',
				'type'     =>'danger'
			);
		}

		$this->session->set_flashdata('alert', $alert);
		redirect(base_url('panel/video'));

	}

	public function video_bak()
	{
		$apikey= $this->Panel_model->get_apikey();
		$q= $this->input->post('video_bak');
		$q=preg_replace('/ /','+' ,$q);

		$searchUrl="https://www.googleapis.com/youtube/v3/search?part=snippet&q=".$q."&type=video&key=".$apikey."&maxResults=50";



		$response=file_get_contents($searchUrl);
		$list=json_decode($response,true);

                     //echo "<pre>"; print_r($list); echo "<pre>";

		$viewData['list']=$list;
		$this->load->view('panel/aramaliste', $viewData);

	}

	public function video_ekle_form($id) 
	{
		$apikey= $this->Panel_model->get_apikey();
		$yunusemre = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$id."&key=".$apikey."&part=snippet");
		$list =json_decode($yunusemre,true);
		$viewData['list']=$list;
		$this->load->view('panel/newadd', $viewData);
		                   // echo "<pre>"; print_r($list); echo "<pre>";

	}

	public function video_ekle($id)
	{
		
		$baslik= $this->input->post('video_baslik');
		$sefbaslik= $this->Panel_model->sef_link($baslik);

		$etiket = $this->input->post('video_etiketler');
		$sefyap= explode(',',$etiket);
		$dizi=array();
		foreach ($sefyap as $par){
			$dizi[]=$this->Panel_model->sef_link($par);
		}
		$deger=implode(',', $dizi);

		$data =array(
			'video_baslik'        => $baslik,
			'video_sef_baslik'    => $sefbaslik,
			'video_url'			  => $id,
			'video_kat'			  => $this->input->post('kategori'),
			'video_sahibi'        => $this->input->post('video_sahibi'),
			'video_resim'         => $this->input->post('video_resim'),
			'video_aciklama'      => $this->input->post('video_aciklama'),
			'video_etiketler'     => $etiket,
			'video_sefetiketler'  => $deger,
			'video_durum'         => $this->input->post('durum'),
			'video_tavsiye'       => $this->input->post('tavsiye'),
			'video_eklemetarihi'  => $this->input->post('tarih'),
			'video_goruntulenme'  => 0
		);

		$insert=$this->Panel_model->insert($data);
		if ($insert){
			$alert = array(
				'title'   => 'İşlem Başarılıdır',
				'message' => 'Video Eklendi..',
				'icon'    =>'check',
				'type'      =>'success'
			);

		} else{
			$alert = array(
				'title'    => 'İşlem Başarısız',
				'message'  => 'Video Eklenemedi',
				'icon'     =>'ban',
				'type'     =>'danger'
			);
		}

		$this->session->set_flashdata('alert', $alert);
		redirect(base_url('panel/video'));
	}


	// kategori işlemleri

    public function kategori()
    {
        $list= $this->Panel_model->get_all('kategori', 'kategori_id');
        $viewData['list']=$list;
        $this->load->view('panel/kategori', $viewData);
    }




//class sonu
}
