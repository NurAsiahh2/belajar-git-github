<?php
// Fungsi untuk menghitung total harga tanpa diskon
function hitungTotal($hargaBarang, $jumlahItem) {
    return $hargaBarang * $jumlahItem;
}

// Fungsi untuk menghitung diskon
function hitungDiskon($total, $diskonPersen) {
    return $total - ($total * ($diskonPersen / 100));
}

// Fungsi untuk menghitung kembalian
function hitungKembalian($uangDiterima, $total) {
    return $uangDiterima - $total;
}

// Input data
$hargaBarang = 200000;  // Harga barang per item
$jumlahItem = 2;        // Jumlah item yang dibeli
$uangDiterima = 500000; // Jumlah uang yang diterima

// Hitung total harga tanpa diskon
$totalTanpaDiskon = hitungTotal($hargaBarang, $jumlahItem);

// Pilihan diskon (10%, 20%, 30%)
$diskon10 = hitungDiskon($totalTanpaDiskon, 10);
$diskon20 = hitungDiskon($totalTanpaDiskon, 20);
$diskon30 = hitungDiskon($totalTanpaDiskon, 30);

// Hitung kembalian
$kembalianTanpaDiskon = hitungKembalian($uangDiterima, $totalTanpaDiskon);
$kembalianDiskon10 = hitungKembalian($uangDiterima, $diskon10);
$kembalianDiskon20 = hitungKembalian($uangDiterima, $diskon20);
$kembalianDiskon30 = hitungKembalian($uangDiterima, $diskon30);

// Output hasil dengan format Rupiah
echo "Total tanpa diskon: Rp " . number_format($totalTanpaDiskon, 0, ',', '.') . "\n"; //100.000 (harga perbarang) x 3 (Jumlah Item) = 300.000 (Total tanpa diskon)
echo "Total setelah diskon 10%: Rp " . number_format($diskon10, 0, ',', '.') . "\n"; //300.000 x 10% = 30.000. 300.000 - 30.000 = 270.000
echo "Total setelah diskon 20%: Rp " . number_format($diskon20, 0, ',', '.') . "\n"; //300.000 x 20% = 60.000. 300.000 - 60.000 = 240.000
echo "Total setelah diskon 30%: Rp " . number_format($diskon30, 0, ',', '.') . "\n"; //300.000 x 30% = 90.000. 300.000 - 90.000 = 210.000

echo "Kembalian tanpa diskon: Rp " . number_format($kembalianTanpaDiskon, 0, ',', '.') . "\n";
echo "Kembalian setelah diskon 10%: Rp " . number_format($kembalianDiskon10, 0, ',', '.') . "\n";
echo "Kembalian setelah diskon 20%: Rp " . number_format($kembalianDiskon20, 0, ',', '.') . "\n";
echo "Kembalian setelah diskon 30%: Rp " . number_format($kembalianDiskon30, 0, ',', '.') . "\n";
?>
