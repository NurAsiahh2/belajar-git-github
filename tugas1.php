<?php
class PembelianBarang {
    public $hargaBarang;
    public $jumlahItem;
    public $diskon;
    public $uangDiterima;

    public function __construct($hargaBarang, $jumlahItem, $diskon, $uangDiterima) {
        $this->hargaBarang = $hargaBarang;
        $this->jumlahItem = $jumlahItem;
        $this->diskon = $diskon;
        $this->uangDiterima = $uangDiterima;
    }

    public function ttlHarga() {
        return $this->hargaBarang * $this->jumlahItem;
    }

    public function hargaStlhDiskon() {
        $total = $this->ttlHarga();
        $potongan = $total * ($this->diskon / 100);
        return $total - $potongan;
    }

    public function uangKembalianTanpaDiskon() {
        $total = $this->ttlHarga();
        return $this->uangDiterima - $total;
    }

    public function uangKembalianSetelahDiskon() {
        $hargaSetelahDiskon = $this->hargaStlhDiskon();
        return $this->uangDiterima - $hargaSetelahDiskon;
    }
}

$hargaBarang = 50000; 
$jumlahItem = 5; 
$diskon = 20; 
$uangDiterima = 300000; 


$pembelian = new PembelianBarang($hargaBarang, $jumlahItem, $diskon, $uangDiterima);


echo "Harga barang: Rp $hargaBarang\n";
echo "Jumlah item: $jumlahItem\n";
echo "Uang diterima: $uangDiterima\n";
echo "Total Harga Barang: Rp " . $pembelian->ttlHarga() . "\n";
echo "Harga Setelah Diskon ($diskon%): Rp " . $pembelian->hargaStlhDiskon() . "\n";
echo "Uang Kembalian Tanpa Diskon: Rp " . $pembelian->uangKembalianTanpaDiskon() . "\n";
echo "Uang Kembalian Setelah Diskon: Rp " . $pembelian->uangKembalianSetelahDiskon() . "\n";


?>
