<?php
namespace KafeApp\Classes;

abstract class Item {
    protected $namaItem;
    protected $harga;

    public function __construct($namaItem, $harga) {
        $this->namaItem = $namaItem;
        $this->harga = $harga;
    }

    abstract public function getInfo();
    
    // Getter untuk harga
    public function getHarga() {
        return $this->harga;
    }
}
