<?php 

class BMI {
    public $berat;
    public $tinggi;

    function __construct($tinggi, $berat) {
        $this->tinggi = $tinggi;
        $this->berat = $berat;

    }

    function nilaiBMI(){
        $this->bmi = $this->berat / (($this->tinggi / 100 ) * ($this->tinggi / 100 ));
        return $this->bmi;
    }

    function statusBMI(){
        if ($this->bmi < 18.5) {
            return "Kekurangan berat badan";
        } else if ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            return "Normal (Ideal)";
        } else if ($this->bmi > 24.9 && $this->bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else if ($this->bmi > 29.9) {
            return "Kegemukan (Obesitas)";
        }
    }

}
?>