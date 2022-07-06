<?php
class CharacterManager extends Model
{
    public function getCharacters()
    {
        $result = $this->getAllElements('characters', 'Character');
        return $result;
    }
}
