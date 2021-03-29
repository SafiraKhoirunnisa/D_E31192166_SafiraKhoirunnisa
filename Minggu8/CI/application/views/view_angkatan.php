<!DOCTYPE html>
<html>
<head>
	<title>Latihan Minggu 8</title>
</head>
<body>
	<h1>Daftar Angkatan</h1>
	<table border="1">
		<?php foreach($angkatan as $row) {?>
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['angkatan']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>