<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{
    public function save_payment($data)
    {
        // Save payment details to the database
        $this->load->t_payment;
        return $this->db->insertPay(); 
    }

    public function get_payment($payment_id)
    {
        // Retrieve payment details from the database
        $query = $this->db->get_where('payments', array('id' => $payment_id));
        return $query->row(); 
    }

}