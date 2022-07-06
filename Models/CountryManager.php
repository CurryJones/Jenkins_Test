<?php
class CountryManager extends Model
{
    public function getCountries()
    {
        return $this->getAllElements('countries', 'Country');
    }
}
