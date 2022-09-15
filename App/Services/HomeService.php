<?php

// BELANGRIJK hier definiëren we de namespace
// Voortaan gaan we ook slechts 1 klasse hebben per file
namespace App\Services;

// We willen gebruik maken van de HomeDataHandler uit de Data laag, dit doen we door dit "use" statement toe te voegen
use App\Data\HomeDataHandler;

class HomeService
{
    // Deze functie gaat uit de datalaag data opvragen. Wanneer er bewerkingen, wijzigingen of andere handelingen
    // moeten gebeuren op deze data dan doen we dat hier in de servicelaag (businesslaag)
    // De al dan niet bewerkte data wordt doorgegeven aan de controller.
    // In dit voorbeeld wordt de titel omgezet in hoofdletters al vorens deze door te sturen naar de controller
    public function getTitle(): string
    {
        $hdh = new HomeDataHandler();
        return strtoupper($hdh->getTitle());
    }
}