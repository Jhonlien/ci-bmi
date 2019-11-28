<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBmi extends CI_Model {
	public function get_data(){
		$nama	  = $this->input->get('nama');
		$tinggi	  = $this->input->get('tinggi');
		$berat	  = $this->input->get('berat');
		$data 	  = ['nama'=>$nama, 'tinggi'=>$tinggi/100, 'berat' => $berat];
		return $data;
	}
}