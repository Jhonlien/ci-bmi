<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bmi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MBmi');
	}
	public function index(){
		$this->load->view('bmi/index');
	}

	public function result(){
		$MBmi = $this->MBmi->get_data();
		$bmi = $MBmi['berat'] / ($MBmi['tinggi'] * $MBmi['tinggi']);
		if($bmi < 17){
			$data = "Kurus";
		}
		elseif($bmi < 23){
			$data = "Normal";
		}
		elseif($bmi < 27){
			$data = "Kegemukan";
		}
		elseif($bmi > 27) {
			$data = "Obesitas";
		}
		$parsing = [
					'nama' 		=> $MBmi['nama'], 
					'tinggi' 	=> $MBmi['tinggi'], 
					'berat'		=> $MBmi['berat'],
					'hasil'		=> $data
				];

		$this->load->view('bmi/result', $parsing);
	}

}