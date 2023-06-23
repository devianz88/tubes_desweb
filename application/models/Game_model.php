<?php

class Game_model extends CI_Model
{
    public function getgame($data)
    {
        
        $query = $this->db->get('t_game');
        return $query->result();
    }


}