<?php
class users_model extends CI_Model{
    public $id, $username, $password, $email, $created_at, $last_login, $status, $role;

    public function getAll(){
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getByid($id){
        $query = $this->db->get_where('users', ['id' => $id ] );
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO users(username,password,email,created_at,last_login,status,role) VALUES (?,?,?,?,?,?,?)";
        
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getByid($insert_id);
    }
    public function update($data){
        $sql = "UPDATE users SET username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=?, WHERE Id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql,$data);
    }
       
    
}
?>