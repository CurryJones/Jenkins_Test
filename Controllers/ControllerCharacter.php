<?php
require_once('Views/View.php');

class ControllerCharacter
{
    private $_characterManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception("Nous avons cherché partout, mais cette page semble bien être introuvable");
        else
            $this->displayCharacters();
    }

    private function displayCharacters()
    {
        $this->_characterManager = new CharacterManager;
        $characters = $this->_characterManager->getCharacters();

        //require_once('Views/viewCharacter.php'); //non sécurisé
        $this->_view = new View('Character');
        $this->_view->generate(array('characters' => $characters));
    }
}
