<?php

class Character
{
    private $_Id;
    private $_Firstname;
    private $_Name;
    private $_Age;
    private $_Title;
    private $_Aura;
    private $_Country;

    public function __construct(array $data) //appelé auto en 1er à la création d'un objet
    {
        $this->hydrate($data);
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //SETTERS
    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $this->_Id = $id;
        }
    }
    public function setFirstname($firstname)
    {
        if (is_string($firstname)) {
            $this->_Firstname = $firstname;
        }
    }
    public function setName($name)
    {
        if (is_string($name)) {
            $this->_Name = $name;
        }
    }
    public function setAge($age)
    {
        $age = (int) $age;
        if ($age > 0) {
            $this->_Age = $age;
        }
    }
    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->_Title = $title;
        }
    }
    public function setAura($aura)
    {
        $aura = (int) $aura;
        if ($aura > 0) {
            $this->_Aura = $aura;
        }
    }
    public function setCountry($country)
    {
        $country = (int) $country;
        if ($country > 0) {
            $this->_Country = $country;
        }
    }

    //GETTERS
    public function getId()
    {
        return $this->_Id;
    }
    public function getFirstname()
    {
        return $this->_Firstname;
    }
    public function getName()
    {
        return $this->_Name;
    }
    public function getAge()
    {
        return $this->_Age;
    }
    public function getTitle()
    {
        return $this->_Title;
    }
    public function getAura()
    {
        return $this->_Aura;
    }
    public function getCountry()
    {
        return $this->_Country;
    }
}
