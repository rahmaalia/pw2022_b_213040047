
<?php
require 'functions.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk DESC");
$html = '<center>
        <h2>LAPORAN BARANG SERENDIPITY</h2> </br>
        </center><br><br>';
$html.= '<center><h3 style="margin-top:20px; margin-bottom:20px;">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat </h3></center>';
$html.= '<br/>';
$html.= '<br/>';
$html.= '<hr>';

$html .= '<table border="1" width="100%" style="margin-top:40px;border-collapse: collapse;border: 1px solid #ddd;">
 <tr>
 <th style="text-align:center;  padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">No</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Nama produk</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Stok</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Harga</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Kategori</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td style='text-align:center; font-family: Arial, Helvetica, sans-serif;'>".$no."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['nama_produk']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['stok']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['harga']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['nama_kategori']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_serendipity.pdf');
?>

