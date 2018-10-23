<!DOCTYPE html>
<html>
<head>
	<title>Membuat Inputan dan Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat Inputan dan Menampilkanya di Database</h1>
		<h4>Adhiyaksa Satria Hutama</h4>

	</div>

	<br/>

	<a href="show.php">Look another Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="ragister.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname" placeholder="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>