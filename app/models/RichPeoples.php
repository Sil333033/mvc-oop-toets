<?php 

class RichPeoples
{
    private $db;

    public function __construct() 
    {
        $this->db = new Database();
    }

    public function getRichPeople()
    {
        $this->db->query('SELECT * FROM richestpeople ORDER BY Networth DESC');
        return $this->db->resultSet();
    }

    
}