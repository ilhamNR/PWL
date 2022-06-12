<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class market_model extends CI_Model {
    public function getData($tabel) {
        $ingfo = $this->db->get($tabel);
        return $ingfo->result_array();
    }
    public function masukan($tabel, $data){
        $ingfo = $this->db->insert($tabel, $data);

    }
    public function perbarui($tabel, $data, $where){
        $ingfo = $this->db->update($tabel, $data, $where);
        return $ingfo;
    }

    public function hapus($tabel, $where) {
        $ingfo = $this->db->delete($tabel, $where);
        return $ingfo;
    }
}
