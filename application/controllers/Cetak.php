<?php

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function cetakUser()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        //foto
        $pdf->Image('assets/img/logo/telkom.png', 8, 2, 50, 20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM WITEL SEMARANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(190, 7, 'Jl. Singotoro No.20 Semarang 50256, Jawa Tengah', 0, 1, 'C');
        //pindah baris
        $pdf->Ln(20);
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // isi
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data User', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(30, 6, 'Nama', 1, 0);
        $pdf->Cell(60, 6, 'Email', 1, 0);
        $pdf->Cell(50, 6, 'Descreption', 1, 0);
        $pdf->Cell(30, 6, 'Status', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('user')->result();
        $i = 1;
        foreach ($user as $row) {
            if ($row->is_active == 1) {
                $query = "Aktiv";
            } else {
                $query = "Non-Aktiv";
            }

            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(30, 6, $row->name, 1, 0);
            $pdf->Cell(60, 6, $row->email, 1, 0);
            $pdf->Cell(50, 6, $row->keterangan, 1, 0);
            $pdf->Cell(30, 6, $query, 1, 1);
        }
        $pdf->SetY(265);
        // Arial italic 8
        $pdf->SetFont('Arial', 'I', 8);
        // Text color in gray
        $pdf->SetTextColor(128);
        // Page number
        $pdf->Cell(0, 10, 'Page ' . $pdf->PageNo(), 0, 0, 'C');

        $pdf->Output();
    }

    function cetakOdp()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        //foto
        $pdf->Image('assets/img/logo/telkom.png', 8, 2, 50, 20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM WITEL SEMARANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(190, 7, 'Jl. Singotoro No.20 Semarang 50256, Jawa Tengah', 0, 1, 'C');
        //pindah baris
        $pdf->Ln(20);
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // isi
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data DP/ODP', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(50, 6, 'Nama', 1, 0);
        $pdf->Cell(50, 6, 'QR Code', 1, 0);
        $pdf->Cell(30, 6, 'Total Port', 1, 0);
        $pdf->Cell(40, 6, 'Description', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('odp')->result();
        $i = 1;
        foreach ($user as $row) {
            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(50, 6, $row->nama, 1, 0);
            $pdf->Cell(50, 6, $row->qr, 1, 0);
            $pdf->Cell(30, 6, $row->total, 1, 0);
            $pdf->Cell(40, 6, $row->keterangan, 1, 1);
        }
        $pdf->SetY(265);
        // Arial italic 8
        $pdf->SetFont('Arial', 'I', 8);
        // Text color in gray
        $pdf->SetTextColor(128);
        // Page number
        $pdf->Cell(0, 10, 'Page ' . $pdf->PageNo(), 0, 0, 'C');

        $pdf->Output();
    }


    function cetakOan()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        //foto
        $pdf->Image('assets/img/logo/telkom.png', 8, 2, 50, 20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM WITEL SEMARANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(190, 7, 'Jl. Singotoro No.20 Semarang 50256, Jawa Tengah', 0, 1, 'C');
        //pindah baris
        $pdf->Ln(20);
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // isi
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data Service', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(40, 6, 'Telphone', 1, 0);
        $pdf->Cell(40, 6, 'Serial Number', 1, 0);
        $pdf->Cell(20, 6, 'Vendor', 1, 0);
        $pdf->Cell(40, 6, 'QR Code', 1, 0);
        $pdf->Cell(35, 6, 'Description', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('oan')->result();
        $i = 1;
        foreach ($user as $row) {
            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(40, 6, $row->no, 1, 0);
            $pdf->Cell(40, 6, $row->sn, 1, 0);
            $pdf->Cell(20, 6, $row->vendor, 1, 0);
            $pdf->Cell(40, 6, $row->qr, 1, 0);
            $pdf->Cell(35, 6, $row->keterangan, 1, 1);
        }
        $pdf->SetY(265);
        // Arial italic 8
        $pdf->SetFont('Arial', 'I', 8);
        // Text color in gray
        $pdf->SetTextColor(128);
        // Page number
        $pdf->Cell(0, 10, 'Page ' . $pdf->PageNo(), 0, 0, 'C');

        $pdf->Output();
    }


    function cetakSemua()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        //foto
        $pdf->Image('assets/img/logo/telkom.png', 8, 2, 50, 20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM WITEL SEMARANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(190, 7, 'Jl. Singotoro No.20 Semarang 50256, Jawa Tengah', 0, 1, 'C');
        //pindah baris
        $pdf->Ln(20);
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // isi odp
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data DP/ODP', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(50, 6, 'Nama', 1, 0);
        $pdf->Cell(50, 6, 'QR Code', 1, 0);
        $pdf->Cell(30, 6, 'Total Port', 1, 0);
        $pdf->Cell(40, 6, 'Description', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('odp')->result();
        $i = 1;
        foreach ($user as $row) {
            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(50, 6, $row->nama, 1, 0);
            $pdf->Cell(50, 6, $row->qr, 1, 0);
            $pdf->Cell(30, 6, $row->total, 1, 0);
            $pdf->Cell(40, 6, $row->keterangan, 1, 1);
        }
        $pdf->Ln(20);

        // isi oan
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data Service', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(40, 6, 'Telphone', 1, 0);
        $pdf->Cell(40, 6, 'Serial Number', 1, 0);
        $pdf->Cell(20, 6, 'Vendor', 1, 0);
        $pdf->Cell(40, 6, 'QR Code', 1, 0);
        $pdf->Cell(35, 6, 'Description', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('oan')->result();
        $i = 1;
        foreach ($user as $row) {
            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(40, 6, $row->no, 1, 0);
            $pdf->Cell(40, 6, $row->sn, 1, 0);
            $pdf->Cell(20, 6, $row->vendor, 1, 0);
            $pdf->Cell(40, 6, $row->qr, 1, 0);
            $pdf->Cell(35, 6, $row->keterangan, 1, 1);
        }

        $pdf->Ln(20);

        // isi user
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Data User', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(30, 6, 'Nama', 1, 0);
        $pdf->Cell(60, 6, 'Email', 1, 0);
        $pdf->Cell(50, 6, 'Descreption', 1, 0);
        $pdf->Cell(30, 6, 'Status', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $user = $this->db->get_where('user')->result();
        $i = 1;
        foreach ($user as $row) {
            if ($row->is_active == 1) {
                $query = "Aktiv";
            } else {
                $query = "Non-Aktiv";
            }

            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(30, 6, $row->name, 1, 0);
            $pdf->Cell(60, 6, $row->email, 1, 0);
            $pdf->Cell(50, 6, $row->keterangan, 1, 0);
            $pdf->Cell(30, 6, $query, 1, 1);
        }
        $pdf->SetY(265);
        // Arial italic 8
        $pdf->SetFont('Arial', 'I', 8);
        // Text color in gray
        $pdf->SetTextColor(128);
        // Page number
        $pdf->Cell(0, 10, 'Page ' . $pdf->PageNo(), 0, 0, 'C');

        $pdf->Output();
    }
}
