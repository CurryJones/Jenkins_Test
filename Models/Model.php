<?php
//Contient les méthodes communes aux autres classes (principalement les intercations avec la Bdd)
//Méthode universelle dont on n'aura qu'à changer le nom de la table

abstract class Model //abstract = ne peut pas être instanciée, on l'utilise pour étendre ses props
{
    private static $_database;

    private static function setDatabase()
    {
        self::$_database = new PDO('mysql:host=localhost;dbname=Pahandre;charset=utf8;', 'username', 'pwd'); //TODO : vraies valeurs de BDD
        self::$_database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getDatabase()
    {
        if (self::$_database == null) {
            self::setDatabase();
            return self::$_database;
        }
    }

    protected function getAllElements($table, $object)
    {
        $elements = [];
        $query = $this->getDatabase()->prepare("SELECT * FROM $table ORDER BY Id DESC");
        $query->execute();
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $elements[] = new $object($data); //$object = objet qu'il faudra créer (en fonction de la table et tout) 
        };
        return $elements;
        $query->closeCursor();
    }
}
