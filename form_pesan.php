<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Ticket</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="pesan-container">
        <h2>Form Pemesanan</h2>
        <form action="berhasil.php" method="POST">
            <div class="row">
                <div class="input-group">
                      <label for="name">Nama :</label>
                      <input type="text" name="name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
            </div>
            <div class="pilih">
                <p>Film yang ingin dipesan :</p>
                <label for="film"><input type="radio" name="film" value="Mencuri Raden Saleh"> Mencuri Raden Saleh</label>
                <label for="film"><input type="radio" name="film" value="13 Bom di Jakarta"> 13 Bom di Jakarta</label>
                <label for="film"><input type="radio" name="film" value="Jatuh Cinta Seperti di Film-Film"> Jatuh Cinta Seperti di Film-Film</label>
                <label for="film"><input type="radio" name="film" value="Pengepungan di Bukin Duri"> Pengepungan di Bukin Duri</label>
                <label for="film"><input type="radio" name="film" value="Nanti Kita Cerita Tentang Hari Ini"> Nanti Kita Cerita Tentang Hari Ini</label>
            </div>
            <div class="row">
                <div class="input-group">
                      <label for="jumlah">Jumlah tiket :</label>
                      <input type="number" value="1" name="jumlah" id="jumlah">
                </div>
                <div class="input-group">
                    <label for="kursi">Pilih kursi:</label>
                    <input type="text" name="kursi" id="kursi" required>
                </div>
            </div>
            <div class="pilih">
                <p>Metode pembayaran :</p>
                <div class="row-radio">
                    <label><input type="radio" name="pembayaran" value="Cash"> Cash</label>
                    <label><input type="radio" name="pembayaran" value="Qris"> QRIS</label>
                </div>
            </div>
            <div class="tombol-pesan">
                <button type="submit" class="btn-pesan">Pesan</button>
                <button type="reset" class="btn-pesan">Muat Ulang</button>
            </div>
        </form>
    </div>
</body>