<?php
class ControllerCharacter
{
    private $_characterManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception("Nous avons cherché partout, mais cette page semble bien être introuvable");
        else
            $this->displayCharacters();
    }

    private function displayCharacters()
    {
        $this->_characterManager = new CharacterManager;
        $characters = $this->_characterManager->getCharacters();

        require_once('Views/viewCharacters.php'); //non sécurisé
    }
}
