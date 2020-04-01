<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model extends CI_Model {

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data, $table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_mobil($id){
        $hasil = $this->db->where('id_mobil', $id)->get('mobil');

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
                       ->where('username', $username)
                       ->where('password', md5($password))
                       ->limit(1)
                       ->get('customer');

        if ($result->num_rows() > 0) {
            return $result->row();
        }else{
            return FALSE;
        }
    }

    public function getMobil($id = null)
    {
        if($id == null) {
            return $this->db->get('mobil')->result_array();
        } else {
            return $this->db->get_where('mobil',['id_mobil'=>$id])->result_array();
        }
    }

    public function deleteMobil($id){
        $this->db->delete('mobil',['id_mobil' => $id]);
        return $this->db->affected_rows();
    }

    public function createMobil($data){
        $this->db->insert('mobil', $data);
        return $this->db->affected_rows();
    }

    public function updateMobil($data, $id){
        $this->db->update('mobil', $data, ['id_mobil' => $id]);
        return $this->db->affected_rows();
    }

    public function getRental($id = null)
    {
        if($id == null) {
            return $this->db->get('rental')->result_array();
        } else {
            return $this->db->get_where('rental',['id_rental'=>$id])->result_array();
        }
    }

    public function deleteRental($id){
        $this->db->delete('rental',['id_mobil' => $id]);
        return $this->db->affected_rows();
    }

    public function createRental($data){
        $this->db->insert('rental', $data);
        return $this->db->affected_rows();
    }

    public function updateRental($data, $id){
        $this->db->update('rental', $data, ['id_rental' => $id]);
        return $this->db->affected_rows();
    }

    public function getTransaksi()
    {
        $this->db->select ('*' );
        $this->db->from('transaksi');
        $this->db->join('customer','customer.id_customer = transaksi.id_customer');
        $this->db->join('mobil','mobil.id_mobil = transaksi.id_mobil');
        $query = $this->db->get();

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result();
    }

    
    
}

/* End of file Rental_model.php */


?>
