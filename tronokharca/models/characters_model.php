<?php

class Characters_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllCharacters()
    {

        $sth = $this->db->prepare("SELECT * FROM `seriescharacters`");
        $sth->execute();
        $seriescharacters = $sth->fetchAll(PDO::FETCH_OBJ);
        return  $seriescharacters;
    }
}
