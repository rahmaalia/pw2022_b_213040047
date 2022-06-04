<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk DESC");

$pdf = new FPDF();
$pdf->SetAutoPageBreak(true,15);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20, "LAPORAN DATA PENJUALAN SERENDIPITY", '0', 1, 'C');

# header
$pdf->setFont('Arial','',12);
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(43,$ya);
$pdf->CELL(10,6,'NO',1,0,'C',1);
// $pdf->CELL(35,6,'GAMBAR',1,0,'C',1);
$pdf->CELL(70,6,'NAMA',1,0,'C',1);
$pdf->CELL(15,6,'STOK',1,0,'C',1);
$pdf->CELL(30,6,'HARGA',1,0,'C',1);
// $pdf->CELL(75,6,'KETERANGAN',1,0,'C',1);

$no = 1;
$row = 6;
$ya = $yi + $row;
foreach($produk as $pro){
    $pdf->setXY(43,$ya);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(255,255,255);
    $pdf->CELL(10,6,$no,1,0,'C',1);
    // $pdf->CELL(35,6,$pro["gambar"],1,0,'C',1);
    // $pdf->image('../gambar/' . $pro["gambar"],35,140,50,30);
    $pdf->Cell(70,6,$pro["nama_produk"],1,0,'L',1);
    $pdf->CELL(15,6,$pro["stok"],1,0,'C',1);
    $pdf->CELL(30,6,ubahRupiah($pro["harga"]),1,0,'C',1);
    // $pdf->MultiCell(75,6,$pro["keterangan"],1,0,'C',1);
    $ya = $ya+$row;
    $no++;
}





$pdf->Output();

?>


