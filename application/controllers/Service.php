<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Service_model', 'service');
    }


    public function index()
    {
        $data['title'] = 'Service Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = ['Huawei', 'Alcatel', 'ZTE'];

        $this->service->ADD_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->service->Addoan();
            redirect('service/oan');
        }
    }

    public function oan()
    {
        $data['title'] = 'Omzet Acces Network';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->service->getAllService();

        if ($this->input->post('cari')) {
            $data['users'] = $this->service->Carioan();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/oan', $data);
        $this->load->view('templates/footer');
    }

    public function oandetail($id)
    {
        $data['title'] = 'Omzet Acces Network';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->service->getOanById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/detail', $data);
        $this->load->view('templates/footer');
    }


    public function oanEdit($id)
    {
        $data['title'] = 'Omzet Acces Network';
        $data['vendor'] = ['Huawei', 'Alcatel', 'ZTE'];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->service->getOanById($id);

        $this->service->ADD_aturan();

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->service->Editoan($id);
            redirect('service/oan');
        }
    }
}
