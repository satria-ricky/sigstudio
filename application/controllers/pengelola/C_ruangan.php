<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ruangan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Ruangan- Pengelola';
        $data['menu'] = '3';
        $this->load->view('pengelola/layout/header', $data);
        $this->load->view('pengelola/layout/sidebar', $data);
        $this->load->view('pengelola/V_data_ruangan');
        $this->load->view('pengelola/layout/footer');
    }

    public function Tambah_ruangan()
    {


        $this->form_validation->set_rules('namaR', 'namaR2', 'required|trim|is_unique[tb_ruangan.nama_ruangan]', [
            'required' => 'Anda Belum Mengisi Nama Ruangan',
            'is_unique' => 'ruangan sudah ada'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $namaR    = $this->input->post('namaR');

            $data = array(
                'nama_ruangan'                  =>    $namaR
            );

            $tambah2 = $this->Mtambah->tambah('tb_ruangan', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil_tambah_user', 'true');
                redirect('pengelola/C_jadwal_boking');
            }
        }
    }
}
