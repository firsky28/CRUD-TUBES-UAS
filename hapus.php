<?php

include 'koneksi.php';

$id=$_GET['id'];

$query=mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa='$id'");

if ($query) {
	?>
	<script>
		alert('Data  berhasil di hapus');
		document.location.href='siswa.php';
	</script>
	<?php
}else{
	?>
	<script>
		alert('Ada kesalahan saat hapus di database');
		document.location.href='siswa.php';
	</script>
	<?php
}

?>