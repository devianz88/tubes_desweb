<?php

class UserVoucher_model extends CI_Model
{
    public function get_user_voucher($user_voucher_id)
    {
        $this->db->where('user_voucher_id', $user_voucher_id);
        return $this->db->get('t_userVouchers')->row();
    }

    public function get_user_vouchers()
    {
        return $this->db->get('t_userVouchers')->result();
    }

    // Add more methods as needed
}