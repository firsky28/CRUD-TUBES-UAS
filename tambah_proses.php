<?php

include 'koneksi.php';

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES(
    '',
    '$nis',
    '$nama',
    '$kelas',
    '$alamat',
    '')");

if ($query) {
	?>
	<script>
		alert('Data baru berhasil di simpan');
		document.location.href='siswa.php';
	</script>
	<?php
}else{
	?>
	<script>
		alert('Ada kesalahan saat insert ke database');
		document.location.href='siswa.php';
	</script>
	<?php
}

?>