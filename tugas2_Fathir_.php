<?php
class Karyawan {
    public $nama;
    public $level;
    public $gajiHarian;
    public $jumlahHariKerja;

    function __construct($nama, $level, $gajiHarian, $jumlahHariKerja) {
        $this->nama = $nama;
        $this->level = $level;
        $this->gajiHarian = $gajiHarian;
        $this->jumlahHariKerja = $jumlahHariKerja;
    }

    function jumlahtotal() {
        $bonus = 0;
        if ($this->jumlahHariKerja >= 17 && $this->jumlahHariKerja <= 20) {
            if ($this->level == 'senior') {
                $bonus =$this->jumlahHariKerja*$this->gajiHarian;
            } else if ($this->level == 'junior') {
                $bonus =$this->jumlahHariKerja* $this->gajiHarian;
            }
        }

        return $bonus;
    }

    function hitungTotalBayaran() {
        $gajiTotal = $this->jumlahHariKerja * $this->gajiHarian;
        $bonus = $this->jumlahtotal();
        return $gajiTotal + $bonus;
    }

    function tampilkanInfo() {
        $totalBayaran = $this->hitungTotalBayaran();
        echo "Karyawan {$this->level} bernama {$this->nama} masuk {$this->jumlahHariKerja} hari kerja bayarannya adalah Rp {$totalBayaran}\n";
    }
}

$karyawan1 = new Karyawan("Fuad", "senior", 200000, 18);
$karyawan1->tampilkanInfo();
$karyawan2 = new Karyawan("rusdi", "junior", 150000, 15);
$karyawan2->tampilkanInfo();
?>
