<?php 
require_once "class_persegipanjang.php"
?>

<?php 
$rectangle1 = new Persegipanjang(2,4);
echo "Panjang\t: " . $rectangle1->panjang;
echo "<br>";
echo "Lebar\t: " . $rectangle1->lebar;  
echo "<br>";
echo "<br>";
echo "Luas\t: " . $rectangle1->getLuas();
echo "<br>";
echo "Keliling\t: " . $rectangle1->getkel();
?>