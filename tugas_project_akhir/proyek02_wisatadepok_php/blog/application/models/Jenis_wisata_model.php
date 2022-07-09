<?php
    class Jenis_wisata_model extends CI_Model{
        public $id; 
        public $nama;

        public function getAll(){
            $query = $this->db->get('jenis_wisata');
            return $query->result();
        }

        public function getById($id){
            $query = $this->db->get_where('jenis_wisata',['id' => $id]);
            return $query->row();
        }

        public function simpan($data){
            $sql = "INSERT INTO jenis_wisata (nama) VALUES (?) ";

            $this->db->query($sql, $data);
            $insert_id =  $this->db->insert_id();
            return $this->getById($insert_id);
        }

        public function update($data){
            $sql = "UPDATE jenis_wisata SET (nama=?) WHERE id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM jenis_wisata WHERE id=?";
            $this->db->query($sql, $data);
        }
    }
?>