<?php 
class Mahasiswa {
    public $nama;
    public $nim;
    public $ipk;

    function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    function predikat_ipk() {
        if ($this->ipk < 2) return "Cukup";
        elseif ($this->ipk >= 2 && $this->ipk < 3) return "Baik";
        elseif ($this->ipk >= 3 && $this->ipk < 3.75) return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4) return "Cum Laude";
    }
}
?>

<?php 



?>