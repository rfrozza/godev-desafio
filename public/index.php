<?php
session_start();
require '../vendor/autoload.php';
define("URL_BASE", "http://localhost:80");

$app = new \App\Core\App();
