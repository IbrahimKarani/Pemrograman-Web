<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.
	com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384
	-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
	<style>
	.warning {
		color: #FF0000;
	}
	</style>
</head>
<body>

<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Jenis Kelamin');
$sheet->setCellValue('C1', 'NISN');
$sheet->setCellValue('D1', 'NIK');
$sheet->setCellValue('E1', 'Tempat Lahir');
$sheet->setCellValue('F1', 'Tanggal Lahir');
$sheet->setCellValue('G1', 'No.Reg Akta');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Kewarganegaraan');
$sheet->setCellValue('J1', 'Berkebutuhan Khusus');
$sheet->setCellValue('K1', 'Alamat Jalan');
$sheet->setCellValue('L1', 'RT');
$sheet->setCellValue('M1', 'RW');
$sheet->setCellValue('N1', 'Dusun');
$sheet->setCellValue('O1', 'Kelurahan');
$sheet->setCellValue('P1', 'Kecamatan');
$sheet->setCellValue('Q1', 'Kodepos');
$sheet->setCellValue('R1', 'Lintang');
$sheet->setCellValue('S1', 'Bujur');
$sheet->setCellValue('T1', 'Tempat Tinggal');
$sheet->setCellValue('U1', 'Transportasi');
$sheet->setCellValue('V1', 'No.KKS');
$sheet->setCellValue('W1', 'Anak Ke');
$sheet->setCellValue('X1', 'Penerima KPS');
$sheet->setCellValue('Y1', 'No.KPS');
 
$query = mysqli_query($koneksi,"select * from form");
$i = 2;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['nama_lengkap']);
	$sheet->setCellValue('B'.$i, $row['jk']);
	$sheet->setCellValue('C'.$i, $row['nisn']);
	$sheet->setCellValue('D'.$i, $row['nik']);
	$sheet->setCellValue('E'.$i, $row['templahir']);
	$sheet->setCellValue('F'.$i, $row['tglahir']);
	$sheet->setCellValue('G'.$i, $row['akta']);
	$sheet->setCellValue('H'.$i, $row['agama']);
	$sheet->setCellValue('I'.$i, $row['kwn']);
	$sheet->setCellValue('J'.$i, $row['bk']);
	$sheet->setCellValue('K'.$i, $row['alamat']);
	$sheet->setCellValue('L'.$i, $row['rt']);
	$sheet->setCellValue('M'.$i, $row['rw']);
	$sheet->setCellValue('N'.$i, $row['dusun']);
	$sheet->setCellValue('O'.$i, $row['kelurahan']);
	$sheet->setCellValue('P'.$i, $row['kecamatan']);
	$sheet->setCellValue('Q'.$i, $row['kodepos']);
	$sheet->setCellValue('R'.$i, $row['lintang']);
	$sheet->setCellValue('S'.$i, $row['bujur']);
	$sheet->setCellValue('T'.$i, $row['tinggal']);
	$sheet->setCellValue('U'.$i, $row['transport']);
	$sheet->setCellValue('V'.$i, $row['kks']);
	$sheet->setCellValue('W'.$i, $row['anak']);
	$sheet->setCellValue('X'.$i, $row['kps']);
	$sheet->setCellValue('Y'.$i, $row['nokps']);

	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftar.xlsx');

$error_nama = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_templahir = "";
$error_tglahir = "";
$error_akta = "";
$error_agama = "";
$error_kwn = "";
$error_bk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tinggal = "";
$error_transport = "";
$error_kks = "";
$error_anak = "";
$error_kps = "";
$error_nokps = "";

