<?php
class Komentar extends CI_Controller
{
    // Membuat method index
    public function index()
    {
        if ($this->session->userdata('role') != "administrator") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('Komentar_model');
        $komentar = $this->Komentar_model->getAll();
        $data['komentar'] = $komentar;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        // akses ke model komentar
        $this->load->model('Komentar_model', 'komentar'); // 1

        $_isi = $this->input->post('isi');
        $_users_id = $this->input->post('users_id');
        $_wisata_id = $this->input->post('wisata_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');

        $data_komentar['tanggal'] = date('Y-m-d');                     // 2
        $data_komentar['isi'] = $_isi;
        $data_komentar['users_id'] = $_users_id;
        $data_komentar['wisata_id'] = $_wisata_id;
        $data_komentar['nilai_rating_id'] = $_nilai_rating_id;

        if ((!empty($_idedit))) {
            $data_komentar['id'] = $_idedit;
            $this->komentar->update($data_komentar);
        } else {
            $this->komentar->simpan($data_komentar);
        }
        redirect('komentar', 'refresh');
    }
    public function form()
    {
        $this->load->model('Users_model', 'users'); // 1
        $this->load->model('Tempat_wisata_model', 'wisata'); // 1

        $data['users'] = $this->users->getAll();
        $data['wisata'] = $this->wisata->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/form', $data);
        $this->load->view('layout/footer');
    }

    public function delete($id)
    {

        $this->load->model('komentar_model', 'komentar');
        $data_komentar['id'] = $id;
        $this->komentar->delete($data_komentar);
        redirect('komentar', 'refresh');
    }
    public function tampil()
    {
        if ($this->session->userdata('role') != "public") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('komentar_model');
        $komentar = $this->komentar_model->getAll();
        $data['komentar'] = $komentar;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/tampil', $data);
        $this->load->view('layout/footer');
    }

    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }

}
