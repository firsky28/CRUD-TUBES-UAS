<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, tr, th{
			border: 1px solid black;
		}
	</style>
</head>
<body>
<h1>Data Siswa</h1>
<a href="tambah_view.php">Tambah Siswa</a>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Aksi</th>
        </tr>
	</thead>
	<tbody>
		<?php

$no=0;
$query=mysqli_query($koneksi,"SELECT * FROM tb_siswa");
while ($row=mysqli_fetch_assoc($query)) {
	$no++;
	$id=$row['id_siswa'];
	$nis=$row['nis'];
	$nama=$row['nama'];
	$kelas=$row['kelas'];
    $alamat=$row['alamat'];
?>
<tr>
	<th><?php echo $no ?></th>
	<th><?php echo $nis ?></th>	
	<th><?php echo $nama ?></th>
	<th><?php echo $kelas ?></th>	
	<th><?php echo $alamat ?></th>	
	<th>
		<a href="edit_view.php?id=<?php echo $id ?>">Edit</a> | <a href="hapus.php?id=<?php echo $id ?>">Hapus</a>
	</th>
</tr>
<?php
}

		?>
	</tbody>
</table>
</body>
</html>
