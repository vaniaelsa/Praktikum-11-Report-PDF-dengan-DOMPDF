<!DOCTYPE HTML>  
<html>
<head>
    <!-- memasukkan tampilan boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    
    <style>
    /*  tampilan pada classs warning */
    .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
// deklarasi variabel 
$error_jenis_pendaftaran="";
$error_tanggal_masuk_sekolah="";
$error_nis="";
$error_nomor_peserta_ujian="";
$error_paud="";
$error_tk="";
$error_nomor_seri_skhun="";
$error_nomor_seri_ijazah="";
$error_hobi="";
$error_cita_cita="";
$error_nama_lengkap = "";
$error_jenis_kelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tempat_lahir = "";
$error_tanggal_lahir = "";
$error_agama = "";
$error_berkebutuhan_khusus = "";
$error_alamat_jalan = "";
$error_rt= "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kode_pos ="";
$error_tempat_tinggal = "";
$error_transportasi = "";
$error_hp = "";
$error_telp = "";
$error_email = "";
$error_terima_kps = "";
$error_kps = "";
$error_kwn = "";
$error_nama_negara = "";

$jenis_pendaftaran="";
$tanggal_masuk_sekolah="";
$nis="";
$nomor_peserta_ujian="";
$paud="";
$tk="";
$nomor_seri_skhun="";
$nomor_seri_ijazah="";
$hobi="";
$cita_cita="";
$nama_lengkap = "";
$jenis_kelamin = "";
$nisn = "";
$nik = "";
$tempat_lahir = "";
$tanggal_lahir = "";
$agama = "";
$berkebutuhan_khusus = "";
$alamat_jalan = "";
$rt= "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kode_pos = "";
$tempat_tinggal = "";
$transportasi = "";
$hp = "";
$telp = "";
$email = "";
$terima_kps = "";
$kps = "";
$kwn = "";
$nama_negara = "";

$sukses_input="";

