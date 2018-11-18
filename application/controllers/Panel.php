<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panel_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$this->load->view('panel/anasayfa');
		}
	}

	public function login_form(){

		$login=$this->session->userdata('user');
		if ($login) {
			$this->load->view('panel/anasayfa');
		}else{
			$this->load->view('panel/login');

		}
	}

	public function login(){
		// form validation
		$this->form_validation->set_rules('email','E-posta','required|trim|valid_email');
		$this->form_validation->set_rules('sifre','Şifre','required|trim|min_length[6]');



		if($this->form_validation->run() == FALSE){
            //hata mesajı göster

			$hata= array(
				'required'       => '<strong>{field}</strong> alanını doldurmak zorundasınız.',
				'valid_email'    => 'Lütfen Gecerli Bir Eposta Adresi Giriniz',
				'min_length'     => 'Şifrenizi tam olarak giriniz'
			);
			$this->form_validation->set_message($hata);

			echo validation_errors();

			echo 'form validation hatası';
		}else{
		        //form validation TRUE, db control

			$where =array(
				'admin_posta' => $this->input->post('email'),
				'admin_sifre' => sha1(md5($this->input->post('sifre'))),
			);
			$member= $this->Panel_model->get($where,'admin');

			if($member){
				$this->session->set_userdata('user', $member);
				$this->load->view('panel/anasayfa');
			}else{
				echo 'Girdiğiniz bilgilerde bir üye bulunamadı';
			};

		}


	}

	public function logout() {
		$this->session->unset_userdata('user');
		redirect(base_url('panel/login_form'));
	}

	public function video()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$list= $this->Panel_model->get_all('videolar', 'video_id');
			$viewData['list']=$list;
			$this->load->view('panel/video', $viewData);
		}
	}

	public function video_form($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$where=array('video_id' => $id);
			$list = $this->Panel_model->get($where, 'videolar');
			$viewData['list']=$list;
			$this->load->view('panel/video_edit', $viewData);
		}	
	}

	public function delete($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$where = array('video_id' => $id);

			$this->Panel_model->delete($where, 'videolar');

			$alert = array(
				'title'  => 'İşlem Başarılıdır',
				'message' => 'Kayıt Silindi..',
				'icon'    =>'check',
				'type'      =>'success'
			);
			$this->session->set_flashdata('alert', $alert);
			redirect(base_url('panel/video'));  
		}
		
	}

	public function update($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
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

			$update=$this->Panel_model->update($where, $data, 'videolar');
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
	}

	public function video_bak()
	{

		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{

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
	}

	public function video_ekle_form($id) 
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{

			$apikey= $this->Panel_model->get_apikey();
			$yunusemre = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$id."&key=".$apikey."&part=snippet");
			$list =json_decode($yunusemre,true);
			$viewData['list']=$list;
			$this->load->view('panel/newadd', $viewData);
		                   // echo "<pre>"; print_r($list); echo "<pre>";
		}
	}

	public function video_ekle($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{


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
	}


	// kategori işlemleri

	public function kategori()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$list= $this->Panel_model->get_all('kategori', 'kategori_id');
			$viewData['list']=$list;
			$this->load->view('panel/kategori', $viewData);
		}
	}
	public function kategorii()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$list= $this->Panel_model->get_all('kategori', 'kategori_id');
			$viewData['list']=$list;
			$this->load->view('panel/kategorii', $viewData); 
		}
	}

	public function kategoriekleform()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			$this->load->view('panel/kategoriekleform');
		}
	}

	public function kategoriekle()
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
		//  kategori_id 	ana_kategori_id 	kategori_adi 	kategori_aciklama 	kategori_durum 

			$kategori_adi       = $this->input->post('kategori');
			$ustkategori		= $this->input->post('ana_kategori_id');
			$kategoriaciklama 	= $this->input->post('kategori_aciklama');

			$data =array(
				'kategori_adi'           => $kategori_adi,
				'ana_kategori_id'        => $ustkategori,
				'kategori_aciklama'		 =>$kategoriaciklama,
				'kategori_durum'		 =>1
			);	

			$insert=$this->Panel_model->insert($data,'kategori');
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
			redirect(base_url('panel/kategori'));
		}
	}

	public function kategorisil($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{


			$where = array('kategori_id' => $id);

			$this->Panel_model->delete($where,'kategori');

			$alert = array(
				'title'  => 'İşlem Başarılıdır',
				'message' => 'Kayıt Silindi..',
				'icon'    =>'check',
				'type'      =>'success'
			);
			$this->session->set_flashdata('alert', $alert);
			redirect(base_url('panel/kategori'));
		}
	}

	public function kategori_form($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{


			$where=array('kategori_id' => $id);
			$list = $this->Panel_model->get($where, 'kategori');
			$viewData['list']=$list;
			$this->load->view('panel/kategori_edit', $viewData);
		}
	}

	public function updateKategori($id)
	{
		$login=$this->session->userdata('user');
		if (!$login) {
			$this->load->view('panel/login');
		}else{
			
			
			$kategori_adi       = $this->input->post('kategori');
			$ustkategori		= $this->input->post('ana_kategori_id');
			$kategoriaciklama 	= $this->input->post('kategori_aciklama');



			$where = array('kategori_id' => $id);
			$data =array(
				'kategori_adi'       => $kategori_adi,
				'ana_kategori_id'    => $ustkategori,
				'kategori_aciklama'  =>$kategoriaciklama
			);

			$update=$this->Panel_model->update($where, $data, 'kategori');
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
			redirect(base_url('panel/kategori'));

		}
	}




//class sonu
}
