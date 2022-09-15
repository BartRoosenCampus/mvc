<?php
// about-homeController.php
declare(strict_types = 1);

include_once 'vendor/autoload.php';

use App\Services\AboutService;

$aboutService = new AboutService();
$title = $aboutService->getTitle();

include 'App/views/about.php';
