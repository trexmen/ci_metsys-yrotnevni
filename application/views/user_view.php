<!DOCTYPE html>
<html>
<head>
	<title>Tarkiman - CI</title>
</head>
<body>
	<h1>Tabel User</h1>
	<table border='1'>
		<tr>
			<td>Username</td>
			<td>Password</td>
			<td>Nama Lengkap</td>
			<td>Email</td>
			<td>No. Telp</td>
			<td>Foto</td>
			<td>Level</td>
			<td>Status</td>
			<td>ID Session</td>
		</tr>
		<?php
			foreach ($user_data as $value) { //user_data load dari USER CONTROLLER
				echo "<tr>";
				echo"<td>$value->username</td>";
				echo"<td>$value->password</td>";
				echo"<td>$value->nama_lengkap</td>";
				echo"<td>$value->email</td>";
				echo"<td>$value->no_telp</td>";
				echo"<td>$value->foto</td>";
				echo"<td>$value->level</td>";
				echo"<td>$value->status</td>";
				echo"<td>$value->id_session</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>