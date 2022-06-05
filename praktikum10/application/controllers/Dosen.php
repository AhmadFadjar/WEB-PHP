<?php 
class Dosen extends CI_Controller{
    public function index()
    {
    $this -> load -> model('Dosen_model');
    $dosen = $this -> Dosen_model -> getAll();
    $data['dosen'] = $dosen;
    // kirim data dan kirim ke dalam view   
    $this->load->view('layouts/header');
    $this->load->view('dosen/index', $data);
    $this->load->view('layouts/footer');
    }

    public function detail($id){
    //akses model mahasiswa
    $this->load->model('Dosen_model');
    $ddosen = $this->Dosen_model->getById($id);
    $data ['ddosen'] = $ddosen;
    $this->load->view('layouts/header');
    $this->load->view('dosen/index', $data);
    $this->load->view('layouts/footer');
    }

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
}
?>