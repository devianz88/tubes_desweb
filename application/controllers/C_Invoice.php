<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries and models
        $this->load->library('form_validation');
        $this->load->model('Invoice_model');
    }

    public function create()
    { 
        $nama = $this->input->post('nama');
		$notelp = $this->input->post('notelp');
		$email = $this->input->post('email');
        $tagihan = $this -> input -> post ('tagihan');
		$createaction = array(
			'nama' => $nama,
			'notelp' => $notelp,
			'email' => $email
		);

		//Kirim data array ke penyimpanan
		$this->Invoice_model->insertInvoice($createaction);
		//Kembali ke halaman tertentu
		redirect (base_url('/index.php/C_Pesan/linkpesan'));
 
    }

    public function details($invoice_id)
    {
     
        $data['invoice'] = $this->Invoice_model->get_invoice($invoice_id);

        if ($data['invoice']) {
           
            $this->load->view('invoice_details', $data);
        } else {
            
            $data['error'] = 'Invoice not found.';
            $this->load->view('invoice_error', $data);
        }
    }
}