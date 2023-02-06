<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function manger($plat='',$boisson=''){
		if ($plat!='') {
			echo 'On dis que tu manges du'.$plat.'<\br>';
			echo 'Et du'.$boisson.' comme jus';
		}else{
		echo 'Tu es au regime';
    	}
    }

    public function tobe($pseudo=''){
        if ($pseudo!='') {
            echo 'On appele toi '.$pseudo.'</br>';
            echo 'Sady mpaka '.$this->input->get('id').' comme id';
        }else{
            echo 'On ne te connait pas';
        }
    }

    public function index(){
        $data=array();
        $data['nom']='Stark';
        $data['status']='Legend';
        $this->load->view('Test_redirect',$data);
    }

    public function methode($money=''){
        $this->load->helper('millier_helper');
        display_money($money);
    }
}
?>