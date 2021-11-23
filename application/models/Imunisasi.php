<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Model {
    public function getDataImunisasi(){
        $this->db->select('*');
        $this->db->from('data_imunisasi');
        $query = $this->db->get();
        return $query->result();
    }


    function insertDataImunisasi($data){
        $this->db->insert('data_imunisasi', $data);
    }

    function getDataImunisasiDetail($id_anak){
        $this->db->where('id_anak', $id_anak);
        $query = $this->db->get('data_imunisasi');
        return $query->row();
    }

    function updateDataImunisasi($id_anak, $data){
        $this->db->where('id_anak', $id_anak);
        $this->db->update('data_imunisasi', $data);
    }

    function deleteDataImunisasi($id_anak){
        $this->db->where('id_anak', $id_anak);
        $this->db->delete('data_imunisasi');
    }
}
?>