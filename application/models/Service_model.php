<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
{
    public function getAllService()
    {
        return $this->db->get('oan')->result_array();
    }

    public function getOanById($id)
    {
        return $this->db->get_where('oan', ['id' => $id])->row_array();
    }

    public function Addoan()
    {

        $data = [
            'no' => htmlspecialchars($this->input->post('no', true)),
            'sn' => htmlspecialchars($this->input->post('sn', true)),
            'vendor' => htmlspecialchars($this->input->post('vendor', true)),
            'total' => htmlspecialchars($this->input->post('total', true)),
            'qr' => htmlspecialchars($this->input->post('qr', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->insert('oan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Service Has Been Added!
          </div>');
    }


    public function Editoan()
    {

        $data = [
            'no' => htmlspecialchars($this->input->post('no', true)),
            'sn' => htmlspecialchars($this->input->post('sn', true)),
            'vendor' => htmlspecialchars($this->input->post('vendor', true)),
            'total' => htmlspecialchars($this->input->post('total', true)),
            'qr' => htmlspecialchars($this->input->post('qr', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('oan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Service Has Been Edited!
          </div>');
    }


    public function Carioan()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('no', $cari);
        return $this->db->get('oan')->result_array();
    }


    public function delOan($id)
    {
        $this->db->delete('oan', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Service Has Been Deleted!
          </div>');
    }


    public function ADD_aturan()
    {
        // form_validation
        $this->form_validation->set_rules('no', 'Name', 'required|trim');
        $this->form_validation->set_rules('sn', 'Serial Number', 'required|trim');
        $this->form_validation->set_rules('vendor', 'Vendor', 'required|trim');
    }


    public function jumlahservice()
    {
        $query = $this->db->get('oan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
