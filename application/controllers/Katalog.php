<?php

class Katalog extends CI_Controller{
    function construct() {
        parent::__construct(); 
        $this->load->model('Model_barang');
    }


   public function index(){
        //$data['barang'] = $this->Model_barang->tampil_barang()->result();
        $this->load->view('Katalog/header');
        $this->load->view('Katalog/index');
        $this->load->view('Katalog/footer');
    }
    function detailBaju(){
        // $data["barang"] = $this->Model_barang->selectone($id)->row();
        
        $this->load->view('katalog/header');
        $this->load->view('katalog/detailbaju');
        $this->load->view('katalog/footer');
    
    }

    function about(){
        
        $this->load->view('Katalog/header');
        $this->load->view('about');
    }
}