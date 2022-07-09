<?php
    class Kecamatan_model extends CI_Model{
        public $id; 
        public $nama;

        public function getAll(){
            $query = $this->db->get('kecamatan');
            return $query->result();
        }

        public function getById($id){
            $query = $this->db->get_where('kecamatan',['id' => $id]);
            return $query->row();
        }

        public function simpan($data){
            $sql = "INSERT INTO kecamatan (nama) VALUES (?) ";

            $this->db->query($sql, $data);
            $insert_id =  $this->db->insert_id();
            return $this->getById($insert_id);
        }

        public function update($data){
            $sql = "UPDATE kecamatan SET (nama=?) WHERE id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM kecamatan WHERE id=?";
            $this->db->query($sql, $data);
        }
    }
?>