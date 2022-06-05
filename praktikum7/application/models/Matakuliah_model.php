<?php 
class Matakuliah_model extends CI_Model {
    public $id;
    public $nama;
    public $sks;
    public $kode;

    public function getAll(){
        // menampilkan seluruh data yang ada ditable matakuliah
        $query = $this->db->get('matakuliah');
        return $query -> result();
    }
}
?>