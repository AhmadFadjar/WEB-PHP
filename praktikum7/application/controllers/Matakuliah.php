<?php 
class Matakuliah extends CI_Controller{
    public function index()
    {
    $this -> load -> model('Matakuliah_model');
    $matakuliah = $this -> Matakuliah_model -> getAll();
    $data['matakuliah'] = $matakuliah;
    // kirim data dan kirim ke dalam view   
    $this->load->view('layouts/header');
    $this->load->view('matakuliah/index', $data);
    $this->load->view('layouts/footer');    
    }
}

?>