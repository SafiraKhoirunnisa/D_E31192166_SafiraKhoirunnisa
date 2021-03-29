<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Miggu 8</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1">
		<?php foreach($Mahasiswa as $row) {?>
		<tr>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['prodi']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>