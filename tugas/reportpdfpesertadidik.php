<?php
//menyertakan file koneksi.php agar terkoneksi dengan database db_peserta_didik
include('koneksi.php');
//menyertakan file autoload.inc.php yang ada di folder dompdf
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
//membuat class Dompdf()
$dompdf = new Dompdf();
//query untuk mendapatkan data di tabel pdidik
$query = mysqli_query($koneksi,"SELECT * FROM pdidik");
//membuat judul pada dokumen pdf
$html = '<center><h3>Data Peserta Didik</h3></center><br>';
// membuat heading setiap kolom tabel
$html .= '<br> <br> <table border="1" width="100%">
 <tr>
 <th> No </th>
 <th>Jenis Pendaftran</th>
 <th>Tanggal Masuk Sekolah </th>
 <th>NIS</th>
 <th>Nomor Peserta Ujian</th>
 <th>PAUD</th>
 <th>TK</th>
 <th>Nomor Seri SKHUN </th>
 <th>Nomor Seri Ijazah</th>
 <th>Hobi</th>
 <th>Cita - Cita</th>
 <th>Nama Lengkap</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Agama</th>
 <th>Kebutuhan Khusus</th>
 <th>Alamat Jalan</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Tempat Tinggal</th>
 <th>Transportasi</th>
 <th>Nomor HP</th>
 <th>Nomor Telepon</th>
 <th>Email</th>
 <th>Terima KPS</th>
 <th>Nomor KPS</th>
 <th>Kewarganegaraan</th>
 <th>Nama Negara</th>
 </tr>';
//memberikan nomor urut disetiap data di tabel tb_siswa
$no = 1;
//menyimpan hasil query dalam variabel $row
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr> 
 <td>".$no++."</td>
 <td>".$row['jenis_pendaftaran']."</td>
 <td>".$row['tanggal_masuk_sekolah']."</td>
 <td>".$row['nis']."</td>
 <td>".$row['nomor_peserta_ujian']."</td>
 <td>".$row['paud']."</td>
 <td>".$row['tk']."</td>
 <td>".$row['nomor_seri_skhun']."</td>
 <td>".$row['nomor_seri_ijazah']."</td>
 <td>".$row['hobi']."</td>
 <td>".$row['cita_cita']."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['jenis_kelamin']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempat_lahir']."</td>
 <td>".$row['tanggal_lahir']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['berkebutuhan_khusus']."</td>
 <td>".$row['alamat_jalan']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kode_pos']."</td>
 <td>".$row['tempat_tinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['hp']."</td>
 <td>".$row['telp']."</td>
 <td>".$row['email']."</td>
 <td>".$row['terima_kps']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['nama_negara']."</td>
 </tr>";
//  $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A1', 'landscape');
// melakukan rendering dari HTML Ke PDF
$dompdf->render();
// menghasilkan output file Pdf beserta nama filenya yaitu Data Peserta Didik.pdf
$dompdf->stream('Data Peserta Didik.pdf');
?>