$nama = "";
$jk = "";
$nisn = "";
$nik = "";
$templahir = "";
$tglahir = "";
$akta = "";
$agama = "";
$kwn = "";
$bk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tinggal = "";
$transport = "";
$kks = "";
$anak = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	} 
	else
	{
		
		if (!preg_match("/^[a-zA-Z ]*$/",$nama))
		{
			$error_nama = "Inputan Hanya boleh huruf dan spasi";
		}else{
			$nama = cek_input($_POST["nama"]);
		}
	}

	if (empty($_POST["jk"]))
	{
		$error_jk = "Jenis kelamin tidak boleh kosong";
	} 
	else
	{
		$jk = cek_input($_POST["jk"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$jk))
		{
			$error_jk = "Inputan Hanya boleh huruf dan spasi";
		}	
	}	
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);

		if(!is_numeric($nisn))
		{
			$error_nisn = 'NISN hanya boleh angka';
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);

		if(!is_numeric($nik))
		{
			$error_nik = 'NIK hanya boleh angka';
		}
	}
	if (empty($_POST["templahir"]))
	{
		$error_templahir = "Tempat Lahir tidak boleh kosong";
	} 
	else
	{
		$templahir = cek_input($_POST["templahir"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$templahir))
		{
			$error_templahir = "Inputan Hanya boleh huruf dan spasi";
		}	
	}	
	if (empty($_POST["jk"]))
	{
		$error_jk = "Jenis kelamin tidak boleh kosong";
	} 
	else
	{
		$jk = cek_input($_POST["jk"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$jk))
		{
			$error_jk = "Inputan Hanya boleh huruf dan spasi";
		}	
	}	
	if 	(empty($_POST["tglahir"]))
	{
		$error_tglahir = "Tanggal Lahir tidak boleh kosong";
	}
	else
	{
		$tglahir = cek_input($_POST["tglahir"]);
	}
	if (empty($_POST["akta"]))
	{
		$error_akta = "No.Reg Akta tidak boleh kosong";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);

		if(!is_numeric($akta))
		{
			$error_akta = 'No.Reg Akta hanya boleh angka';
		}
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	} 
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$agama))
		{
			$error_agama = "Inputan Hanya boleh huruf dan spasi";
		}	
	}	
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	} 
	else
	{
		$kwn = cek_input($_POST["kwn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kwn))
		{
			$error_kwn = "Inputan Hanya boleh huruf dan spasi";
		}	
	}	
	if (empty($_POST["bk"]))
	{
		$error_bk = "Tidak boleh kosong";
	} 
	else
	{
		$bk = cek_input($_POST["bk"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$bk))
		{
			$error_bk = "Hanya Jawab 'Ya' atau 'Tidak'";
		}	
	}	
	if 	(empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat Jalan tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);

		if(!is_numeric($rt))
		{
			$error_rt = 'RT hanya boleh angka';
		}
	}
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);

		if(!is_numeric($rw))
		{
			$error_rw = 'RW hanya boleh angka';
		}
	}
	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Tidak boleh kosong";
	} 
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf atau spasi";
		}	
	}	
	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "Tidak boleh kosong";
	} 
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan))
		{
			$error_kelurahan = "Inputan hanya boleh huruf atau spasi";
		}	
	}
	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Tidak boleh kosong";
	} 
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan))
		{
			$error_kecamatan = "Inputan hanya boleh huruf atau spasi";
		}	
	}	
	if (empty($_POST["kodepos"]))
	{
		$error_kodepos = "Tidak boleh kosong";
	}
	else
	{
		$kodepos = cek_input($_POST["kodepos"]);

		if(!is_numeric($kodepos))
		{
			$error_kodepos = 'Kodepos hanya boleh angka';
		}
	}	
	if 	(empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}
	if 	(empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}
	if 	(empty($_POST["tinggal"]))
	{
		$error_tinggal = "Tempat tinggal tidak boleh kosong";
	}
	else
	{
		$tinggal = cek_input($_POST["tinggal"]);
	}
	if 	(empty($_POST["transport"]))
	{
		$error_transport = "Transportasi tidak boleh kosong";
	}
	else
	{
		$transport = cek_input($_POST["transport"]);
	}
	if (empty($_POST["kks"]))
	{
		$error_kks = "Tidak boleh kosong";
	}
	else
	{
		$kks = cek_input($_POST["kks"]);

		if(!is_numeric($kks))
		{
			$error_kks = 'No.KKS hanya boleh angka';
		}
	}	
	if (empty($_POST["anak"]))
	{
		$error_anak = "Tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);

		if(!is_numeric($anak))
		{
			$error_anak = 'Hanya boleh angka';
		}
	}	
	if (empty($_POST["kps"]))
	{
		$error_kps = "Tidak boleh kosong";
	} 
	else
	{
		$kps = cek_input($_POST["kps"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kps))
		{
			$error_kps = "Hanya Jawab 'Ya' atau 'Tidak'";
		}	
	}		
	if (empty($_POST["nokps"]))
	{
		$error_nokps = "Tidak boleh kosong";
	}
	else
	{
		$nokps = cek_input($_POST["nokps"]);

		if(!is_numeric($nokps))
		{
			$error_nokps = 'Hanya boleh angka';
		}
	}
}


