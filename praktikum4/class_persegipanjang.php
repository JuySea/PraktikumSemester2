<?php 
class Persegipanjang {
    public $panjang;
    public $lebar; 

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function getLuas() {
        return $this->panjang * $this->lebar;
    }

    function getKel() {
        return 2 * ($this->lebar + $this->panjang);
    }
} 
?>