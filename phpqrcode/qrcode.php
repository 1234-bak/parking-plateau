<?php
session_start();
header('Content-Type: image/png');
use Endroid\Qrcode;
require_once 'vendor/autoload.php';
$qr = new Endroid\Qrcode\Qrcode();

$qr->setText($_SESSION['pass44']);
$qr->setSize(200);
$qr->setPadding(10);

$qr->render();



?>