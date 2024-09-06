<?php
class PembelianBarangNia
{
    public $hargaBarang;
    public $jumlahItem;
    public $uangDiterima;
    public $diskon;

    public function __construct($hargaBarang, $jumlahItem, $uangDiterima, $diskon)
    {
        $this->hargaBarang = (float)$hargaBarang;
        $this->jumlahItem = (int)$jumlahItem;
        $this->uangDiterima = (float)$uangDiterima;
        $this->diskon = (float)$diskon;
    }

    public function hitungTotal()
    {
        return $this->hargaBarang * $this->jumlahItem;
    }

    public function hitungTotalSetelahDiskon()
    {
        $total = $this->hitungTotal();
        return $total - ($total * $this->diskon / 100);
    }

    public function hitungKembalian()
    {
        $totalSetelahDiskon = $this->hitungTotalSetelahDiskon();
        return $this->uangDiterima - $totalSetelahDiskon;
    }
}


$hargaBarang = 12000; 
$jumlahItem = 2; 
$uangDiterima = 20000; 
$diskon = 5; 

$pembelian = new PembelianBarangNia($hargaBarang, $jumlahItem, $uangDiterima, $diskon);

$totalTanpaDiskon = $pembelian->hitungTotal();
$totalSetelahDiskon = $pembelian->hitungTotalSetelahDiskon();
$kembalianSetelahDiskon = $pembelian->hitungKembalian();

echo "Total Tanpa Diskon: Rp" . number_format($totalTanpaDiskon, 2, ',', '.') . "\n";
echo "Total Setelah Diskon: Rp" . number_format($totalSetelahDiskon, 2, ',', '.') . "\n";
echo "Kembalian: Rp" . number_format($kembalianSetelahDiskon, 2, ',', '.') . "\n";
?>
