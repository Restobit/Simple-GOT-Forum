<?php

class Index_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getDashboardContent()
    {

        $sth = $this->db->prepare("SELECT * FROM `dashboardcontent`");
        $sth->execute();
        $dashboardContent = $sth->fetchAll(PDO::FETCH_OBJ);
        return  $dashboardContent;
    }
}
