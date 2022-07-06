<?php
class ControllerFlow
{
    private $_flowManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception("Nous avons cherché partout, mais cette page semble bien être introuvable");
        else
            $this->displayFlows();
    }

    private function displayFlows()
    {
        $this->_flowManager = new FlowManager;
        $flows = $this->_flowManager->getFlows();

        require_once('Views/viewFlows.php'); //non sécurisé
    }
}
