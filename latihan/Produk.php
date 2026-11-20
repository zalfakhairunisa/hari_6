<?php

declare(strict_types=1);

namespace latihan;

class Produk
{
  public function __construct(public string $nama,private int $harga) {}
        public function subtotal(int $jumlah): int 
        {
            if($jumlah < 1) throw new \InvalidArgumentException('jumlah minimal 1');
            return $this ->harga * $jumlah;
        }
}
$p = new Produk('kopi flores',15000);
echo $p->subtotal(2). PHP_EOL; //30000

//Tambahan Objek Roti
$roti = new produk('roti',80000);
echo $roti ->nama . "x 3 =" . $roti ->subtotal(3) . PHP_EOL;

//tambahan penanganan try/ catch
try {
    echo $roti ->subtotal(0) . PHP_EOL;
} catch (\InvalidArgumentException $e) { 
    echo "Eror:"  . $e ->getMessage() . PHP_EOL;
}
?>