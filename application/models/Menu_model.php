<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_submenu`.*, `user_menu`.`menu`
                  FROM `user_submenu` JOIN `user_menu` 
                  ON `user_submenu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }


    public function getAllmenu()
    {
        return $this->db->get('user_menu')->result_array();
    }


    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }


    public function M_edit($id)
    {
        $data = [
            'menu' => htmlspecialchars($this->input->post('menu', true))

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu Has Been Edited!
      </div>');

        redirect('menu');
    }


    public function M_aturan()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required');
    }




    //=====================================SubMenu=============================================

    public function getAllsubmenu()
    {
        return $this->db->get('user_menu')->result_array();
    }


    public function getSMenuById($id)
    {
        return $this->db->get_where('user_submenu', ['id' => $id])->row_array();
    }


    public function SM_edit($id)
    {
        if (htmlspecialchars($this->input->post('active')) == "Active") {
            $i = 1;
        } else {
            $i = 0;
        }

        $data = [
            'title' => htmlspecialchars($this->input->post('title', true)),
            'icon' => htmlspecialchars($this->input->post('icon', true)),
            'is_active' => $i
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_submenu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Submenu Has Been Edited !
        </div>');
        redirect('menu/submenu');
    }


    public function SM_aturan()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('active', 'Status', 'required');
    }

    //=================================== ROlE ===============================================

    public function getAllrole()
    {
        return $this->db->get('user_role')->result_array();
    }


    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function getRolemenu()
    {
        $this->db->where('id !=', 3);
        return $this->db->get('user_menu')->result_array();
    }


    public function change()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_aksesmenu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_aksesmenu', $data);
        } else {
            $this->db->delete('user_aksesmenu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access changed! 
      </div>');
    }
}
