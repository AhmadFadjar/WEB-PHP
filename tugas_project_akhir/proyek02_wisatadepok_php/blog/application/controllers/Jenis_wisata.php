<?php

    class Jenis_wisata extends CI_Controller{
        public function index(){
            if ($this->session->userdata('role') != "administrator") {
                redirect(base_url('index.php/auth'));
            }
            $this->load->model('jenis_wisata_model');
            $jenis_wisata = $this->jenis_wisata_model->getAll();
            $data['jenis_wisata'] = $jenis_wisata;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/index', $data);            
            $this->load->view('layout/footer');
        }

        public function form(){
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/form');            
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('jenis_wisata_model', 'jenis_wisata');

            $_nama = $this->input->post('nama');
            
            $data_jenis_wisata ['nama'] = $_nama;

            if((!empty($_idedit))){
                $data_jenis_wisata ['id'] = $_idedit;
                $this->jenis_wisata->update($data_jenis_wisata);
            }else{
                $this->jenis_wisata->simpan($data_jenis_wisata);
            }
            redirect('jenis_wisata', 'refresh');
        }

        public function edit($id){
            $this->load->model('jenis_wisata_model', 'jenis_wisata');
            $obj_jenis_wisata = $this->jenis_wisata->getById($id);
            $data ['obj_jenis_wisata'] = $obj_jenis_wisata;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/edit' , $data);            
            $this->load->view('layout/footer');
        }

        public function delete($id){
            $this->load->model('jenis_wisata_model', 'jenis_wisata');

            $data_jenis_wisata ['id'] = $id;
            $this->jenis_wisata->delete($data_jenis_wisata);
            redirect('jenis_wisata', 'refresh');
        }

        public function tampil()
        {
            if ($this->session->userdata('role') != "public") {
                redirect(base_url('index.php/auth'));
            }
            $this->load->model('jenis_wisata_model');
            $jenis_wisata = $this->jenis_wisata_model->getAll();
            $data['jenis_wisata'] = $jenis_wisata;
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/tampil', $data);
            $this->load->view('layout/footer');
        }
    }
?>