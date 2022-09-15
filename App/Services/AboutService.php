<?php

namespace App\Services;

use App\Data\AboutDataHandler;

class AboutService
{
    public function getTitle(): string
    {
        $adh = new AboutDataHandler();
        return strtoupper($adh->getTitle());
    }
}