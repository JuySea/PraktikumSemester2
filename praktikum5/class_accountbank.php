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

    function __construct($angka,$nomor,$saldo,$customer){
        $this->angka = $angka;
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($tujuan,$uang){
        $tujuan->deposit($uang);
        $this->withdraw($uang);
        $this->withdraw($this->admin_fee);

    }

    public function struk(){
        $format = number_format($this->saldo);
        echo "
          <tr>
            <td>{$this->angka}</td>
            <td>{$this->nomor}</td>
            <td>{$this->customer}</td>
            <td>{$format}</td>
          </tr>
        ";
    }

}

$nasabah1 = new AccountBank(1,"C001",6000000, "Ahmad");
$nasabah2 = new AccountBank(2,"C002",5350000, "Budi");
$nasabah3 = new AccountBank(3,"C003",2500000, "Kurniawan");


?>


<table>
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nasabah1->struk();
        $nasabah2->struk();
        $nasabah3->struk();

        $nasabah1->deposit(1000000);
        $nasabah1->transfer($nasabah3, 1500000);
        $nasabah1->transfer($nasabah2, 500000);
        $nasabah2->withdraw(2500000);
        echo "<tr><td><hr></td></tr>";
        $nasabah1->struk();
        $nasabah2->struk();
        $nasabah3->struk();

        ?>
    </tbody>
</table>

<?php 

echo "<br>";

?>

