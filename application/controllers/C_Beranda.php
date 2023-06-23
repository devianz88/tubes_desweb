<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Beranda extends CI_Controller {

	public function gotoHome()
	{
		$this->load->view('V_home');
	}
	
	public function FAQ()
	{
		$this->load->view('V_faq');
	}
    public function Game()
    {
        // Display all games
        $data['games'] = $this->Game_model->get_games();
        $this->load->view('t_game', $data);
    }

    public function Games($game_id)
    {
        // Display a specific game
        $data['game'] = $this->Game_model;
    }
	

 }

