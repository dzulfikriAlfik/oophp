<?php

class Produk
{
	public	$judul,
		$penulis,
		$penerbit,
		$harga;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit, $this->judul, $this->harga";
	}
}

$produk1 = new Produk("Naruto", "Alfik", "Media", 30000);
$produk2 = new Produk("Ucnharted", "Siapa", "Media", 200000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
var_dump($produk3);
