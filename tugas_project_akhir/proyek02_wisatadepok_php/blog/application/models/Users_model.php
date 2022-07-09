<?php
class Users_model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getById($id)
    {
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }

    public function lastLogin($data)
    {
        $query = "UPDATE users SET last_login=? WHERE username=?";
        $this->db->query($query, $data);
    }

    public function simpan($data){
        $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES (?, ?, ?, ?, ?, ?, ?) ";

        $this->db->query($sql, $data);
        $insert_id =  $this->db->insert_id();
        return $this->getById($insert_id);
    }
    
    public function update($data){
        $sql = "UPDATE users SET (username=?, password=?, email=?, created_at=?, last_login=?, status=?,  role=?) WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>