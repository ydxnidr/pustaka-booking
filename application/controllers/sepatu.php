<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-sepatu'); }
        public function cetak() {
            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[1]',[
                'required' => 'Nama Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]);
            $this->form_validation->set_rules('no', 'Np. HP', 'required|numeric|min_length[12]',[
                'required' => 'No. HP Harus diisi oleh Angka',
                'min_lenght' => 'No. HP terlalu pendek'
            ]);
            $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric|min_length[1]',[
                'required' => 'Jumlah Harus diisi oleh Angka',
                'min_lenght' => 'Jumlah terlalu pendek'
            ]);
            if ($this->form_validation->run() != true) {
                $this->load->view('view-form-sepatu');
            } else {
                $this->load->model('Modelsepatu');
                $price = $this->Modelsepatu->price();
                $data = [
                    'nama'=> $this->input->post('nama'),
                    'no'=> $this->input->post('no'),
                    'merk'=> $this->input->post('merk'),
                    'ukuran'=> $this->input->post('ukuran'),
                    'jumlah' => $this->input->post('jumlah'),
                    'harga'=> $price,
                ];
                function Rupiah($angka)
                {
                    $data = "Rp " . number_format($angka, 2, ',', '.');
                    return $data;
                }

                $this->load->view('view-data-sepatu', $data);
        }
    }
}