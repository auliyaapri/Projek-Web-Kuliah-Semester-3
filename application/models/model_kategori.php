<?php
class Model_kategori extends CI_Model {
    public function data_living_room() {
        return $this->db->get_where('tb_barang',array("kategori" => "Living Room"));
    }
    
    public function data_dining_room() {
        return $this->db->get_where('tb_barang',array("kategori" => "Dining Room"));
    }
   
    public function data_bedroom() {
        return $this->db->get_where('tb_barang',array("kategori" => "bedroom"));
    }

    public function data_wallart() {
        return $this->db->get_where('tb_barang',array("kategori" => "wall art"));
    }
}
?>
