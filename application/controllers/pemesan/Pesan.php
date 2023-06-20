<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// memuat view
		// $this->load->view('V_Home');
	}

	public function linkpemesanan()
	{
		// perintah ini daftar didaftarkan secara otomatis pada config autoload model
		$this -> load -> Model ('M_Pesan');

		$dt = $this -> M_Pesan -> getAll ();

		// masukkan ke dalam temporer
		$temp['data'] = $dt;
		$temp['title'] = "Form Pemesanan";

		// kirim ke view dengan membawa temporer
		$this -> load -> view ('V_Pesan', $temp);
	}

	public function delete($id){
		$M_Pesan = $this->load->model('M_Pesan');
		$this->M_Pesan->deletePesan($id);
		redirect (base_url('/index.php/Pesan/linkpemesanan'));
	}

	public function createForm(){
		$this->load->view('V_CreatePesan');
	}

	public function updateForm($id){
		$M_Pesan = $this->load->model('M_Pesan');
		$createpesan = $this->M_Pesan->getPesan($id);
		
		$data=array('data_pesan'=>$createpesan);
		$this->load->view('V_UpdatePesan', $data);
	}

	public function createAction(){
		// ambil semua material post dan masukkan ke dalam variabel
		// cek semua variabel
		// print_r($_POST);
		// exit();

		// ambil semua nilai post dan masukkan ke dalam variabel
		$perusahaan = $this->input->post('perusahaan');
		$kemitraan = $this->input->post('kemitraan');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$createaction = array(
			'perusahaan' => $perusahaan,
			'kemitraan' => $kemitraan,
			'alamat' => $alamat,
			'email' => $email
		);

		// kirim data array ke penyimpanan
		$M_Pesan = $this->load->model('M_Pesan');
		$this->M_Pesan->insertPesan($createaction);
		// kembali ke halaman
		redirect (base_url('/index.php/Pesan/linkpemesanan'));
	}

	public function updateAction(){
		$id = $this->input->post('id_pesan');
		$perusahaan = $this->input->post('perusahaan');
		$kemitraan = $this->input->post('kemitraan');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$updateaction = array(
			'perusahaan' => $perusahaan,
			'kemitraan' => $kemitraan,
			'alamat' => $alamat,
			'email' => $email
		);

		$M_Pesan = $this->load->model('M_Pesan');
		$this->M_Pesan->editPesan($updateaction, $id);
		redirect (base_url('/index.php/Pesan/linkpemesanan'));
	}
}
