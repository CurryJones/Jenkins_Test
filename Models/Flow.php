<?php
class Flow
{
    private $_Id;
    private $_Name;
    private $_Category;
    private $_Element;

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
    public function setCategory($category)
    {
        if (is_string($category)) {
            $this->_Category = $category;
        }
    }
    public function setElement($element)
    {
        if (is_string($element)) {
            $this->_Element = $element;
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
    public function getCategory()
    {
        return $this->_Category;
    }
    public function getElement()
    {
        return $this->_Element;
    }
}
