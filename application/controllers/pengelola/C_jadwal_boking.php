<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_jadwal_boking extends CI_Controller
{

    public function index()
    {
        $id = $this->session->userdata('id_studio');
        $data['title'] = 'Jadwal Boking - Pengelola';
        $data['menu'] = '2';
        $data['jadwal'] = $this->db->query("SELECT tb_jadwal_boking.*, tb_ruangan.* FROM tb_jadwal_boking LEFT JOIN tb_ruangan on tb_jadwal_boking.boking_idruangan = tb_ruangan.id_ruangan WHERE tb_jadwal_boking.boking_idstudio=$id")->result();
        $data['ruangan'] = $this->Mread->getAllRuanganStudioById($id);
        $this->load->view('pengelola/layout/header', $data);
        $this->load->view('pengelola/layout/sidebar', $data);
        $this->load->view('pengelola/V_jadwal_boking',$data);
        $this->load->view('pengelola/layout/footer');
    }

    public function Tambah_jadwal()
    {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama Pelanggan'
        ]);
        $this->form_validation->set_rules('ruangan', 'ruangan', 'required|trim', [
            'required' => 'Anda Belum Mengisi Ruangan'
        ]);
        $this->form_validation->set_rules('tgl', 'tgl', 'required|trim', [
            'required' => 'Anda Belum Mengisi Tanggal Boking'
        ]);
        $this->form_validation->set_rules('mulai', 'mulai', 'required|trim', [
            'required' => 'Anda Belum Mengisi Waktu Mulai'
        ]);
        $this->form_validation->set_rules('akhir', 'akhir', 'required|trim', [
            'required' => 'Anda Belum Mengisi Waktu akhir'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $nama   = $this->input->post('nama');
            $tanggal_boking   = $this->input->post('tgl');
            $jam_mulai   = $this->input->post('mulai');
            $jam_berakhir   = $this->input->post('akhir');
            $boking_idruangan   = $this->input->post('ruangan');
            $id = $this->session->userdata('id_studio');

            $data = array(
                'nama_boking'                  =>    $nama,
                'tanggal_boking'                  =>    $tanggal_boking,
                'jam_mulai'                  =>    $jam_mulai,
                'jam_berakhir'                  =>    $jam_berakhir,
                'boking_idruangan'                  =>    $boking_idruangan,
                'boking_idstudio'                  =>    $id,
            );

            $tambah2 = $this->Mtambah->tambah('tb_jadwal_boking', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil_tambah', 'true');
                redirect('pengelola/C_jadwal_boking');
            }
        }
    }
}
