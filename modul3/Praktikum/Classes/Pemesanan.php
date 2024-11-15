<?php
namespace KafeApp\Classes;

use KafeApp\Traits\DiskonTrait;

class Pemesanan {
    use DiskonTrait;

    private $menu = [];
    private $totalHarga = 0;

    public function tambahMenu(Menu $item) {
        $this->menu[] = $item;
        $this->totalHarga += $item->getHarga();
    }

    public function hitungTotal() {
        $diskon = $this->hitungDiskon($this->totalHarga);
        return $this->totalHarga - $diskon;
    }

    public function hitungKembalian($jumlahBayar) {
        return $jumlahBayar - $this->hitungTotal();
    }

    public function tampilkanOrder() {
        foreach ($this->menu as $item) {
            echo $item->getInfo() . "<br>";
        }
        echo "Total setelah diskon: Rp" . $this->hitungTotal();
    }
}
