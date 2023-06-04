<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

    public function index()
    {
        $id = $this->session->userdata('id_studio');
        $data['id_user'] = $this->session->userdata('id_user');

        $data['studio'] = $this->db->query("SELECT * FROM tb_studio WHERE id_studio=$id")->result();
        $data['total_ruangan'] = count($this->db->query("SELECT * FROM tb_ruangan WHERE ruangan_idstudio=$id")->result());
        // var_dump($id_user);
        // die;
        $data['title'] = 'Dashboard - PENGELOLA';
        $data['menu'] = '0';
        $data['menu_atas'] = '0';
        $this->load->view('pengelola/layout/header', $data);
        $this->load->view('pengelola/layout/sidebar', $data);
        $this->load->view('pengelola/V_dashboard');
        $this->load->view('pengelola/layout/footer');
    }

    public function Update_user()
    {
        $id = $this->input->post('id_user');
        $data = $this->Mread->getAllUserById($id);
        // var_dump($data['username']);
        // die;
        $username3    = $this->input->post('username');
        if ($data['username'] != $username3) {
            $this->form_validation->set_rules('username', 'username2', 'required|trim|is_unique[tb_user.username]|min_length[5]|max_length[15]', [
                'required' => 'Anda Belum Mengisi username',
                'is_unique' => 'Username sudah ada'
            ]);
        }


        $this->form_validation->set_rules('nama', 'nama2', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama',
        ]);


        $this->form_validation->set_rules('password', 'password1', 'required|trim', [
            'required' => 'Anda Belum Mengisi password',
            'min_length' => 'Password Kurang dari 5 karakter',
            'matches' => 'Password yang anda masukan beda'
        ]);


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


            $nama3  = htmlspecialchars($this->input->post('nama', true));
            $pass        = $this->input->post('password');

            $data = array(
                'username'                  =>    $username3,
                'password'                  =>    $pass,
                'nama_user'                 =>    $nama3,
            );

            $id_studio    = $this->input->post('id_st');
            $foto_lama    = $this->input->post('foto_lama_st');
            $nama    = $this->input->post('nama_st');
            $alamat        = $this->input->post('alamat_st');
            $latitude        = $this->input->post('latitude_st');
            $longitude        = $this->input->post('longitude_st');
            $harga        = $this->input->post('harga');
            $tahun        = $this->input->post('thn_st');




            $config['upload_path'] = '././assets/foto_studio';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar2 = $this->upload->data('file_name');

                $data_studio = array(
                    'nama_studio'             =>    $nama,
                    'alamat_studio'           =>    $alamat,
                    'tahun_didirikan'         =>    $tahun,
                    'foto_studio'             =>    $gambar2,
                    'latitude'                =>    $latitude,
                    'longitude'                =>    $longitude,
                    'harga_sewa'          =>    $harga,
                );
            } else {
                $data_studio = array(
                    'nama_studio'             =>    $nama,
                    'alamat_studio'           =>    $alamat,
                    'tahun_didirikan'         =>    $tahun,
                    'latitude'                =>    $latitude,
                    'longitude'                =>    $longitude,
                    'harga_sewa'          =>    $harga,
                );
            }


            $this->Medit->update('id_user = ' . $id, $data, 'tb_user');
            $this->Medit->update('id_studio = ' . $id_studio, $data_studio, 'tb_studio');

            $this->session->set_flashdata('berhasil_ubah', 'true');
            redirect('pengelola/C_dashboard');
        }
    }
}
