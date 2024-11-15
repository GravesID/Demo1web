<?php
namespace KafeApp\Traits;

trait DiskonTrait {
    public function hitungDiskon($total) {
        return $total * 0.1; // Diskon 10%
    }
}
