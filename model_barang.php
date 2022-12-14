<?php

use LDAP\Result;

class Model_barang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    
    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
        // Akan menjalankan data yang akan dipilih atau di edit berdasarkan id barang yang dimiliki
    }
    public function update_data($where, $data, $table)
    {
        // Ini ada parameter where,data didapaakn dari parameter yang kita buat di controllernya
        // Kalau untuk $table dari googl katanya mah Menentukan tabel database yang terutama digunakan oleh model ini.

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg) {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
