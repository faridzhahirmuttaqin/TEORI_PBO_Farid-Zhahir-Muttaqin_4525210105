<?php
declare(strict_types=1);

require_once __DIR__ . '/iPhone.php';

$iphone13 = new IPhone('Red', '128GB');
$iphone14 = new IPhone('Grey', '256GB');

echo "Spesifikasi iPhone 13\n";
echo 'Warna: ' . $iphone13->getColor() . "\n";
echo 'Storage: ' . $iphone13->getStorage() . "\n";
echo "Spesifikasi iPhone 14\n";
echo 'Warna: ' . $iphone14->getColor() . "\n";
echo 'Storage: ' . $iphone14->getStorage() . "\n";
