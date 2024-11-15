<?php
namespace KafeApp\Classes;

class Menu extends Item {
    public function getInfo() {
        return "{$this->namaItem} - Rp{$this->harga}";
    }
}
