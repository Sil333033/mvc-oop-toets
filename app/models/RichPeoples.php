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

    public function addRichPeople()
    {
        $this->db->query('INSERT INTO richestpeople (Name, Networth, Age, MyCompany) VALUES (:name, :networth, :age, :mycompany)');
        $this->db->bind(':name', $_POST['Name']);
        $this->db->bind(':networth', $_POST['Networth']);
        $this->db->bind(':age', $_POST['Age']);
        $this->db->bind(':mycompany', $_POST['MyCompany']);
        $this->db->execute();
    }

    
}