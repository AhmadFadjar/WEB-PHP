<?php
    class Kecamatan extends CI_Controller{
        public function index(){
            if ($this->session->userdata('role') != "administrator") {
                redirect(base_url('index.php/auth'));
            }
            $this->load->model('kecamatan_model');
            $kecamatan = $this->kecamatan_model->getAll();
            $data['kecamatan'] = $kecamatan;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/index', $data);            
            $this->load->view('layout/footer');
        }

        public function form(){
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/form');            
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('kecamatan_model', 'kecamatan');

            $_nama = $this->input->post('nama');
            
            $data_kecamatan ['nama'] = $_nama;

            if((!empty($_idedit))){
                $data_kecamatan ['id'] = $_idedit;
                $this->kecamatan->update($data_kecamatan);
            }else{
                $this->kecamatan->simpan($data_kecamatan);
            }
            redirect('kecamatan', 'refresh');
        }

        public function edit($id){
            $this->load->model('kecamatan_model', 'kecamatan');
            $obj_kecamatan = $this->kecamatan->getById($id);
            $data ['obj_kecamatan'] = $obj_kecamatan;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/edit' , $data);            
            $this->load->view('layout/footer');
        }

        public function delete($id){
            $this->load->model('kecamatan_model', 'kecamatan');

            $data_kecamatan ['id'] = $id;
            $this->kecamatan->delete($data_kecamatan);
            redirect('kecamatan', 'refresh');
        }

        public function tampil()
        {
            if ($this->session->userdata('role') != "public") {
                redirect(base_url('index.php/auth'));
            }
            $this->load->model('kecamatan_model');
            $kecamatan = $this->kecamatan_model->getAll();
            $data['kecamatan'] = $kecamatan;
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/tampil', $data);
            $this->load->view('layout/footer');
        }
    }
?>