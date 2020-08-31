<?php
class produk{
    public $nama,
           $model,
           $harga;

public function getcetak(){
    return "$this->nama,$this->model,$this->harga";
}
public function __construct($nama="nama",$model="model",$harga=0){
    $this->nama=$nama;
    $this->model=$model;
    $this->harga=$harga;
}
}

$produk1 = new produk("HP","IP X",10000000);
$produk2 = new produk("Powerbank","Anker",350000);
$produk3 = new produk("HP","Samsung S20",13000000);

echo "Nama barang : ". $produk1->getcetak();
echo "<br>";
echo "Nama barang : ". $produk2->getcetak();
echo"<br>";
echo "Nama barang : ". $produk3->getcetak();