<?php

include 'koneksi.php';

$id=$_POST['id'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi, "UPDATE tb_siswa SET 
	nis='$nis',
	nama='$nama',
	kelas='$kelas',
	alamat='$alamat'
	WHERE id_siswa='$id'");

if ($query) {
	?>
	<script>
		alert('Data berhasil diupdate');
		document.location.href='siswa.php';
	</script>
	<?php
}else{
	?>
	<script>
		alert('Ada kesalahan saat update ke database');
		document.location.href='siswa.php';
	</script>
	<?php
}

?>