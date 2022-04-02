<?php 
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($namaMinuman) {
        $this->namaMinuman = $namaMinuman;
    }

    public function isi($vol){
        $this->volumeGelas = $this->volumeGelas + $vol;
        if ($this->volumeGelas > 250) {return $this->volumeGelas = 250;}  
    }

    public function minum($vol) {
        $this->volumeGelas = $this->volumeGelas - $vol;
        if ($this->volumeGelas < 0) {return $this->volumeGelas = 0;}  
    }

    public function status() {
        
        echo "Nama Minuman: {$this->namaMinuman}";
        echo "<br>";
        echo "Volume Gelas: {$this->volumeGelas}";
    }
}



$budi = new Dispenser("SUSU");
$budi->isi(200);
$budi->minum(199);
$budi->status();




?>