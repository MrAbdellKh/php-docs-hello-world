<?php
// Configuration Firebase
$firebaseConfig = [
    'apiKey' => "AIzaSyBcWXSD4pQGBBfl8uhgX91AcigbWftUngI",
    'authDomain' => "takeit-bd7e5.firebaseapp.com",
    'projectId' => "takeit-bd7e5",
    'storageBucket' => "takeit-bd7e5.firebasestorage.app",
    'messagingSenderId' => "421743456974",
    'appId' => "1:421743456974:web:55e69c31fb90f90a85d69f",
    'measurementId' => "G-S17JXJFD9T"
];

// Initialisation de Firebase
require_once __DIR__ . '/../vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__ . '/firebase-credentials.json')
    ->withDatabaseUri('https://takeit-bd7e5.firebaseio.com');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
?> 