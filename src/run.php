<?php

require __DIR__ . '/../vendor/autoload.php';


$dataDir = getenv('KBC_DATADIR') === false ? '/data/' : getenv('KBC_DATADIR');

try {
    exit(0);
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}