// Kondisi saat method post dijalankan
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	 //INPUT JENIS PENDAFTARAN
	if(empty($_POST["jenis_pendaftaran"])){
		//  deklarasi variabel berisi pesan error saat form input jenis_pendaftaran tidak diisi
		$error_jenis_pendaftaran="Jenis Pendaftaran Harus Diisi";
	}
	else{
		$jenis_pendaftaran=cek_input($_POST["jenis_pendaftaran"]);
		// pengecekan inputan pada form input berkebutuhan khusus
		if($jenis_pendaftaran == "01"){
			$jenis_pendaftaran="Siswa Baru";	
		}
		elseif($jenis_pendaftaran == "02"){
			$jenis_pendaftaran="Pindahan";	
		}
		else{
			$error_jenis_pendaftaran="Masukkan pilihan jenis pendaftaran dengan benar";
		}
	}

	//INPUT TANGGAL MASUK SEKOLAH
	if(empty($_POST["tanggal_masuk_sekolah"])){
		//  deklarasi variabel berisi pesan error saat form input tanggal_masuk_sekolah tidak diisi
		$error_tanggal_masuk_sekolah="Tanggal Masuk Sekolah Harus Diisi";
	}
	else{
		$tanggal_masuk_sekolah=cek_input($_POST["tanggal_masuk_sekolah"]);
	}

	//INPUT NIS
	if(empty($_POST["nis"])){
		//  deklarasi variabel berisi pesan error saat form input nis tidak diisi
		$error_nis="NIS Harus Diisi";
	}
	else{
		$nis=cek_input($_POST["nis"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nis)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nis="NIS Hanya Boleh Berisi Angka";
		}
	}

	//INPUT Nomor Peserta Ujian
	if(empty($_POST["nomor_peserta_ujian"])){
		$error_nomor_peserta_ujian="Nomor Peserta Ujian Harus Diisi";
	}
	else{
		$nomor_peserta_ujian=cek_input($_POST["nomor_peserta_ujian"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nomor_peserta_ujian)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nomor_peserta_ujian="Nomor Peserta Ujian Hanya Boleh Berisi Angka";
		}
	}

	//INPUT  Pernah PAUD atau tidak
	if(empty($_POST["paud"])){
		//  deklarasi variabel berisi pesan error saat input tidak diisi
		$error_paud="Opsi Ya atau Tidak Harus Diisi";
	}
	else{
		$paud=cek_input($_POST["paud"]);
	}

	//INPUT  Pernah TK atau tidak
	if(empty($_POST["tk"])){
		//  deklarasi variabel berisi pesan error saat input tidak diisi
		$error_tk="Opsi Ya atau Tidak Harus Diisi";
	}
	else{
		$tk=cek_input($_POST["tk"]);
	}

	//INPUT Nomor SKHUN
	if(empty($_POST["nomor_seri_skhun"])){
		$error_nomor_seri_skhun="Nomor Seri SKHUN Harus Diisi";
	}
	else{
		$nomor_seri_skhun=cek_input($_POST["nomor_seri_skhun"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nomor_seri_skhun)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nomor_seri_skhun="Nomor Seri SKHUN Hanya Boleh Berisi Angka";
		}
		//pengecekan jumlah / panjang karakter
		elseif (strlen($nomor_seri_skhun) != 16) {
			$error_nomor_seri_skhun=" Nomor Seri SKHUN Harus 16 digit";
		}
	}

	//INPUT Nomor Ijazah
	if(empty($_POST["nomor_seri_ijazah"])){
		$error_nomor_seri_ijazah="Nomor Seri Ijazah Harus Diisi";
	}
	else{
		$nomor_seri_ijazah=cek_input($_POST["nomor_seri_ijazah"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nomor_seri_ijazah)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nomor_seri_ijazah="Nomor Seri Ijazah Hanya Boleh Berisi Angka";
		}
		//pengecekan jumlah / panjang karakter
		elseif (strlen($nomor_seri_ijazah) != 16) {
			$error_nomor_seri_ijazah="Nomor Seri Ijazah Harus 16 digit";
		}
	}

	//INPUT Hobi
	if(empty($_POST["hobi"])){
		//  deklarasi variabel berisi pesan error saat form input hobi tidak diisi
		$error_hobi="Hobi Harus Diisi";
	}
	else{
		$hobi=cek_input($_POST["hobi"]);
		 // pengecekan inputan pada form input hobi
		if($hobi == "A"){
			$hobi="Olah Raga";	
		}
		elseif($hobi == "B"){
			$hobi="Kesenian";	
		}
		elseif($hobi == "C"){
			$hobi="Membaca";	
		}
		elseif($hobi == "D"){
			$hobi="Menulis";	
		}
		elseif($hobi == "E"){
			$hobi="Travelling";	
		}
		elseif($hobi == "F"){
			$hobi="Lainnya";	
		}
		else{
			$error_hobi="Ayo, pilih hobi yang benar ya";
		}
	}

	//INPUT Cita-cita
	if(empty($_POST["cita_cita"])){
		//  deklarasi variabel berisi pesan error saat form input cita-cita tidak diisi
		$error_cita_cita="Cita-cita Harus Diisi";
	}
	else{
		$cita_cita=cek_input($_POST["cita_cita"]);
		// pengecekan inputan pada form input cita-cita
		if($cita_cita == "A"){
			$cita_cita="PNS";	
		}
		elseif($cita_cita == "B"){
			$citacita="TNI/POLRI";	
		}
		elseif($cita_cita == "C"){
			$cita_cita="Guru/Dosen";	
		}
		elseif($cita_cita == "D"){
			$cita_cita="Dokter";	
		}
		elseif($cita_cita == "E"){
			$cita_cita="Politikus";	
		}
		elseif($cita_cita == "F"){
			$cita_cita="Wiraswasta";	
		}
		elseif($cita_cita == "G"){
			$cita_cita="Seni/Lukis/Artis/Sejenis";	
		}
		elseif($cita_cita == "H"){
			$cita_cita="Lainnya";	
		}
		else{
			$error_cita_cita="Ayo, pilih cita - cita yang benar ya";
		}
	}


	//INPUT Nama Lengkap
	if(empty($_POST["nama_lengkap"])){
		//  deklarasi variabel berisi pesan error saat form input nama tidak diisi
		$error_nama_lengkap="Nama Lengkap Harus Diisi";
	}
	else{
		$nama_lengkap=cek_input($_POST["nama_lengkap"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $nama_lengkap)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_nama_lengkap="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Jenis Kelamin
	if(empty($_POST["jenis_kelamin"])){
		$error_jenis_kelamin="Opsi Jenis Kelamin Harus Diisi";
	}
	else{
		//  deklarasi variabel berisi pesan error saat input jenis kelamin tidak diisi
		$jenis_kelamin=cek_input($_POST["jenis_kelamin"]);
	}

	//INPUT NISN
	if(empty($_POST["nisn"])){
		//  deklarasi variabel berisi pesan error saat form input NISN tidak diisi
		$error_nisn="NISN Harus Diisi";
	}
	else{
		$nisn=cek_input($_POST["nisn"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nisn)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nisn="NISN Hanya Boleh Berisi Angka";
		}
	}

	//INPUT NIK
	if(empty($_POST["nik"])){
		//  deklarasi variabel berisi pesan error saat form input NIK tidak diisi
		$error_nik="NIK Harus Diisi";
	}
	else{
		$nik=cek_input($_POST["nik"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nik)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nik="NIK Hanya Boleh Berisi Angka";
		}
	}

	//INPUT Tempat Lahir
	if(empty($_POST["tempat_lahir"])){
		//  deklarasi variabel berisi pesan error saat form input nama tidak diisi
		$error_tempat_lahir="Tempat Lahir Harus Diisi";
	}
	else{
		$tempat_lahir=cek_input($_POST["tempat_lahir"]);
		// pengecekan inputan tempat lahir hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $tempat_lahir)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_tempat_lahir="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Tanggal Lahir
	if(empty($_POST["tanggal_lahir"])){
		//  deklarasi variabel berisi pesan error saat form input tanggal lahir tidak diisi
		$error_tanggal_lahir="Tanggal Lahir Harus Diisi";
	}
	else{
		$tanggal_lahir=cek_input($_POST["tanggal_lahir"]);
	}

	//INPUT Agama
	if(empty($_POST["agama"])){
		//  deklarasi variabel berisi pesan error saat form input agama tidak diisi
		$error_agama="Agama Harus Diisi";
	}
	else{
		$agama=cek_input($_POST["agama"]);
		// pengecekan inputan pada form input agama
		if($agama == "01"){
			$agama="Islam";	
		}
		elseif($agama == "02"){
			$agama="Kristen/Protestan";	
		}
		elseif($agama == "03"){
			$agama="Katholik";	
		}
		elseif($agama == "04"){
			$agama="Hindu";	
		}
		elseif($agama == "05"){
			$agama="Buddha";	
		}
		elseif($agama == "06"){
			$agama="Khong Hu Chu";	
		}
		elseif($agama == "99"){
			$agama="Lainnya";	
		}
		else{
			$error_agama="Ayo, pilih opsi agama yang benar ya";
		}
	}

	//INPUT Berkebutuhan Khusus
	if(empty($_POST["berkebutuhan_khusus"])){
		//  deklarasi variabel berisi pesan error saat form input kebutuhan khusus tidak diisi
		$error_berkebutuhan_khusus="Berkebutuhan Khusus Harus Diisi";
	}
	else{
		$berkebutuhan_khusus=cek_input($_POST["berkebutuhan_khusus"]);
		// pengecekan inputan pada form input berkebutuhan khusus
		if($berkebutuhan_khusus == "01"){
			$berkebutuhan_khusus="Tidak";	
		}
		elseif($berkebutuhan_khusus == "02"){
			$berkebutuhan_khusus="Netra (A)";	
		}
		elseif($berkebutuhan_khusus == "03"){
			$berkebutuhan_khusus="Rungu (B)";	
		}
		elseif($berkebutuhan_khusus == "04"){
			$berkebutuhan_khusus="Grahita Ringan (C)";	
		}
		elseif($berkebutuhan_khusus == "05"){
			$berkebutuhan_khusus="Grahita Sedang (C1)";	
		}
		elseif($berkebutuhan_khusus == "06"){
			$berkebutuhan_khusus="Daksa Ringan (D)";	
		}
		elseif($berkebutuhan_khusus == "07"){
			$berkebutuhan_khusus="Daksa Sedang (D1)";	
		}
		elseif($berkebutuhan_khusus == "08"){
			$berkebutuhan_khusus="Laras (E)";	
		}
		elseif($berkebutuhan_khusus == "09"){
			$berkebutuhan_khusus="Wicara (F)";	
		}
		elseif($berkebutuhan_khusus == "10"){
			$berkebutuhan_khusus="Tuna Ganda (B)";	
		}
		elseif($berkebutuhan_khusus == "11"){
			$berkebutuhan_khusus="Hiper Aktif (H)";	
		}
		elseif($berkebutuhan_khusus == "12"){
			$berkebutuhan_khusus="Cerdas Istimewa (i)";	
		}
		elseif($berkebutuhan_khusus == "13"){
			$berkebutuhan_khusus="Bakat Istimewa (J)";	
		}
		elseif($berkebutuhan_khusus == "14"){
			$berkebutuhan_khusus="Kesulitan Belajar (K)";	
		}
		elseif($berkebutuhan_khusus == "15"){
			$berkebutuhan_khusus="Narkoba (N)";	
		}
		elseif($berkebutuhan_khusus == "16"){
			$berkebutuhan_khusus="Indigo (O)";	
		}
		elseif($berkebutuhan_khusus == "17"){
			$berkebutuhan_khusus="Down Sindrome (P)";	
		}
		elseif($berkebutuhan_khusus == "18"){
			$berkebutuhan_khusus="Autis (Q)";	
		}
		else{
			$error_berkebutuhan_khusus="Ayo, pilih opsi berkebutuhan khusus yang benar ya";
		}
	}

	//INPUT Alamat Jalan
	if(empty($_POST["alamat_jalan"])){
		$error_alamat_jalan="Alamat Jalan Harus Diisi";
	}
	else{
		$alamat_jalan=cek_input($_POST["alamat_jalan"]);
		// pengecekan inputan alamat jalan hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $alamat_jalan)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_alamat_jalan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT RT
	if(empty($_POST["rt"])){
		//  deklarasi variabel berisi pesan error saat form input RT tidak diisi
		$error_rt="RT Harus Diisi";
	}
	else{
		$rt=cek_input($_POST["rt"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($rt)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_rt="RT Hanya Boleh Berisi Angka";
		}
	}

	//INPUT RW
	if(empty($_POST["rw"])){
		//  deklarasi variabel berisi pesan error saat form input RW tidak diisi
		$error_rw="RW Harus Diisi";
	}
	else{
		$rw=cek_input($_POST["rw"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($rw)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_rw="RW Hanya Boleh berisi angka";
		}
	}

	//INPUT Dusun
	if(empty($_POST["dusun"])){
		 //  deklarasi variabel berisi pesan error saat form input dusun tidak diisi
		$error_dusun="Dusun Harus Diisi";
	}
	else{
		$dusun=cek_input($_POST["dusun"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $dusun)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_dusun="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}	

	//INPUT Kelurahan/Desa
	if(empty($_POST["kelurahan"])){
		//  deklarasi variabel berisi pesan error saat form input kelurahan tidak diisi
		$error_kelurahan="Kelurahan / Desa Harus Diisi";
	}
	else{
		$kelurahan=cek_input($_POST["kelurahan"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $kelurahan)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_kelurahan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Kecamatan
	if(empty($_POST["kecamatan"])){
		//  deklarasi variabel berisi pesan error saat form input kecamatan tidak diisi
		$error_kecamatan="Kecamatan Harus Diisi";
	}
	else{
		$kecamatan=cek_input($_POST["kecamatan"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $kecamatan)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_kecamatan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Kode Pos
	if(empty($_POST["kode_pos"])){
		//  deklarasi variabel berisi pesan error saat form input kode pos tidak diisi
		$error_kode_pos="Kode Pos Harus Diisi";
	}
	else{
		$kode_pos=cek_input($_POST["kode_pos"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($kode_pos)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_kode_pos="Kode Pos Hanya Boleh berisi angka";
		}
	}

	//INPUT Tempat Tinggal
	if(empty($_POST["tempat_tinggal"])){
		//  deklarasi variabel berisi pesan error saat form input tempat tinggal tidak diisi
		$error_tempat_tinggal="Tempat Tinggal Harus Diisi";
	}
	else{
		$tempat_tinggal=cek_input($_POST["tempat_tinggal"]);
		// pengecekan inputan pada form input tempat tinggal
		if($tempat_tinggal == "1"){
			$tempat_tinggal="Bersama Orang Tua";	
		}
		elseif($tempat_tinggal == "2"){
			$tempat_tinggal="Wali";	
		}
		elseif($tempat_tinggal == "3"){
			$tempat_tinggal="Kos";	
		}
		elseif($tempat_tinggal == "4"){
			$tempat_tinggal="Asrama";	
		}
		elseif($tempat_tinggal == "5"){
			$tempat_tinggal="Panti Asuhan";	
		}
		elseif($tempat_tinggal == "9"){
			$tempat_tinggal="Lainnya";	
		}
		else{
			$error_tempat_tinggal="Ayo, pilih tempat tinggal yang benar ya";
		}
	}

	//INPUT Transportasi
	if(empty($_POST["transportasi"])){
		//  deklarasi variabel berisi pesan error saat form input transportasi tidak diisi
		$error_transportasi="Transportasi Harus Diisi";
	}
	else{
		$transportasi=cek_input($_POST["transportasi"]);
		// pengecekan inputan pada form input transportasi
		if($transportasi == "01"){
			$transportasi="Jalan Kaki";	
		}
		elseif($transportasi == "02"){
			$transportasi="Kendaraan Pribadi";	
		}
		elseif($transportasi == "03"){
			$transportasi="Kendaraan Umum/Angkot/Pete-pete";	
		}
		elseif($transportasi == "04"){
			$transportasi="Jemputan Sekolah";	
		}
		elseif($transportasi == "05"){
			$transportasi="Kereta Api";	
		}
		elseif($transportasi == "06"){
			$transportasi="Ojek";	
		}
		elseif($transportasi == "07"){
			$transportasi="Andong/Bendi/Sado/Dokar/Delman/Becak";	
		}
		elseif($transportasi == "08"){
			$transportasi="Perahu Penyeberangan/Rakit/Getek";	
		}
		elseif($transportasi == "99"){
			$transportasi="Lainnya";	
		}
		else{
			$error_transportasi="Ayo, pilih transportasi yang benar ya";
		}
	}

	//INPUT Nomor HP
	if(empty($_POST["hp"])){
		//  deklarasi variabel berisi pesan error saat form input Nomor HP tidak diisi
		$error_hp="Nomor HP Harus Diisi";
	}
	else{
		$hp=cek_input($_POST["hp"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($hp)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_hp="Nomor HP Hanya Boleh Berisi Angka";
		}
	}
    //INPUT Nomor Telepon
	if(empty($_POST["telp"])){
		//  deklarasi variabel berisi pesan error saat form input Nomor Telepon tidak diisi
		$error_telp="Nomor Telpon Harus Diisi";
	}
	else{
		$telp=cek_input($_POST["telp"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($telp)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_telp="Nomor Telepon Hanya Boleh Berisi angka";
		}
	}

	//INPUT Email
	if(empty($_POST["email"])){
		//  deklarasi variabel berisi pesan error saat form input email tidak diisi
		$error_email="Email Harus Diisi";
	}
	else{
		$email=cek_input($_POST["email"]);
		// pengecekan inputan email hanya boleh email yang valid saja
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan email yang valid
			$error_email="Format Email Invalid";
		}
	}
	//INPUT  Terima KPS atau Tidak
	if(empty($_POST["terima_kps"])){
		//  deklarasi variabel berisi pesan error saat input tidak diisi
		$error_terima_kps="Opsi Ya atau Tidak Harus Diisi";
	}
	else{
		$terima_kps=cek_input($_POST["terima_kps"]);
	}

	//INPUT Nomor KPS/KKS/PKH/KIP
	$kps=cek_input($_POST["kps"]);
	// pengecekan inputan  hanya boleh angka saja
	if(!is_numeric($kps)){
		//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
	   $error_kps="Nomor KPS/KKS/PKH/KIP Hanya Boleh Berisi Angka";
   }	

   
	//INPUT Kewarganegaraan
	if(empty($_POST["kwn"])){
		//  deklarasi variabel berisi pesan error saat form input kewarganegaraan tidak diisi
		$error_kwn="Opsi Kewarganegaraan Harus Diisi";
	}
	else{
		$kwn=cek_input($_POST["kwn"]);
	}	

	// INPUT Nama Negara
		if(empty($_POST["nama_negara"])){
			//  deklarasi variabel berisi pesan error saat form input nama negara tidak diisi
			$error_nama_negara="Nama Negara Harus Diisi";
		}
		else{
			$nama_negara=cek_input($_POST["nama_negara"]);
			// pengecekan inputan nama negara hanya boleh berupa huruf dan spasi saja
			if(!preg_match("/^[a-zA-z ]*$/", $nama_negara)){
				//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
				$error_nama_negara="Inputan Hanya Boleh Huruf dan Spasi";
			}
		}

	

	//kondisi bila tidak ada error
	if ($error_jenis_pendaftaran =="" && $error_tanggal_masuk_sekolah=="" && $error_nis =="" && $error_nomor_peserta_ujian=="" && $error_paud=="" && $error_tk=="" && $error_nomor_seri_skhun=="" && $error_nomor_seri_ijazah=="" && $error_hobi=="" && $error_cita_cita=="" && $error_nama_lengkap=="" && $error_jenis_kelamin=="" && $error_nisn=="" && $error_nik=="" && $error_tempat_lahir=="" && $error_tanggal_lahir=="" && $error_agama=="" && $error_berkebutuhan_khusus=="" && $error_alamat_jalan=="" && $error_rt=="" && $error_rw=="" && $error_dusun=="" && $error_kelurahan=="" && $error_kecamatan=="" && $error_kode_pos=="" && $error_tempat_tinggal=="" && $error_transportasi=="" && $error_hp=="" && $error_telp=="" && $error_email==""  && $error_terima_kps=="" && $error_kps=="" && $error_kwn=="" && $error_nama_negara=="") {
	
        include 'koneksi.php';
      
        //Memasukkan data ke tabel pdidik
        $query="INSERT INTO pdidik VALUES ('$jenis_pendaftaran', '$tanggal_masuk_sekolah', '$nis', '$nomor_peserta_ujian', '$paud', '$tk', '$nomor_seri_skhun', '$nomor_seri_ijazah', '$hobi', '$cita_cita', '$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$hp', '$telp', '$email', '$terima_kps', '$kps', '$kwn', '$nama_negara')";
        mysqli_query($koneksi, $query);
      
        $sukses_input="Data Berhasil Disimpan";
      }
      else{
        $sukses_input="Mohon Maaf, Data Belum Tersimpan, Ulangi Lagi Ya";
      }
}
	
function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<!-- BAGIAN REGISTRASI PESERTA DIDIK -->
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header"> REGISTRASI PESERTA DIDIK </div>
    <!-- Mengarahkan action ke halaman itu sendiri -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="jenis_pendaftaran" class="col-sm-20 col-form-label">Jenis Pendaftaran
                        <br>01=Siswa Baru, 02=Pindahan
						<br> Diisi Angka Saja ! </label>
						<div class="col-sm-10">
							<input type="text" name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is_invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="Jenis Pendaftaran" value="<?php echo $jenis_pendaftaran; ?>"><span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_masuk_sekolah" class="col-sm-20 col-form-label">Tanggal Masuk Sekolah
                        <br> Contoh: 01-01-2005</label>
						<div class="col-sm-10">
							<input type="text" name="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah !="" ? "is_invalid" : ""); ?>" id="tanggal_masuk_sekolah" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk_sekolah; ?>"><span class="warning"><?php echo $error_tanggal_masuk_sekolah; ?></span>
						</div>
					</div>										

					<div class="form-group row">
						<label for="nis" class="col-sm-20 col-form-label">NIS
						<br> Masukkan 10 Digit Angka!</label>
						<div class="col-sm-10">
							<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is_invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_peserta_ujian" class="col-sm-20 col-form-label">Nomor Peserta Ujian</label>
						<div class="col-sm-10">
							<input type="text" name="nomor_peserta_ujian" class="form-control <?php echo ($error_nomor_peserta_ujian !="" ? "is_invalid" : ""); ?>" id="nomor_peserta_ujian" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_peserta_ujian; ?>"><span class="warning"><?php echo $error_nomor_peserta_ujian; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="pernah_paud" class="col-sm-20 col-form-label">Apakah Pernah PAUD?</label>
						<div class="col-sm-10">
							<input type="radio" name="paud" value="Ya">Ya
							<input type="radio" name="paud" value="Tidak">Tidak
							<span class="warning"><?php echo $error_paud; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="pernah_tk" class="col-sm-20 col-form-label">Apakah Pernah TK?</label>
						<div class="col-sm-10">
							<input type="radio" name="tk" value="Ya">Ya
							<input type="radio" name="tk" value="Tidak">Tidak
							<span class="warning"><?php echo $error_tk; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="skhun" class="col-sm-20 col-form-label">No. Seri SKHUN Sebelumnya
						<br> Keterangan : (Diisi bagi PD Jenjang SMP ) 
    					<br> Masukkan 16 Digit Angka! </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_seri_skhun" class="form-control <?php echo ($nomor_seri_skhun !="" ? "is_invalid" : ""); ?>" id="snomor_seri_khun" placeholder="No. Seri SKHUN Sebelumnya" value="<?php echo $nomor_seri_skhun; ?>"><span class="warning"><?php echo $error_nomor_seri_skhun; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_seri_ijazah" class="col-sm-20 col-form-label">No. Seri Ijazah Sebelumnya
						<br> Keterangan : (Diisi bagi PD Jenjang SMP ) 
    					<br> Masukkan 16 Digit Angka! </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_seri_ijazah" class="form-control <?php echo ($nomor_seri_ijazah !="" ? "is_invalid" : ""); ?>" id="nomor_seri_ijazah" placeholder="No. Seri Ijazah Sebelumnya" value="<?php echo $nomor_seri_ijazah; ?>"><span class="warning"><?php echo $error_nomor_seri_ijazah; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="hobi" class="col-sm-20 col-form-label">Hobi
                        <br> Keterangan : A=Olah Raga, B=Kesenian, C=Membaca, D=Menulis, E=Travelling, F=Lainnya
                        <br> Diisi Huruf A,B,C,D,E,F Saja</label>
						<div class="col-sm-10">
							<input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is_invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>"> <span class="warning"><?php echo $error_hobi; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="cita_cita" class="col-sm-20 col-form-label">Cita-cita
                        <br> Keterangan : A=PNS, B=TNI/POLRI, C=Guru/Dosen, D=Dokter, E=Politikus, F=Wiraswasta, G=Seni/Lukis/Artis/Sejenis, H=Lainnya
                        <br> Diisi Hurf A,B,C,D,E,F,G,H Saja</label>
						<div class="col-sm-10">
							<input type="text" name="cita_cita" class="form-control <?php echo ($error_cita_cita !="" ? "is_invalid" : ""); ?>" id="cita_cita" placeholder="Cita-cita" value="<?php echo $cita_cita; ?>"><span class="warning"><?php echo $error_cita_cita; ?></span>
						</div>
					</div>
</div>
</div>
</div>
</div>

<!-- BAGIAN DATA PRIBADI -->
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header"> DATA PRIBADI </div>

  <div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

					<div class="form-group row">
						<label for="nama" class="col-sm-20 col-form-label">Nama Lengkap</label>
						<div class="col-sm-10">
							<input type="text" name="nama_lengkap" class="form-control <?php echo ($error_nama_lengkap !="" ? "is_invalid" : ""); ?>" id="nama_lengkap" placeholder="Nama" value="<?php echo $nama_lengkap; ?>"><span class="warning"><?php echo $error_nama_lengkap; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-20 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
							<span class="warning"><?php echo $error_jenis_kelamin; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nisn" class="col-sm-20 col-form-label">NISN
						<br> Masukkan 10 Digit Angka! </label>
						<div class="col-sm-10">
							<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is_invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-20 col-form-label">NIK</label>
						<div class="col-sm-10">
							<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is_invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-20 col-form-label">Tempat Lahir</label>
						<div class="col-sm-10">
							<input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is_invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-20 col-form-label">Tanggal Lahir
                        <br> Contoh : 01-01-2005 </label>
						<div class="col-sm-10">
							<input type="text" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir !="" ? "is_invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>"><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="agama" class="col-sm-20 col-form-label">Agama
                        <br>Keterangan : 01=Islam, 02=Kristen/Protestan, 03=Katholik, 04=Hindu, 05=Buddha, 06=Khong Hu Chu, 99=Lainnya
                        <br> Diisi Angkanya Saja! </label>
						<div class="col-sm-10">
							<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is_invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="berkebutuhan_khusus" class="col-sm-20 col-form-label">Berkebutuhan Khusus
                        <br> Keterangan : 01=Tidak, 02=Netra (A), 03=Rungu (B), 04=Grahita Ringan (C), 05=Grahita Sedang (C1), 06=Daksa Ringan (D), 07=Daksa Ringan (D1), 08=Laras (E), 09=Wicara (F), 10=Tuna Ganda (G), 11=Hiper Aktif (H), 12=Cerdas Istimewa (i), 13=Bakat Istimewa (J), 14=Kesulitan Belajar (K), 15=Narkoba (N), 16=Indigo (O), 17=Down Sindrome (P), 18=Autis (Q)
                        <br> Diisi Angkanya Saja! </label>
						<div class="col-sm-10">
							<input type="text" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is_invalid" : ""); ?>" id="berkebutuhan_khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $berkebutuhan_khusus; ?>"><span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="alamat_jalan" class="col-sm-20 col-form-label">Alamat Jalan</label>
						<div class="col-sm-910">
							<input type="text" name="alamat_jalan" class="form-control <?php echo ($error_alamat_jalan !="" ? "is_invalid" : ""); ?>" id="alamat_jalan" placeholder="Alamat Jalan" value="<?php echo $alamat_jalan; ?>"><span class="warning"><?php echo $error_alamat_jalan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rt" class="col-sm-20 col-form-label">RT</label>
						<div class="col-sm-10">
							<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is_invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rw" class="col-sm-20 col-form-label">RW</label>
						<div class="col-sm-10">
							<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is_invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="dusun" class="col-sm-20 col-form-label">Dusun</label>
						<div class="col-sm-10">
							<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is_invalid" : ""); ?>" id="dusun" placeholder="Kelurahan/Desa" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
						</div>
					</div>

                    <div class="form-group row">
						<label for="kelurahan" class="col-sm-20 col-form-label">Kelurahan/Desa</label>
						<div class="col-sm-10">
							<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is_invalid" : ""); ?>" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kecamatan" class="col-sm-20 col-form-label">Kecamatan</label>
						<div class="col-sm-10">
							<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is_invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kode_pos" class="col-sm-20 col-form-label">Kode Pos</label>
						<div class="col-sm-10">
							<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is_invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_tinggal" class="col-sm-20 col-form-label">Tempat Tinggal
                        <br> Keterangan : 1=Bersama Orang Tua, 2=Wali, 3=Kos, 4=Asrama, 5=Panti Asuhan, 9=Lainnya
                        <br> Diisi Angkanya Saja! </label>
						<div class="col-sm-10">
							<input type="text" name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal !="" ? "is_invalid" : ""); ?>" id="tempat_tinggal" placeholder="Tempat Tinggal" value="<?php echo $tempat_tinggal; ?>"><span class="warning"><?php echo $error_tempat_tinggal; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="transportasi" class="col-sm-20 col-form-label">Transportasi
                        <br>Keterangan : 01=Jalan Kaki, 02=Kendaraan Pribadi, 03=Kendaraan Umum/Angkot/Pete-pete, 04=Jemputan Sekolah, 05=Kereta Api, 06=Ojek, 07=Andong/Bendi/Sado/Dokar/Delman/Becak, 08=Perahu Penyeberangan/Rakit/Getek, 99=Lainnya
                        <br> Diisi Angkanya Saja! </label>
						<div class="col-sm-10">
							<input type="text" name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is_invalid" : ""); ?>" id="transportasi" placeholder="Transportasi" value="<?php echo $transportasi; ?>"><span class="warning"><?php echo $error_transportasi; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="hp" class="col-sm-20 col-form-label">No. HP</label>
						<div class="col-sm-10">
							<input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is_invalid" : ""); ?>" id="hp" placeholder="No. HP" value="<?php echo $hp; ?>"><span class="warning"><?php echo $error_hp; ?></span>
						</div>
					</div>

                    <div class="form-group row">
						<label for="telp" class="col-sm-20 col-form-label">No. Telepon</label>
						<div class="col-sm-10">
							<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is_invalid" : ""); ?>" id="telp" placeholder="No. Telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-sm-20 col-form-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is_invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="terima_kps" class="col-sm-20 col-form-label">Penerima KPS/PKH/KIP</label>
						<div class="col-sm-10">
							<input type="radio" name="terima_kps" value="Ya">Ya
							<input type="radio" name="terima_kps" value="Tidak">Tidak
							<span class="warning"><?php echo $error_terima_kps; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kps" class="col-sm-20 col-form-label">Nomor KPS/KKS/PKH/KIP
						<br> Bila Tidak Menerima Isikan 0 Saja </label>
						<div class="col-sm-10">
							<input type="text" name="kps" class="form-control <?php echo ($error_kps !="" ? "is_invalid" : ""); ?>" id="kps" placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $kps; ?>"><span class="warning"><?php echo $error_kps; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kwn" class="col-sm-20 col-form-label">Kewarganegaraan</label>
						<div class="col-sm-10">
							<input type="radio" name="kwn" value="WNI">WNI
							<input type="radio" name="kwn" value="WNA">WNA
							<span class="warning"><?php echo $error_kwn; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_negara" class="col-sm-20 col-form-label">Nama Negara</label>
						<div class="col-sm-10">
							<input type="text" name="nama_negara" class="form-control <?php echo ($error_nama_negara !="" ? "is_invalid" : ""); ?>" id="nama_negara" placeholder="Nama Negara" value="<?php echo $nama_negara; ?>"><span class="warning"><?php echo $error_nama_negara; ?></span>
						</div>
					</div> 
					<br>
                    <div class="form-group row">
                    	<div class="col-sm-10">
                   		 <!-- tombol daftar untuk submit data -->
                   		<button type="submit" class="btn btn-primary"> DAFTAR </button>
                    	</div>
                    </div>
                    </form>
</div>
</div>
</div>
</div>					
<!-- menampilkan teks dari hasil form yang diinputkan -->
<?php
echo "<h2>Data Pendaftaran:</h2>";
echo "Jenis Pendaftaran = ".$jenis_pendaftaran;
echo "<br>";
echo "Tanggal Masuk Sekolah = ".$tanggal_masuk_sekolah;
echo "<br>";
echo "NIS = ".$nis;
echo "<br>";
echo "Nomor Peserta Ujian = ".$nomor_peserta_ujian;
echo "<br>";
echo "PAUD = ".$paud;
echo "<br>";
echo "TK = ".$tk;
echo "<br>";
echo "Nomor Seri SKHUN = ".$nomor_seri_skhun;
echo "<br>";
echo "Nomor Seri Ijazah = ".$nomor_seri_ijazah;
echo "<br>";
echo "Hobi = ".$hobi;
echo "<br>";
echo "Cita - Cita = ".$cita_cita;
echo "<br>";
echo "Nama Lengkap = ".$nama_lengkap;
echo "<br>";
echo "Jenis Kelamin = ".$jenis_kelamin;
echo "<br>";
echo " NISN = ".$nisn;
echo "<br>";
echo " NIK = ".$nik;
echo "<br>";
echo " Tempat Lahir = ".$tempat_lahir;
echo "<br>";
echo "Tanggal Lahir = ".$tanggal_lahir;
echo "<br>";
echo "Agama = ".$agama;
echo "<br>";
echo "Berkebutuhan Khusus = ".$berkebutuhan_khusus;
echo "<br>";
echo "Alamat Jalan = ".$alamat_jalan;
echo "<br>";
echo "RT = ".$rt;
echo "<br>";
echo "RW = ".$rw;
echo "<br>";
echo "Dusun = ".$dusun;
echo "<br>";
echo "Kelurahan = ".$kelurahan;
echo "<br>";
echo "Kecamatan = ".$kecamatan;
echo "<br>";
echo "Kode Pos = ".$kode_pos;
echo "<br>";
echo "Tempat Tinggal = ".$tempat_tinggal;
echo "<br>";
echo "Transportasi = ".$transportasi;
echo "<br>";
echo "Nomor HP = ".$hp;
echo "<br>";
echo "Nomor Telepon = ".$telp;
echo "<br>";
echo "Email = ".$email;
echo "<br>";
echo "Terima KPS = ".$terima_kps;
echo "<br>";
echo "Nomor KPS = ".$kps;
echo "<br>";
echo "Kewarganegaraan = ".$kwn;
echo "<br>";
echo "Nama Negara = ".$nama_negara;
echo "<br>";

echo $sukses_input;
?>
<br>
<form method="POST" action="reportexcelpesertadidik.php">
	<div class="form-group row">
        <div class="col-sm-10">
        <!-- tombol untuk membuat laporan excel -->
         <button type="submit" class="btn btn-primary"> BUAT LAPORAN EXCEL</button>
        </div>
    </div>
</form>

<br>
<form method="POST" action="reportpdfpesertadidik.php">
	<div class="form-group row">
        <div class="col-sm-10">
        <!-- tombol untuk membuat laporan pdf -->
         <button type="submit" class="btn btn-primary"> BUAT LAPORAN PDF</button>
        </div>
    </div>
</form>

</body>
</html>