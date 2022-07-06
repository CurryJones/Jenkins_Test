<?php
class ControllerCountry
{
    private $_countryManager; //Instance de la classe CountryManager
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception("Nous avons cherché partout, mais cette page semble bien être introuvable");
        else
            $this->displayCountries();
    }

    private function displayCountries()
    {
        $this->_countryManager = new CountryManager;
        $countries = $this->_countryManager->getCountries();

        require_once('Views/viewCountries.php'); //non sécurisé
    }
}
