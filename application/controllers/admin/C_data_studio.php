<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_studio extends CI_Controller
{

    public function index()
    {
        $data['studio'] = $this->Mread->getAllStudio();
        $data['title'] = 'Data Studio - Admin';
        $data['menu'] = '1';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/V_data_studio',$data);
        $this->load->view('admin/layout/footer');
    }

    public function Tambah_studio()
    {
        $this->form_validation->set_rules('nama_st', 'nama2', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama',
        ]);
        $this->form_validation->set_rules('alamat_st', 'alamat2', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama',
        ]);
        $this->form_validation->set_rules('latitude_st', 'latitude', 'required|trim', [
            'required' => 'Anda Belum Mengisi latitude studio',
        ]);
        $this->form_validation->set_rules('longitude_st', 'longitude', 'required|trim', [
            'required' => 'Anda Belum Mengisi longitude studio',
        ]);

        $this->form_validation->set_rules('harga', 'ruangan2', 'required|trim', [
            'required' => 'Anda Belum Mengisi harga sewa studio',
        ]);
        $this->form_validation->set_rules('thn_st', 'thn2', 'required|trim', [
            'required' => 'Anda Belum Mengisi tahun',
        ]);


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $config['upload_path'] = '././assets/foto_studio';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('gambar', 'true');
                redirect('Admin/C_data_studio');
            } else {
                $gambar2 = $this->upload->data('file_name');
            }

            $nama    = $this->input->post('nama_st');
            $alamat        = $this->input->post('alamat_st');
            $latitude        = $this->input->post('latitude_st');
            $longitude        = $this->input->post('longitude_st');
            $harga        = $this->input->post('harga');
            $tahun        = $this->input->post('thn_st');


            $data = array(
                'nama_studio'             =>    $nama,
                'alamat_studio'           =>    $alamat,
                'tahun_didirikan'         =>    $tahun,
                'foto_studio'             =>    $gambar2,
                'latitude'                =>    $latitude,
                'longitude'                =>    $longitude,
                'harga_sewa'          =>    $harga,
            );

            $tambah2 = $this->Mtambah->tambah('tb_studio', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil_tambah', 'true');
                redirect('admin/C_data_studio');
            }
        }
    }

    public function Hapus($id)
    {
        $this->session->set_flashdata('hapusP', 'true');
        $where = array('id_studio' => $id);
        $this->Mhapus->hapus_data($where, 'tb_studio');
        redirect('admin/C_data_studio');
    }
}
