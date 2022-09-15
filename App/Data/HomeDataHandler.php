<?php

namespace App\Data;

class HomeDataHandler
{
    // in dit voorbeeld wordt een string gereturned in werkelijkheid zal je hier data uit een database of andere
    // bronnen gaan halen
    public function getTitle(): string
    {
        return 'home';
    }
}