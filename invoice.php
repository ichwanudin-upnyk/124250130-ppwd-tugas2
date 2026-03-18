<?php
    $price=[
    	"Mencuri Raden Saleh"=>55000,
    	"13 Bom di Jakarta"=>50000,
    	"Jatuh Cinta Seperti di Film-Film"=>40000,
    	"Pengepungan di Bukin Duri"=>45000,
    	"Nanti Kita Cerita Tentang Hari Ini"=>40000
    ];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>invoice</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		body{
			display: flex;  
	  		justify-content: center;  
	  		align-items: center;
            background-color: var(--secondary-color);
		}
	</style>
</head>
<body>
    <div class="form-container">
        <div class="title">
            <h1>Invoice Pemesanan Tiket</h1>
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
					<td>Total Bayar</td>
					<td>   :   </td>
					<td><?php 
				        	$judul = $_POST['film'];
            				$banyak = $_POST['jumlah'];
            				$harga = $price[$judul] * $banyak;
            echo "Rp " . $harga;?>
					</td>
				</tr>
			</table>
		<a href="form_pesan.php">
			<button class="btn-submit">Pesan Lagi</button>
			</a>
    </div>
</body>
</html>