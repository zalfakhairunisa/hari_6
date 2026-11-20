<?php
// Jalankan: php latihan/recap.php
// $keranjang=[['nama'=>'Kopi Flores','harga'=>15000,'jumlah'=>2],['nama'=>'Roti','harga'=>8000,'jumlah'=>1]];
// TODO: Buat function subtotal(int $harga,int $jumlah): int.
// TODO: Gunakan foreach untuk total belanja dan if untuk diskon 10% jika total >= 50000.
// Kasus awal: total 38000, diskon 0, bayar 38000.
// Ubah jumlah kopi menjadi 3: total 53000, diskon 5300, bayar 47700.

// Jalankan dari terminal: php recap.php (jika sudah di dalam folder latihan)
// atau php latihan/recap.php (jika dari folder utama workspace)

$keranjang = [
    ['nama' => 'Kopi Flores', 'harga' => 15000, 'jumlah' => 3],
    ['nama' => 'Roti', 'harga' => 8000, 'jumlah' => 1]
];

// 1. Membuat function subtotal sesuai instruksi
function subtotal(int $harga, int $jumlah): int {
    return $harga * $jumlah;
}

// 2. Menghitung total belanja menggunakan foreach
$total = 0;
foreach ($keranjang as $item) {
    $total += subtotal($item['harga'], $item['jumlah']);
}

// 3. Menggunakan if untuk diskon 10% jika total >= 50000
$diskon = 0;
if ($total >= 50000) {
    $diskon = (int) ($total * 0.10);
}

$bayar = $total - $diskon;

// Tampilkan hasil ke terminal (masing-masing di baris baru menggunakan PHP_EOL atau \n)
echo "Total Belanja : Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "Diskon (10%)  : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar   : Rp " . number_format($bayar, 0, ',', '.') . "<br>";
?>