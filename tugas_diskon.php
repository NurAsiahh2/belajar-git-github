<?php
class Pembelian {
    private $harga_barang;
    private $jumlah_item; 
    private $diskon;
    private $uang_diterima;

    public function __construct($harga_barang, $jumlah_item, $diskon, $uang_diterima) {
        $this->harga_barang = $harga_barang;
        $this->jumlah_item = $jumlah_item;
        $this->diskon = $diskon;
        $this->uang_diterima = $uang_diterima;
    }

    public function hitungTotalTanpaDiskon() {
        return $this->harga_barang * $this->jumlah_item;
    }
     
    public function hitungTotalSetelahDiskon() {
        $total = $this->hitungTotalTanpaDiskon();
        $totalSetelahDiskon = $total - ($total * $this->diskon / 100);
        return $totalSetelahDiskon;
    }

    public function hitungUangKembalianSetelahDiskon() {
        return $this->uang_diterima - $this->hitungTotalSetelahDiskon();
    }

    public function hitungUangKembalianTanpaDiskon() {
        return $this->uang_diterima - $this->hitungTotalTanpaDiskon();
    }

    public function tampilkanHasil() {
        echo "Harga Barang: Rp. " . number_format($this->harga_barang, 2) . "\n";
        echo "Jumlah Item: " . $this->jumlah_item . "\n";
        echo "Diskon: " . $this->diskon . "%\n";
        echo "Total Harga Tanpa Diskon: Rp. " . number_format($this->hitungTotalTanpaDiskon(), 2) . "\n";
        echo "Total Harga Setelah Diskon: Rp. " . number_format($this->hitungTotalSetelahDiskon(), 2) . "\n";
        echo "Jumlah Uang Diterima: Rp. " . number_format($this->uang_diterima, 2) . "\n";
        echo "Jumlah Uang Kembalian Setelah Potongan Diskon: Rp. " . number_format($this->hitungUangKembalianSetelahDiskon(), 2) . "\n";
        echo "Jumlah Uang Kembalian Tanpa Diskon: Rp. " . number_format($this->hitungUangKembalianTanpaDiskon(), 2) . "\n";
    }
}

// Contoh penggunaan class
$harga_barang = 145000;  
$jumlah_item = 3;         
$diskon = 20;             
$uang_diterima = 500000;  
$pembelian = new Pembelian($harga_barang, $jumlah_item, $diskon, $uang_diterima);
$pembelian->tampilkanHasil();
?>
