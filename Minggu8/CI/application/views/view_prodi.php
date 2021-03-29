<!DOCTYPE html>
<html>
<head>
	<title>Latihan Minggu 8</title>
</head>
<body>
	<h1>Daftar Prodi Jurusan Teknologi Informasi</h1>
	<table border="1">
		<?php foreach($prodi as $row) {?>
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['prodi']; ?></td>
			<td><?php echo $row['keterangan']; ?></td>
		</tr>
		<?php } ?>			
	</table>
</body>
</html>