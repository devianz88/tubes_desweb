<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries and models
        $this->load->library('form_validation');
        $this->load->model('Payment_model');
    }

    public function process()
    {
        // Handle payment processing form submission
     
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $nohp = $this -> input -> post ('nohp');

                $payment_data = array(
                    'name' => $name,
                    'email' => $email,
                );
                $payment_id = $this->Payment_model->save_payment($payment_data);
                
                if ($payment_id) {
                    // Payment processed successfully, redirect to success page
                    redirect('payment/success/' . $payment_id);
                } else {
                    // Error saving payment details
                    $data['error'] = 'Failed to process payment.';
                    $this->load->view('payment_form', $data);
                }
                
        
    }

    public function success($payment_id)
    {
        // Display success page with payment details
        $data['t_payment'] = $this->Payment_model->get_payment($payment_id);
        $this->load->view('t_payment', $data);
        $this->load->view('t_UserVoucher', $data);
    }
}