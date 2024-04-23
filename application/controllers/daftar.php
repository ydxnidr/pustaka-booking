<?php
class Daftar extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-daftar'); }
        public function cetak() {
            $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|min_length[3]', [
                'required' => 'NIM Harus diisi',
                'min_lenght' => 'NIM terlalu pendek'
            ]);
            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[1]',[
                'required' => 'Nama Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]);
            $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|min_length[1]',[
                'required' => 'Tempat Lahir Harus diisi',
                'min_lenght' => 'Tempat Lahir terlalu pendek'
            ]);
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[1]',[
                'required' => 'Alamat Harus diisi',
                'min_lenght' => 'Alamat terlalu pendek'
            ]);
            if ($this->form_validation->run() != true) {
                $this->load->view('view-form-daftar');
            } else {
                $data = [
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'tanggal' => $this->input->post('tanggal'),
                    'tempat' => $this->input->post('tempat'),
                    'alamat' => $this->input->post('alamat')
                ];
                $this->load->view('view-data-daftar', $data);
            }
        }
}