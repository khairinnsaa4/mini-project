<?php


function hitungTotalNilaiStok($data_produk) {
    $total = 0;
    foreach ($data_produk as $item) {
        $total += ($item['harga'] * $item['stok']);
    }
    return $total;
}


function getBarisWarna($stok) {
    if ($stok < 3) {
        return 'background-color: #ffe6e6; color: #cc0000;'; // Memberi warna merah muda pada baris
    }
    return '';
}