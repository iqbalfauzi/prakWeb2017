<?php
class laptop{
	
	public function hidupkan_laptop($pemilik,$merk){
		return "Hidupkan Laptop $merk punya $pemilik";
	}

}
$laptop_anto =new laptop();
//set properti

//tampilkan method
echo $laptop_anto->hidupkan_laptop("Andi","Lenovo");
echo "<br/>";
?>