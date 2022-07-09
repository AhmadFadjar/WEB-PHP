<?php
    class Tampil extends CI_Controller{
        public function index(){
            $this->load->model('jenis_wisata_model');
            $jenis_wisata = $this->jenis_wisata_model->getAll();
            $data['jenis_wisata'] = $jenis_wisata;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/tampil', $data);            
            $this->load->view('layout/footer');
        }

        public function kecamatan(){
            $this->load->model('kecamatan_model');
            $kecamatan = $this->kecamatan_model->getAll();
            $data['kecamatan'] = $kecamatan;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/tampil', $data);            
            $this->load->view('layout/footer');
        }

        public function nilai_rating(){
            $this->load->model('nilai_rating_model');
            $nilai_rating = $this->nilai_rating_model->getAll();
            $data['nilai_rating'] = $nilai_rating;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('nilai_rating/tampil', $data);            
            $this->load->view('layout/footer');
        }
    }
?>