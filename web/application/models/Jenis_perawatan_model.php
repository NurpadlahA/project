<?php 
class jenis_perawatan_model extends CI_Model{
    public $id, $nama;

    public function getAll(){
        $query = $this->db->get('jenis_perawatan');
        return $query->result();
    }
    public function getByid($id){
        $query = $this->db->get_where('jenis_perawatan', ['id' => $id ] );
        return $query->row();
    }
    public function simpan($data){
        $sql ="INSERT INTO jenis_perawatan (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id=$this->db->insert_id();
        return $this->getByid($insert_id);
    }
    public function update(){
        $sql ="UPDATE jenis_perawatan SET nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data){
        $sql = "DELETE FROM jenis_perawatan WHERE id=?";
        $this->db->query($sql,$data);
    }

}
?>