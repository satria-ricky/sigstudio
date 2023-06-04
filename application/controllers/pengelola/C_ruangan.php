<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ruangan extends CI_Controller
{

    public function index()
    {
        $id = $this->session->userdata('id_studio');
        $data['ruangan'] = $this->Mread->getAllRuanganStudioById($id);

        $data['title'] = 'Data Ruangan- Pengelola';
        $data['menu'] = '3';
        $this->load->view('pengelola/layout/header', $data);
        $this->load->view('pengelola/layout/sidebar', $data);
        $this->load->view('pengelola/V_data_ruangan', $data);
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
                'nama_ruangan'                  =>    $namaR,
                'ruangan_idstudio'                  =>    $this->session->userdata('id_studio')
            );

            $tambah2 = $this->Mtambah->tambah('tb_ruangan', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil_tambah', 'true');
                redirect('pengelola/C_ruangan');
            }
        }
    }

    public function Update_ruangan()
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
            $id    = $this->input->post('idR');

            $data = array(
                'nama_ruangan'                  =>    $namaR
            );

            $this->Medit->update('id_ruangan = ' . $id, $data, 'tb_ruangan');

            $this->session->set_flashdata('berhasil_ubah', 'true');
            redirect('pengelola/C_ruangan');
        }
    }


    public function Hapus($id)
    {
        $this->session->set_flashdata('hapusP', 'true');
        $where = array('id_ruangan' => $id);
        $this->Mhapus->hapus_data($where, 'tb_ruangan');
        redirect('pengelola/C_ruangan');
    }

}
