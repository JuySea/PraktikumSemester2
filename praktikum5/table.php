<style>
        table, th, td {
            border-collapse: collapse;
            border: solid 1px black
        }

</style>




        
<?php 
require_once 'class_account.php';

class AccountBank extends Account {
    public $customer; 
    public $admin_fee = 2500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($tujuan,$uang){
        $tujuan->deposit($uang);
        $this->withdraw($uang);
        $this->withdraw($this->admin_fee);

    }


}

$nasabah1 = new AccountBank("C001",6000000, "Ahmad");
$nasabah2 = new AccountBank("C002",5350000, "Budi");
$nasabah3 = new AccountBank("C003",2500000, "Kurniawan");
$nasabah1->cetak();
$nasabah2->cetak();
$nasabah1->transfer($nasabah2,20000);
?>

