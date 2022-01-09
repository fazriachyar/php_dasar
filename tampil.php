<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Semester</th>
            <th>Jurusan</th>
            <th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($db,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?>
                <td><?php echo $d['semester']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
					<a href="hapus.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <a href="index.php">back</a>
</body>
</html>