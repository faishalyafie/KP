<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model', 'menu');
    }


    public function index()
    {
        $data['title'] = 'Menu Customize';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->menu->getAllmenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        $data['title'] = 'Menu Customize';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->menu->getMenuById($id);

        $this->menu->M_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/M_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->M_edit($id);
        }
    }


    //===================================================SubMenu==================================



    public function submenu()
    {
        $data['title'] = 'Submenu Customize';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->menu->getAllsubmenu();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    }


    public function SM_nonaktiv()
    {
        $data['title'] = 'Submenu Customize';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->menu->getAllsubmenu();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/SM_nonaktiv', $data);
        $this->load->view('templates/footer');
    }


    public function SM_edit($id)
    {
        $data['title'] = 'Submenu Customize';
        $data['status'] = ['Active', 'Non-Active'];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->menu->getSMenuById($id);

        $this->menu->SM_aturan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/SM_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->SM_edit($id);
        }
    }

    //===================================================Role==================================

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->menu->getAllrole();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleaccess($id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->menu->getRoleById($id);

        $data['menu'] = $this->menu->getRolemenu();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/roleaccess', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $this->menu->change();
    }
}
