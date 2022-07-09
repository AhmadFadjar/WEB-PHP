<?php
class Tempat_wisata_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('tempat_wisata');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('tempat_wisata', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO tempat_wisata (nama, alamat, latlong, jenis_id, skor_rating, harga_tiket,  kecamatan_id, website, fasilitas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        $this->db->query($sql, $data);
        $insert_id =  $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data)
    {
        $sql = "UPDATE tempat_wisata SET (nama=?, alamat=?, latlong=?, jenis_id=?, skor_rating=?, harga_tiket=?, kecamatan_id=?,  website=?, fasilitas=?) WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM tempat_wisata WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function upload1($data)
    {
        $sql = "UPDATE tempat_wisata SET foto1=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function upload2($data)
    {
        $sql = "UPDATE tempat_wisata SET foto2=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function upload3($data)
    {
        $sql = "UPDATE tempat_wisata SET foto3=? WHERE id=?";
        $this->db->query($sql, $data);
    }
}
