<?php
class Nilai_rating extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('role') != "administrator") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('nilai_rating_model');
        $nilai_rating = $this->nilai_rating_model->getAll();
        $data['nilai_rating'] = $nilai_rating;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/index', $data);
        $this->load->view('layout/footer');
    }

    public function tampil()
    {
        if ($this->session->userdata('role') != "public") {
            redirect(base_url('index.php/auth'));
        }
        $this->load->model('nilai_rating_model');
        $nilai_rating = $this->nilai_rating_model->getAll();
        $data['nilai_rating'] = $nilai_rating;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/tampil', $data);
        $this->load->view('layout/footer');
    }

    public function form()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/form');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('nilai_rating_model', 'nilai_rating');

        $_nama = $this->input->post('nama');

        $data_nilai_rating['nama'] = $_nama;

        if ((!empty($_idedit))) {
            $data_nilai_rating['id'] = $_idedit;
            $this->nilai_rating->update($data_nilai_rating);
        } else {
            $this->nilai_rating->simpan($data_nilai_rating);
        }
        redirect('nilai_rating', 'refresh');
    }

    public function edit($id)
    {
        $this->load->model('nilai_rating_model', 'nilai_rating');
        $obj_nilai_rating = $this->nilai_rating->getById($id);
        $data['obj_nilai_rating'] = $obj_nilai_rating;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/edit', $data);
        $this->load->view('layout/footer');
    }

    public function delete($id)
    {
        $this->load->model('nilai_rating_model', 'nilai_rating');

        $data_nilai_rating['id'] = $id;
        $this->nilai_rating->delete($data_nilai_rating);
        redirect('nilai_rating', 'refresh');
    }
}
