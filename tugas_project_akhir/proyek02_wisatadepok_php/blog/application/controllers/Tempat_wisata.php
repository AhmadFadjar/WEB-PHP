<?php
class Tempat_wisata extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('role') != "administrator") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('tempat_wisata_model');
        $tempat_wisata = $this->tempat_wisata_model->getAll();
        $data['tempat_wisata'] = $tempat_wisata;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/index', $data);
        $this->load->view('layout/footer');
    }

    public function form()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/form');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('tempat_wisata_model', 'tempat_wisata');

        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_id = $this->input->post('jenis_id');
        $_skor_rating = $this->input->post('skor_rating');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_kecamatan_id = $this->input->post('kecamatan_id');
        $_website = $this->input->post('website');
        $_fasilitas = $this->input->post('fasilitas');


        $data_tempat_wisata['nama'] = $_nama;
        $data_tempat_wisata['alamat'] = $_alamat;
        $data_tempat_wisata['latlong'] = $_latlong;
        $data_tempat_wisata['jenis_id'] = $_jenis_id;
        $data_tempat_wisata['skor_rating'] = $_skor_rating;
        $data_tempat_wisata['harga_tiket'] = $_harga_tiket;
        $data_tempat_wisata['kecamatan_id'] = $_kecamatan_id;
        $data_tempat_wisata['website'] = $_website;
        $data_tempat_wisata['fasilitas'] = $_fasilitas;



        if ((!empty($_idedit))) {
            $data_tempat_wisata['id'] = $_idedit;
            $this->tempat_wisata->update($data_tempat_wisata);
        } else {
            $this->tempat_wisata->simpan($data_tempat_wisata);
        }
        redirect('tempat_wisata', 'refresh');
    }

    public function edit($id)
    {
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $obj_tempat_wisata = $this->tempat_wisata->getById($id);
        $data['obj_tempat_wisata'] = $obj_tempat_wisata;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/edit', $data);
        $this->load->view('layout/footer');
    }

    public function delete($id)
    {
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $this->load->model('komentar_model', 'komentar');

        $data_tempat_wisata['id'] = $id;
        $this->komentar->deleteKomentar($data_tempat_wisata);
        $this->tempat_wisata->delete($data_tempat_wisata);
        redirect('tempat_wisata', 'refresh');
    }

    public function detail($id)
    {
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $tempat_wisata = $this->tempat_wisata->getById($id);
        $data['tempat_wisata'] = $tempat_wisata;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/detail', $data);
        $this->load->view('layout/footer');
    }

    public function tampil()
    {
        if ($this->session->userdata('role') != "public") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('tempat_wisata_model');
        $tempat_wisata = $this->tempat_wisata_model->getAll();
        $data['tempat_wisata'] = $tempat_wisata;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/tampil', $data);
        $this->load->view('layout/footer');
    }

    public function upload()
    {
        $_idtempat_wisata = $this->input->post("idtempat_wisata");
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $tempat_wisata = $this->tempat_wisata->getById($_idtempat_wisata);
        $data['tempat_wisata'] = $tempat_wisata;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10000000';
        $config['max_width'] = '10000000';
        $config['max_height'] = '10000000';
        $config['overwrite'] = true;
        $config['file_name'] = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '1';

        $array = explode('.', $_FILES['foto']['name']);
        $extension = end($array);

        $name = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '1' . '.' . $extension;

        // menginisialisasi file upload
        $datafoto = array('foto1' => $name, 'id' => $tempat_wisata->id);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
            $this->tempat_wisata->upload1($datafoto);
        }
        // kirim dan render ke detail
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/detail', $data);
        $this->load->view('layout/footer');
    }

    public function upload2()
    {
        $_idtempat_wisata = $this->input->post("idtempat_wisata");
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $tempat_wisata = $this->tempat_wisata->getById($_idtempat_wisata);
        $data['tempat_wisata'] = $tempat_wisata;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10000000';
        $config['max_width'] = '10000000';
        $config['max_height'] = '10000000';
        $config['overwrite'] = true;
        $config['file_name'] = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '2';

        $array = explode('.', $_FILES['foto']['name']);
        $extension = end($array);

        $name = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '2' . '.' . $extension;

        // menginisialisasi file upload
        $datafoto = array('foto2' => $name, 'id' => $tempat_wisata->id);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
            $this->tempat_wisata->upload2($datafoto);
        }

        // kirim dan render ke detail
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/detail', $data);
        $this->load->view('layout/footer');
    }
    public function upload3()
    {
        $_idtempat_wisata = $this->input->post("idtempat_wisata");
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        $tempat_wisata = $this->tempat_wisata->getById($_idtempat_wisata);
        $data['tempat_wisata'] = $tempat_wisata;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '10000000';
        $config['max_width'] = '10000000';
        $config['max_height'] = '10000000';
        $config['overwrite'] = true;
        $config['file_name'] = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '3';

        $array = explode('.', $_FILES['foto']['name']);
        $extension = end($array);

        $name = strtolower(str_replace(' ', '', $tempat_wisata->nama)) . '3' . '.' . $extension;

        // menginisialisasi file upload
        $datafoto = array('foto3' => $name, 'id' => $tempat_wisata->id);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
            $this->tempat_wisata->upload3($datafoto);
        }

        // kirim dan render ke detail
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('tempat_wisata/detail', $data);
        $this->load->view('layout/footer');
    }
}
