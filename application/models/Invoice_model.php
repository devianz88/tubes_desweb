<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    public function create_invoice($user_name, $amount)
    {
        // Create a new invoice record in the database
        $data = array(
            'user_name' => $user_name,
            'amount' => $amount,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->load->insert('t_invoice', $data);
        return $this->db->insert_id(); // Return the last inserted ID
    }

    public function get_invoice($invoice_id)
    {
        // Retrieve the details of a specific invoice from the database
        $query = $this->db->get_where('t_invoice', array('id' => $invoice_id));
        return $query->row(); 
    }

    
}