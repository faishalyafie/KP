<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model', 'admin');
        $this->load->model('User_model', 'user');
        $this->load->model('Resource_model', 'odp');
        $this->load->model('Service_model', 'oan');
    }


    public function index()
    {
        $data['user'] =   $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $data['jmlodp'] = $this->odp->jumlahodp();
        $data['jmloan'] = $this->oan->jumlahservice();
        $data['jmluser'] = $this->user->jumlahUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function user()
    {
        $data['title'] = 'Users';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // //pagination
        // $this->load->library('pagination');
        // //config pg
        // $config['base_url'] = 'http://localhost/kp/admin/user/user/';
        // $config['total_rows'] = $this->admin->hitunguser();
        // $config['per_page'] = 10;
        // //inisialisasi
        // $this->pagination->initialize($config);
        // //ambil user by limit dan start
        // $data['users'] = $this->admin->getUser(2, 0);
        $data['users'] = $this->admin->getAllUser();
        if ($this->input->post('cari')) {
            $data['users'] = $this->admin->cari();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer');
    }


    public function nonaktiv()
    {
        $data['title'] = 'Users';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->admin->getAllUser();
        $query = $this->input->post('cari');

        if ($query) {
            $data['users'] = $this->admin->cari();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nonaktiv', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Users';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->admin->getAllUser();
        $data['description'] = ['Pegawai Tetap', 'Pegawai Magang'];
        $data['position'] = ['Admin', 'User'];
        $this->admin->Add_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->admin->Adduser();
        }
    }


    public function detail($id)
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->admin->getUserById($id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        $data['title'] = 'Users';
        $data['description'] = ['Pegawai Tetap', 'Pegawai Magang'];
        $data['position'] = ['Admin', 'User'];
        $data['status'] = ['Active', 'Non-Active'];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->admin->getUserById($id);

        $this->admin->Edt_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->admin->Edituser($id);
        }
    }


    public function delete($id)
    {
        $this->admin->delUser($id);
    }

    //============================================================ Resource ODP ============================================================

    public function A_odptampil()
    {
        $data['title'] = 'Admin Resource Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getAllodp();

        if ($this->input->post('cari')) {
            $data['users'] = $this->odp->Cariodp();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/A_odptampil', $data);
        $this->load->view('templates/footer');
    }


    public function A_odptambah()
    {
        $data['title'] = 'Admin Resource Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->odp->Odp_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/A_odptambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->odp->Addodp();
            redirect('admin/A_odptampil');
        }
    }


    public function A_odpedit($id)
    {
        $data['title'] = 'Admin Resource Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getOdpById($id);

        $this->odp->Odp_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/A_odpedit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->odp->Editodp($id);
            redirect('admin/A_odptampil');
        }
    }

    public function A_odpdetail($id)
    {
        $data['title'] = 'Admin Resource Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getOdpById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/A_odpdetail', $data);
        $this->load->view('templates/footer');
    }

    public function A_odpdelete($id)
    {
        $this->odp->delOdp($id);
        redirect('admin/A_odptampil');
    }


    //============================================================ Service OAN ============================================================



    public function A_oantampil()
    {
        $data['title'] = 'Admin Omzet Acces Network';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->oan->getAllService();

        if ($this->input->post('cari')) {
            $data['users'] = $this->oan->Carioan();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/A_oantampil', $data);
        $this->load->view('templates/footer');
    }

    public function A_oantambah()
    {
        $data['title'] = 'Admin Omzet Acces Network';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = ['Huawei', 'Alcatel', 'ZTE'];

        $this->oan->ADD_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/A_oantambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->oan->Addoan();
            redirect('admin/A_oantampil');
        }
    }

    public function A_oandetail($id)
    {
        $data['title'] = 'Admin Omzet Acces Network';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->oan->getOanById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/A_oandetail', $data);
        $this->load->view('templates/footer');
    }


    public function A_oanedit($id)
    {
        $data['title'] = 'Admin Omzet Acces Network';
        $data['vendor'] = ['Huawei', 'Alcatel', 'ZTE'];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->oan->getOanById($id);

        $this->oan->ADD_aturan();

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/A_oanedit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->oan->Editoan($id);
            redirect('admin/A_oantampil');
        }
    }


    public function A_oandelete($id)
    {
        $this->oan->delOan($id);
        redirect('admin/A_oantampil');
    }
}
