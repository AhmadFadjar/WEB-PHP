<?php

class Mahasiswa_model extends CI_Model {
    // Make property or variable
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        // Example using ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }

    public function getALL() {
        // menampilkan seluruh data yang ada di table mahasiswa menggunakan query builder
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('mahasiswa',['id' => $id]);
        return $query->row();
    }

    public function simpan($data) {
        $sql = "INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, ipk) VALUES (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        
    }
}
?>