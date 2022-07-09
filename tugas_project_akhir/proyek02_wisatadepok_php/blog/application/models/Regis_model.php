<?php
    class Regis_model extends CI_Model{
        public function getAll(){
            $query = $this->db->get('login');
            return $query->result();
        }

        public function getById($id){
            $query = $this->db->get_where('login',['id' => $id]);
            return $query;
        }

        
        public function findById($id){
            $query = $this->db->get_where('+',['id' => $id]);
            return $query->row();
        }

        public function simpan($data){
            $sql = "INSERT INTO users (nama) VALUES (?) ";

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