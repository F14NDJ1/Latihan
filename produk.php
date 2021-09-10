<?php 


class Produk
{
	public $judul = 'judul'
	, $penulis = 'penulis'
	, $penerbit = 'penerbit'
	,$harga = 0;

	function __construct($judul,$penulis,$penerbit,$harga)
	{
	     	$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		echo "string<br>";

	}

	public function getLabel(){
		return "$this->penulis,$this->penerbit"	;
	}
}


$Produk1 = new Produk('Naruto','MasashiKisimoto','Bandai',30000);
$Produk2 = new Produk('Spiderman','StanLee','Marvel',50000);
var_dump($Produk1);
echo "<br>";
var_dump($Produk2);

// echo "Komik : $Produk1->penulis,$Produk1->penerbit" ;
// echo "<br>";

// echo $Produk1->getLabel();
// echo "<hr>";





echo "komik : " . $Produk1->getLabel();
echo "<br>";
echo "film : ". $Produk2->getLabel();
