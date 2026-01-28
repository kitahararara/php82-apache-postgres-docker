<?php
declare(strict_types=1);

$dsn = 'pgsql:host=db;port=5432;dbname=appdb';
$user = 'appuser';
$pass = 'apppass';

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "OK: Connected to PostgreSQL\n";
} catch (Throwable $e) {
    echo "NG: " . $e->getMessage() . "\n";
}

phpinfo();
