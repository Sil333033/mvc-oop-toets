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

    public function deleteRichPeople($id)
    {
        $this->db->query('DELETE FROM richestpeople WHERE Id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    
}