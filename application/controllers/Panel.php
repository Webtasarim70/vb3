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
			'personel_ad' => $this->input->post('personel_ad'),
			'img_id'     =>  $this->upload->data('file_name')
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

			$this->session->set_flashdata('alert', $alert);
			redirect(base_url('panel/video'));
		}
	}



//class sonu
}
