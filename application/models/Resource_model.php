<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resource_model extends CI_Model
{
    public function getAllodp()
    {
        return $this->db->get('odp')->result_array();
    }

    public function getOdpById($id)
    {
        return $this->db->get_where('odp', ['id' => $id])->row_array();
    }

    public function Addodp()
    {

        $data = [
            'nama' => htmlspecialchars($this->input->post('odp', true)),
            'qr' => htmlspecialchars($this->input->post('qr', true)),
            'total' => $this->input->post('total', true),
            'os1' => htmlspecialchars($this->input->post('os1', true)),
            'os2' => htmlspecialchars($this->input->post('os2', true)),
            'os3' => htmlspecialchars($this->input->post('os3', true)),
            'os4' => htmlspecialchars($this->input->post('os4', true)),
            'os5' => htmlspecialchars($this->input->post('os5', true)),
            'os6' => htmlspecialchars($this->input->post('os6', true)),
            'os7' => htmlspecialchars($this->input->post('os7', true)),
            'os8' => htmlspecialchars($this->input->post('os8', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->insert('odp', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New ODP Has Been Added!
          </div>');
    }

    public function Editodp($id)
    {

        $data = [
            'nama' => htmlspecialchars($this->input->post('odp', true)),
            'qr' => htmlspecialchars($this->input->post('qr', true)),
            'total' => $this->input->post('total', true),
            'os1' => htmlspecialchars($this->input->post('os1', true)),
            'os2' => htmlspecialchars($this->input->post('os2', true)),
            'os3' => htmlspecialchars($this->input->post('os3', true)),
            'os4' => htmlspecialchars($this->input->post('os4', true)),
            'os5' => htmlspecialchars($this->input->post('os5', true)),
            'os6' => htmlspecialchars($this->input->post('os6', true)),
            'os7' => htmlspecialchars($this->input->post('os7', true)),
            'os8' => htmlspecialchars($this->input->post('os8', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('odp', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ODP Has Been Edited!
          </div>');
    }

    public function Cariodp()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('nama', $cari);
        return $this->db->get('odp')->result_array();
    }


    public function delOdp($id)
    {
        $this->db->delete('odp', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            ODP Has Been Deleted!
          </div>');
    }


    public function Odp_aturan()
    {
        // form_validation
        $this->form_validation->set_rules('odp', 'ODP Name', 'required|trim');
        $this->form_validation->set_rules('qr', 'QR ODP', 'required|trim|is_unique[odp.qr]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('os1', 'Outspliter 1', 'is_unique[odp.os1]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os2', 'Outspliter 2', 'is_unique[odp.os2]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os3', 'Outspliter 3', 'is_unique[odp.os3]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os4', 'Outspliter 4', 'is_unique[odp.os4]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os5', 'Outspliter 5', 'is_unique[odp.os5]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os6', 'Outspliter 6', 'is_unique[odp.os6]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os7', 'Outspliter 7', 'is_unique[odp.os7]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
        $this->form_validation->set_rules('os8', 'Outspliter 8', 'is_unique[odp.os8]', [
            'is_unique' => 'This QR has already registerd!'
        ]);
    }

    public function Odp_edit()
    {
        // form_validation
        $this->form_validation->set_rules('odp', 'ODP Name', 'required|trim');
        $this->form_validation->set_rules('qr', 'QR ODP', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
    }


    public function jumlahodp()
    {
        $query = $this->db->get('odp');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
