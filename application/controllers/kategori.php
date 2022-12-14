<?php
class Kategori extends CI_Controller {
    public function living_room() {
        $data['living_room'] = $this->model_kategori->data_living_room()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('living_room',$data);
        $this->load->view('templates/footer');        
    }

    public function dining_room() {
        $data['dining_room'] = $this->model_kategori->data_dining_room()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dining_room',$data);
        $this->load->view('templates/footer');        
    }

    public function bedroom() {
        $data['bedroom'] = $this->model_kategori->data_bedroom()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bedroom',$data);
        $this->load->view('templates/footer');        
    }
    
    public function wallart() {
        $data['wallart'] = $this->model_kategori->data_wallart()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('wallart',$data);
        $this->load->view('templates/footer');        
    }
    
    public function peralatan_olahraga() {
        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('templates/footer');        
    }
    
}




?>
