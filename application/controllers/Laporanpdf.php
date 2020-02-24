<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LaporanPdf extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('cetak_pdf');
    }

    function PemakaiKontrasepsi()
    {
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Pemakai Kontrasepsi',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(20,6,'Id List',1,0,'C');
        $pdf->Cell(23,6,'Id Propinsi',1,0,'C');
        $pdf->Cell(30,6,'Id Kontrasepsi',1,0,'C');
        $pdf->Cell(30,6,'Jumlah Pemakai',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pemakai = $this->db->get('list_pemakai_kontrasepsi')->result();
        $no=0;
        foreach ($pemakai as $data){
            $pdf->Cell(8,6,$no,1,0);
            $pdf->Cell(20,6,$data->Id_List,1,0);
            $pdf->Cell(23,6,$data->Id_Propinsi,1,0);
            $pdf->Cell(30,6,$data->Id_Kontrasepsi,1,0);
            $pdf->Cell(30,6,$data->Jumlah_Pemakai,1,0);
            $no++;
        }
        $pdf->Output();
    }   
}