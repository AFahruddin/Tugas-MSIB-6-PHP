<?php 
include_once 'atas.php';

// Data produk film beserta harga
$produk_film = array(
    "Avatar" => 10000,
    "Inception" => 12000,
    "The Dark Knight" => 15000
);

// Fungsi untuk menghitung total harga berdasarkan pilihan film
function hitungTotalHarga($pilihan_film) {
    global $produk_film;
    $total_harga = 0;
    foreach ($pilihan_film as $film => $jumlah) {
        $total_harga += $produk_film[$film] * $jumlah;
    }
    return $total_harga;
}

// Inisialisasi variabel pilihan film
$pilihan_film = array();

// Proses form jika tombol beli ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['beli']) && isset($_POST['film']) && !empty($_POST['film'])) {
        $pilihan_film = $_POST['film'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pemesanan Film & Series</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    ul {
      list-style-type: none;
      padding-left: 0;
    }

    li {
      margin-bottom: 20px;
      overflow: auto;
    }

    img {
      float: left;
      margin-right: 10px;
      width: 150px;
      height: auto;
    }
  </style>
</head>
<body>

<h1>Pemesanan Film & Series</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label for="film">Pilih Judul Film:</label>
    <select class="form-control" name="film" id="film">
      <option selected disabled>-- Pilih Judul Film --</option>
      <?php foreach ($produk_film as $judul => $harga) { ?>
        <option value="<?php echo $judul; ?>"><?php echo $judul; ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah Film:</label>
    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
  </div>
  <br>
  <input type="submit" name="beli" value="Beli" class="btn btn-primary">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['beli']) && isset($_POST['film']) && !empty($_POST['film'])) {
        $judul_film = $_POST['film'];
        $jumlah_film = $_POST['jumlah'];
        echo "<h2>Total Harga untuk $jumlah_film film $judul_film: Rp " . number_format($produk_film[$judul_film] * $jumlah_film, 0, ',', '.') . "</h2>";
    }
}
?>

</body>
</html>

<?php 
include_once 'bawah.php';
?>