function cek_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<div class="row">
<div class="col-md-12">
<div class="card">
	<div class="card-header">
	<h1> FORMULIR PESERTA DIDIK </h1><br>
	</div>
		<div class="card-body">	
		<form method="post" action="simpan_form.php">

			<div class="form-group row">	
			<label for="nama" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-5">
			<input type="text" name="nama" class="form-control <?php echo 
			($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama"
			value="<?php echo $nama; ?>">
			<span class="warning"><?php echo $error_nama; ?></span>
			</div>
			</div>
			

			<div class="form-group row">
			<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-5">
			<select name="jk">
				<option value="L">Laki - Laki</option>
				<option value="P">Perempuan</option>
			</select>
			</div>
			</div>
			

			<div class="form-group row">
			<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
			<div class="col-sm-5">
			<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
			<span class="warning"><?php echo $error_nisn; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="nik" class="col-sm-2 col-form-label">NIK</label>
			<div class="col-sm-5">
			<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
			<span class="warning"><?php echo $error_nik; ?></span>
			</div>
			</div>
			
			<div class="form-group row">
			<label for="templahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-5">
			<input type="text" name="templahir" class="form-control <?php echo ($error_templahir !="" ? "is-invalid" : ""); ?>" id="templahir" placeholder="Tempat Lahir" value="<?php echo $templahir; ?>">
			<span class="warning"><?php echo $error_templahir; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="tglahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-5">
			<input type="text" name="tglahir" class="form-control <?php echo ($error_tglahir !="" ? "is-invalid" : ""); ?>" id="Tanggal Lahir" placeholder="cth : 29 Juni 2000" value="<?php echo $tglahir; ?>">
			<span class="warning"><?php echo $error_tglahir; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="akta" class="col-sm-2 col-form-label">No.Reg AKTA</label>
			<div class="col-sm-5">
			<input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="Masukkan Hanya Angka" value="<?php echo $akta; ?>">
			<span class="warning"><?php echo $error_akta; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="agama" class="col-sm-2 col-form-label">Agama</label></td>
			<div class="col-sm-5">
			<select name="agama">
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Katholik">Katholik</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Kong_Hu_Chu">Kong Hu Chu</option>
				<option value="Atheis">Atheis</option>
			</select>
			</div>
			</div>


			<div class="form-group row">
			<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
			<div class="col-sm-5">
			<input type="text" name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn; ?>">
			<span class="warning"><?php echo $error_kwn; ?></span>
			</div>
			</div>

			
			<div class="form-group row">
			<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-5">
			<select name="bk">
				<option value="Ya">Ya</option>
				<option value="Tidak">Tidak</option>
			</select>
			</div>
			</div>

			<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-5">
			<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
			<span class="warning"><?php echo $error_alamat; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="rt" class="col-sm-2 col-form-label">RT</label>
			<div class="col-sm-5">
			<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="Masukkan Angka Saja" value="<?php echo $rt; ?>">
			<span class="warning"><?php echo $error_rt; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="rw" class="col-sm-2 col-form-label">RW</label>
			<div class="col-sm-5">
			<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="Masukkan Angka Saja" value="<?php echo $rw; ?>">
			<span class="warning"><?php echo $error_rw; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
			<div class="col-sm-5">
			<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>">
			<span class="warning"><?php echo $error_dusun; ?></span>
			</div>	
			</div>

			<div class="form-group row">
			<label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
			<div class="col-sm-5">
			<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>">
			<span class="warning"><?php echo $error_kelurahan; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
			<div class="col-sm-5">
			<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
			<span class="warning"><?php echo $error_kecamatan; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="kodepos" class="col-sm-2 col-form-label">Kodepos</label>
			<div class="col-sm-5">
			<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Masukkan Angka Saja" value="<?php echo $kodepos; ?>">
			<span class="warning"><?php echo $error_kodepos; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
			<div class="col-sm-5">
			<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>">
			<span class="warning"><?php echo $error_lintang; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
			<div class="col-sm-5">
			<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>">
			<span class="warning"><?php echo $error_bujur; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
			<div class="col-sm-5">
			<select name="tinggal">
				<option value="Ortu">Bersama Orang Tua</option>
				<option value="Kos">Kos</option>
				<option value="Kontrak">Kontrak</option>
				<option value="Asrama">Asrama</option>
			</select>
			</div>
			</div>

			<div class="form-group row">
			<label for="transport" class="col-sm-2 col-form-label">Moda Transportasi</label>
			<div class="col-sm-5">
			<select name="transport">
				<option value="Motor">Sepeda Motor</option>
				<option value="Mobil">Mobil</option>
				<option value="Jalan">Jalan Kaki</option>
				<option value="Umum">Kendaraan Umum</option>
				<option value="Ojol">Ojek/Taxi Online</option>
			</select>
			<span class="warning"><?php echo $error_transport; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<label for="kks" class="col-sm-2 col-form-label">Nomor KKS</label>
			<div class="col-sm-5">
			<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="Masukkan Angka Saja" value="<?php echo $kks; ?>">
			<span class="warning"><?php echo $error_kks; ?></span>
			</div>
			</div>


			<div class="form-group row">
			<label for="anak" class="col-sm-2 col-form-label">Anak Ke</label>
			<div class="col-sm-5">
			<input type="text" name="anak" class="form-control <?php echo ($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Masukkan Angka Saja" value="<?php echo $anak; ?>">
			<span class="warning"><?php echo $error_anak; ?></span>
			</div>
			</div>

			<div class="form-group row">	
			<label for="kps" class="col-sm-2 col-form-label">Penerima KPS</label>
			<div class="col-sm-5">
			<select name="kps">
				<option value="Ya">Ya</option>
				<option value="Tidak">Tidak</option>
			</select>
			</div>
			</div>

			<div class="form-group row">
			<label for="nokps" class="col-sm-2 col-form-label">No. KPS</label>
			<div class="col-sm-5">
			<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Masukkan Angka Saja" value="<?php echo $nokps; ?>">
			<span class="warning"><?php echo $error_nokps; ?></span>
			</div>
			</div>

			<div class="form-group row">
			<div class="col-sm-5">	
			<button type="submit" class="btn btn-primary">INPUT</button>
			<button type="reset" class="btn btn-primary">RESET</button>
			</div>
			</div>
		</form>
		</div>	
</div>
</div>
</div>


</body>
</html>