<?php
class Komentar_model extends CI_Model
{
    // Buat Properti atau Variable
    public $id, $tanggal, $isi, $user_id, $wisata_id, $nilai_rating_id;

    public function getAll()
    {
        // Menampilkan data menggunakan query builder
        $query = $this->db->get('komentar');
        return $query->result();
    }
    public function getById($id)
    {
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('komentar', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO komentar (tanggal, isi, users_id, wisata_id, nilai_rating_id) VALUES(?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data)
    {
        $sql = "UPDATE komentar SET (tanggal=?, isi=?, users_id=?, wisata_id=?, nilai_rating_id=?) WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function deleteKomentar($data)
    {
        $sql = "DELETE FROM komentar WHERE wisata_id=?";
        $this->db->query($sql, $data);
    }
}
