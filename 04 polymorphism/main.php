<?php
declare(strict_types=1);

require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/FeaturePhone.php';

$daftarHandphone = [
    new Smartphone('Samsung', 'Galaxy S21'),
    new FeaturePhone('Nokia', '3310'),
];

foreach ($daftarHandphone as $handphone) {
    $handphone->nyalakan();
    $handphone->telepon('08123456789');
    $handphone->matikan();
    echo "\n";
}

foreach ($daftarHandphone as $handphone) {
    if ($handphone instanceof Smartphone) {
        $handphone->aksesInternet();
    } elseif ($handphone instanceof FeaturePhone) {
        $handphone->mainGameSnake();
    }
}
