<?php
require __DIR__ . '/vendor/autoload.php';

try {
    $reflector = new ReflectionClass('App\Entity\Tag');
    echo "FOUND: " . $reflector->getFileName() . "\n";
} catch (Exception $e) {
    echo "NOT FOUND: " . $e->getMessage() . "\n";
}
