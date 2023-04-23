<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_peralatan extends CI_Controller
{
    public function index()
    {
        $id_s = $this->session->userdata('id_studio');
        $data['alat'] = $this->db->query("SELECT * FROM tb_alat at WHERE at.id_studio=$id_s")->result();
        $data['title'] = 'Data Peralatan - Pengelola';
        $data['menu'] = '1';
        $this->load->view('pengelola/layout/header', $data);
        $this->load->view('pengelola/layout/sidebar', $data);
        $this->load->view('pengelola/V_data_peralatan', $data);
        $this->load->view('pengelola/layout/footer');
    }

    public function Tambah_alat()
    {
        $this->form_validation->set_rules('nama_at', 'nama2', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama Alat',
        ]);


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $config['upload_path'] = '././assets/foto_alat';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('gambar', 'true');
                redirect('pengelola/C_data_peralatan');
            } else {
                $gambar2 = $this->upload->data('file_name');
            }

            $nama    = $this->input->post('nama_at');
            $jenis        = $this->input->post('jenis_at');
            $kondisi        = $this->input->post('kondisi_at');
            $id = $this->session->userdata('id_studio');



            $data = array(
                'nama_alat'         =>    $nama,
                'foto_alat'         =>    $gambar2,
                'jenis_alat'        =>    $jenis,
                'kondisi_alat'        =>    $kondisi,
                'id_studio'         =>    $id,

            );

            $tambah2 = $this->Mtambah->tambah('tb_alat', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil_tambah_alat', 'true');
                redirect('pengelola/C_data_peralatan');
            }
        }
    }
}
