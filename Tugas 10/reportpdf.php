<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT * FROM form");
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No.Reg Akta</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Jalan</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kodepos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Transportasi</th>
 <th>No.KKS</th>
 <th>Anaka Ke</th>
 <th>Penerima KPS</th>
 <th>No.KPS</th>
 </tr>';
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['templahir']."</td>
 <td>".$row['tglahir']."</td>
 <td>".$row['akta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['bk']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kodepos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['tinggal']."</td>
 <td>".$row['transport']."</td>
 <td>".$row['kks']."</td>
 <td>".$row['anak']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('B0', 'landscape');
$dompdf->render();
$dompdf->stream('laporan_pendaftar.pdf');
?>