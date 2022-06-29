<?php

class Model_katalog extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function selectone($id)
	{
		return $this->db->where('id_barang', $id)->get('barang')->row();
	}
}