<?php 

class kucing {
	public $berat;
	
	public function set_berat ($berat){
    $this->berat = $berat;
}
	public function get_berat (){	
	return $this->berat;
	} 
}

$kucingku = new kucing ;
$kucingku->set_berat(2);
 echo "berat kucing saya : " .$kucingku->get_berat(). "kg";