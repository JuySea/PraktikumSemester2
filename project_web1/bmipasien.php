<?php 

class BMIPasien {
    public $id;
    public $pasien;
    public $bmi;

    function __construct($pasien, $bmi) {
        $this->pasien = $pasien;
        $this->bmi = $bmi;
    }
}

?>