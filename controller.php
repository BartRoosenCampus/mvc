<?php
// controller.php
declare(strict_types = 1);
include_once 'vendor/autoload.php';

use App\Services\HomeService;

$service = new HomeService();
$title = $service->index();

include 'App/views/home.php';
