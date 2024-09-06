<?php
class Karyawan {
    public $namakaryawan;
    public $levelkaryawan;
    public $harikerjakaryawan;

    public function __construct($namakaryawan, $levelkaryawan, $harikerjakaryawan) {
        $this->namakaryawan = $namakaryawan;
        $this->levelkaryawan = $levelkaryawan;
        $this->harikerjakaryawan = $harikerjakaryawan;
    }

    public static function hitungGajiKaryawan($karyawan) {
        $gajiPerHariKaryawan = 100000;
        $bonus = 0;

        // Syarat bonus untuk level Senior dan Junior
        if ($karyawan->levelkaryawan == 'Senior') {
            if($karyawan->harikerjakaryawan <= 20){
                $bonus = $gajiPerHariKaryawan * 2;
            }
        } elseif ($karyawan->levelkaryawan == 'Junior') {
            if($karyawan->harikerjakaryawan <= 20){
                $bonus = $gajiPerHariKaryawan;
            }
        }

        $totalGajiKaryawan = ($karyawan->harikerjakaryawan * $gajiPerHariKaryawan) + $bonus;
        return $totalGajiKaryawan;
    }
}

// Data-data karyawan
$karyawanArray = [
    new Karyawan("Viola", "Junior", 15),
    new Karyawan("Shiro", "Junior", 12),
    new Karyawan("Hikaru", "Senior", 25),
    new Karyawan("Biu", "Senior", 20),
];

$i = 0;
$jumlahKaryawan = count($karyawanArray);

do {
    $karyawan = $karyawanArray[$i];
    $gaji = Karyawan::hitungGajiKaryawan($karyawan);
    echo "Gaji si {$karyawan->namakaryawan} dengan (level: {$karyawan->levelkaryawan} dan hari kerja {$karyawan->harikerjakaryawan}) adalah Rp. ".number_format($gaji, 0, ',', '.') ."\n";
    $i++;
} while ($i < $jumlahKaryawan);

?>
