<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resource extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Resource_model', 'odp');
    }


    public function index()
    {
        $data['title'] = 'Resource Capture';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->odp->Odp_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('resource/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->odp->Addodp();
            redirect('resource/odp');
        }
    }

    public function odp()
    {
        $data['title'] = 'DP/ODP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getAllodp();

        if ($this->input->post('cari')) {
            $data['users'] = $this->odp->Cariodp();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('resource/odp', $data);
        $this->load->view('templates/footer');
    }

    public function odpdetail($id)
    {
        $data['title'] = 'DP/ODP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getOdpById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('resource/detail', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        $data['title'] = 'DP/ODP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->odp->getOdpById($id);

        $this->odp->Odp_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('resource/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->odp->Editodp($id);
            redirect('resource/odp');
        }
    }
}
