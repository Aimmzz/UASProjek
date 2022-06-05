<?php

class Katalog extends CI_Controller{
    function index(){
        $this->load->view('Katalog/header');
        $this->load->view('Katalog/index');
        $this->load->view('Katalog/footer');
    }
    function detailBaju(){

        $this->load->view('Baju/header');
        $this->load->view('Baju/1');
        
    }
}