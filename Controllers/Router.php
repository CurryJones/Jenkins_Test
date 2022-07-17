<?php
require_once('views/View.php');

class Router
//Affiche les pages en fonction des paramètres url
//Tout se passe sur la même page avec la structure MVC
{
    private $_controller;
    private $_view;

    public function routeRequest()
    {
        try {
            //TODO (latest) : create specific class for autoload (charge all classes at the same time)
            spl_autoload_register(function ($class) {
                require_once('Models/' . $class . '.php');
            });

            $url = '';

            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controllerName = ucfirst(strtolower($url[0])); //controller = premier paramètre de l'url => urltest?=param
                $controllerClass = "Controller" . $controllerName;
                $controllerFile = "Controllers/" . $controllerClass . ".php";

                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_controller = new $controllerClass($url);
                } else {
                    throw new Exception('Nous avons cherché partout, mais cette page semble bien être introuvable');
                }
            } else {
                //Page chargée par défaut (si aucune action spécifiée dans l'url)
                require_once("Controllers/ControllerAdmin.php");
                $this->_controller = new ControllerAdmin($url); //$url contient tous les paramètres de l'url
            }
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            $this->_view = new View('Error');
            $this->_view->generate(array('errormsg' => $errorMessage));
        }
    }
}
