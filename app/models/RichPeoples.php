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

    public function getRichPeopleById($id)
    {
        $this->db->query('SELECT * FROM richestpeople WHERE Id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
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

    public function updateRichPeople($post)
    {
        $this->db->query('UPDATE richestpeople SET Name = :name, Networth = :networth, Age = :age, MyCompany = :mycompany WHERE Id = :id');
        $this->db->bind(':id', $post['Id']);
        $this->db->bind(':name', $post['Name']);
        $this->db->bind(':networth', $post['Networth']);
        $this->db->bind(':age', $post['Age']);
        $this->db->bind(':mycompany', $post['MyCompany']);
        $this->db->execute();
    }

    
}