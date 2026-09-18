<?php



require_once 'products.php';
require_once 'functions.php';


$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .summary { font-size: 18px; margin-bottom: 15px; }
    </style>
</head>
<body>

    <h2>Mini Project: Product Information System</h2>
    
    <div class="summary">
        <strong>Total Nilai Aset Gudang: </strong> 
        Rp <?= number_format($totalAset, 0, ',', '.') ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach ($products as $produk): ?>
                <tr style="<?= getBarisWarna($produk['stok']) ?>">
                    <td><?= $produk['id'] ?></td>
                    <td><?= $produk['nama'] ?></td>
                    <td><?= $produk['kategori'] ?></td>
                    <td>Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                    <td><?= $produk['stok'] ?></td>
                    <td><?= $produk['deskripsi'] ?></td>
                </tr>
                
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>