<?php

class seleksi_syarat extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model(array('model_pegawai','model_seleksi_syarat'));
        check_session();
    }
    
    function index(){
        
    }

    function tampil_data(){
    	
    	$pegawai=$this->model_pegawai->select_all_pegawai();
    	foreach ($pegawai->result() as $pegawai_param) {
    		# code...
    		$data['id_pegawai']=$pegawai_param->id_pegawai;
    		$data['id_jabatankosong']=$this->uri->segment(3);

    		$this->model_seleksi_syarat->insert($data);
    	}
    }
}