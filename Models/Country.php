<?php

class Country
{
    private $_Id;
    private $_Name;
    private $_Age;
    private $_Capital;
    private $_Map;
    private $_Government;
    private $_EconomicPower;
    private $_MilitaryPower;

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
    public function setCapital($capital)
    {
        if (is_string($capital)) {
            $this->_Capital = $capital;
        }
    }
    public function setMap($map)
    {
        if (is_string($map)) {
            $this->_Map = $map;
        }
    }
    public function setEconomicPower($EP)
    {
        $EP = (int) $EP;
        if ($EP > 0) {
            $this->_EconomicPower = $EP;
        }
    }
    public function setMilitaryPower($MP)
    {
        $MP = (int) $MP;
        if ($MP > 0) {
            $this->_MilitaryPower = $MP;
        }
    }

    //GETTERS
    public function getId()
    {
        return $this->_Id;
    }
    public function getName()
    {
        return $this->_Name;
    }
    public function getAge()
    {
        return $this->_Age;
    }
    public function getCapital()
    {
        return $this->_Capital;
    }
    public function getMap()
    {
        return $this->_Map;
    }
    public function getGovernment()
    {
        return $this->_Government;
    }
    public function getEconomicPower()
    {
        return $this->_EconomicPower;
    }
    public function getMilitaryPower()
    {
        return $this->_MilitaryPower;
    }
}
