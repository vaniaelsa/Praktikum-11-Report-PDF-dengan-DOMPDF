<?php
//menyertakan file koneksi.php agar terkoneksi dengan database db_siswa
include('koneksi.php');
//menyertakan file autoload.inc.php yang ada di folder dompdf
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
//membuat class Dompdf()
$dompdf = new Dompdf();
//query untuk mendapatkan data di tb_siswa
$query = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
//membuat header dan judul tabel
$html = '<center><h3>Daftar Nama Siswa</h3></center><br>';
$html .= '<br> <br> <table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Alamat</th>
 </tr>';
//memberikan nomor urut disetiap data di tabel tb_siswa
$no = 1;
//menyimpan hasil query dalam variabel $row
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['nama']."</td>
    <td>".$row['kelas']."</td>
    <td>".$row['alamat']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// melakukan rendering dari HTML Ke PDF
$dompdf->render();
// menghasilkan output file Pdf beserta nama filenya
$dompdf->stream('laporan_siswa.pdf');
?>

