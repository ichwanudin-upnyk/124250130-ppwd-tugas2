<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou</title>

    <link rel="stylesheet" href="style.css">

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--inner-color);
        }
    </style>
</head>
<body>
    <div class="info">
        <h1>Pemesanan tiket berhasil!</h1>
        <p>Tiket selanjutnya akan dikirimkan melalui email <br>Cek email secara berkala!</p>

        <form action="invoice.php" method="POST">
            <input type="hidden" name="name" value="<?= $_POST['name']?>">
            <input type="hidden" name="email" value="<?= $_POST['email']?>">
            <input type="hidden" name="film" value="<?= $_POST['film']?>">
            <input type="hidden" name="jumlah" value="<?= $_POST['jumlah']?>">
            <input type="hidden" name="kursi" value="<?= $_POST['kursi']?>">
            <input type="hidden" name="pembayaran" value="<?= $_POST['pembayaran']?>">
            <button type="submit" class="btn-submit" name="success">Invoice</button>
        </form>
    </div>

</body>