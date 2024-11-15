<?php
require_once 'traits/DiskonTrait.php';
require_once 'classes/Item.php';
require_once 'classes/Menu.php';
require_once 'classes/Pemesanan.php';

use KafeApp\Classes\Menu;
use KafeApp\Classes\Pemesanan;

$menu1 = new Menu("Kwetiau Basah", 35000);
$menu2 = new Menu("Es Teh Tarik", 5000);

$pemesanan = new Pemesanan();
$pemesanan->tambahMenu($menu1);
$pemesanan->tambahMenu($menu2);

echo "<h3>Detail Order</h3>";
$pemesanan->tampilkanOrder();
echo "<br>Kembalian: Rp" . $pemesanan->hitungKembalian(50000);