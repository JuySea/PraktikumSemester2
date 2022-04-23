<?php 

class Pasien {
    public $nama;
    public $tgl_periksa;
    public $kode;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;
    
    function __construct($tgl_periksa, $kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email){
        $this->tgl_periksa = $tgl_periksa;
        $this->nama = $nama;
        $this->kode = $kode;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->gender = $gender;
        $this->email = $email;
    }
}
?>
