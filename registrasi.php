<?php
class Registrasi extends CI_Controller {
    public function index() {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi!']);

        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
                                                'required' => 'Password Wajib diisi!',
                                                'matches'  => 'Password tidak cocok!'
                                            ]);

        $this->form_validation->set_rules('password_2', 'Password','required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header');
        $this->load->view('register');
        $this->load->view('templates/footer');
    } else {
        # Jika berhasil, maka akan dimasukkan kedalam array
        
        $data = array(
            'id' => '', # '' dikosongin karena auto increment
            'nama'     => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password_1'),
            'role_id'  => 2, // karena ini untuk user doang jadinya role_id 2. Kalau 1 itu untuk admin

        );
        $this->db->insert('tb_user',$data);
        redirect('auth/login');

       
    }
}
    
}
