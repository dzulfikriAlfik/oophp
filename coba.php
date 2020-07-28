<?php

class Produk
{
	public 	$judul = "judul",
		$penulis = "penulis",
		$penerbit = "penerbit",
		$harga = "0";

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit, $this->judul, $this->harga";
	}
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Alfik";
$produk3->penerbit = "Media";

echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Flying Dutchman";
$produk4->harga = "400000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
