<?php
/**
 * Local smoke check for PHP 8.2 + the mongodb extension.
 * Run from a terminal (does not start the Kohana website):
 *
 *   php php_local_check.php
 *
 * Optional:
 *   MONGODB_URI=mongodb://127.0.0.1:27017 MONGODB_DATABASE=Gradnlimotest php php_local_check.php
 */
header('Content-Type: text/plain; charset=utf-8');

function line($message)
{
    echo $message . PHP_EOL;
}

line('PHP version: ' . PHP_VERSION);
if (version_compare(PHP_VERSION, '8.2.0', '<')) {
    line('Need PHP 8.2 or newer.');
    exit(1);
}
line('PHP version OK.');

if (extension_loaded('mongo')) {
    line('Old PECL mongo extension is still loaded. Uninstall it and use mongodb instead.');
}

if (!extension_loaded('mongodb')) {
    line('mongodb extension: NOT loaded.');
    line('Install it, then run this file again. Example on Ubuntu:');
    line('  sudo apt install php8.2-mongodb');
    line('  sudo phpenmod mongodb');
    exit(1);
}
line('mongodb extension: loaded.');

$uri = getenv('MONGODB_URI') ?: 'mongodb://127.0.0.1:27017';
$dbName = getenv('MONGODB_DATABASE') ?: 'GrandLimoDemo';
line('Trying Mongo: ' . $uri . ' (db: ' . $dbName . ')');

try {
    $manager = new MongoDB\Driver\Manager($uri, [
        'serverSelectionTimeoutMS' => 8000,
        'connectTimeoutMS' => 8000,
    ]);
    $manager->executeCommand($dbName, new MongoDB\Driver\Command(['ping' => 1]));
    line('Mongo connected successfully.');
} catch (Exception $e) {
    line('Unable to connect to Mongo. ' . $e->getMessage());
    line('If Node uses another host/port, run with the same URL, for example:');
    line('  MONGODB_URI="mongodb://127.0.0.1:27017" php php_local_check.php');
    exit(1);
}

line('PHP local check OK.');
exit(0);
