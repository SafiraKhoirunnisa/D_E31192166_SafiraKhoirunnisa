<?php
class Buku {
	var $judul_buku;
	var $pengarang;
	var $penerbit;
	var $tahun_terbit;
	var $cetakan;
}

$tangan_kelima = new Buku ();
$tangan_kelima -> judul_buku = "Tangan Kelima";
$tangan_kelima -> pengarang = "Christian Armanto";
$tangan_kelima -> penerbit = "visimedia";
$tangan_kelima -> tahun_terbit = "2013";
$tangan_kelima -> cetakan = "pertama";

echo $tangan_kelima -> judul_buku;
echo "<br />";
echo $tangan_kelima -> pengarang;
echo "<br />";
echo $tangan_kelima -> penerbit;
echo "<br />";
echo $tangan_kelima -> tahun_terbit;
echo "<br />";
echo $tangan_kelima -> cetakan;
echo "<hr />";
?>