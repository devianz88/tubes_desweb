<?php

class User_model extends CI_Model
{
    public function get_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->get('t_users')->row();
    }

    public function get_users()
    {
        return $this->db->get('t_users')->result();
    }

    // Add more methods as needed
}
