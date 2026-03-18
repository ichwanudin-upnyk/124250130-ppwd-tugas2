<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>invoice</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="invoice-container">
		<div class="title">
		<h1>hai</h1>	
		</div>

	<table>
		<tr>
			<td>Nama</td>
			<td>   :   </td>
			<td><?= $_POST['name']?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>   :   </td>
			<td><?= $_POST['email']?></td>
		</tr>
		<tr>
			<td>Film</td>
			<td>   :   </td>
			<td><?= $_POST['film']?></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td>   :   </td>
			<td><?= $_POST['jumlah']?></td>
		</tr>
			<td>Kursi</td>
			<td>   :   </td>
			<td><?= $_POST['kursi']?></td>
		</tr>
		<tr>
			<td>Pembayaran</td>
			<td>   :   </td>
			<td><?= $_POST['pembayaran']?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>   :   </td>
			<td><?= $_POST['email']?></td>
		</tr>
	</table>

	<div>
		<button>Pesan Lagi</button>
	</div>
	</div>


</body>
</html>