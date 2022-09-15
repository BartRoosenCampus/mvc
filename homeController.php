<?php
// homeController.php
declare(strict_types = 1);
include_once 'vendor/autoload.php';

use App\Services\HomeService;

// We spreken de homeService aan om de titel van deze pagina te bekomen. De titel gieten we in een variabele ($title)
// die we in de view (home.php) kunnen tonen
$service = new HomeService();
$title = $service->getTitle();

// We importeren de view in deze controller ipv naar de file zelf te navigeren. Hierdoor kunnen we data die hier
// eerder werd opgehaald gebruiken in de view
include 'App/views/home.php';
