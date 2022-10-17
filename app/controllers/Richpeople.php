<?php 
    
class RichPeople extends Controller
{
    private $richpeopleModel;
    
    public function __construct() 
    {
        $this->richpeopleModel = $this->model('RichPeoples');
    }

    public function index() 
    {
        $records = $this->richpeopleModel->getRichPeople();

        $rows = '';
        foreach($records as $value) {
            $rows .= "<tr>
                        <td>$value->Name</td>
                        <td>$value->Networth</td>
                        <td>$value->Age</td>
                        <td>$value->MyCompany</td>
                        <td><a href='" .URLROOT . "/RichPeople/delete/$value->Id'> <img src='" . URLROOT . "/public/img/b_drop.png'> </img> </a></td>
                        <td><a href='" .URLROOT . "/RichPeople/update/$value->Id'> update </img> </a></td>
                    </tr>";
        }
        
        $data = [
            'title' => 'De vijf rijkste mensen ter wereld',
            'rows' => $rows
        ];

        $this->view('RichPeople/index', $data);
    }

    public function delete($id)
    {
        if (!$id) {
            header('Location: ' . URLROOT . '/RichPeople/index');
        }

        $this->richpeopleModel->deleteRichPeople($id);

        $data = [
            'title' => 'Het record met id ' . $id .  ' is succesvol verwijderd',
        ];

        $this->view('RichPeople/delete', $data);

        header("Refresh: 2; url=" . URLROOT . "/RichPeople/index");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->richpeopleModel->addRichPeople($_POST);
            header('Location: ' . URLROOT . '/Richpeople/index');
        } else {
            $data = [
                'title' => 'Voeg een record toe',
            ];
            $this->view('RichPeople/create', $data);
        }
    }

    public function update($id = null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->richpeopleModel->updateRichPeople($_POST);
            header('Location: ' . URLROOT . '/Richpeople/index');
        } else {
            $data = [
                'title' => 'Update een record',
                'record' => $this->richpeopleModel->getRichPeopleById($id)
            ];
            $this->view('RichPeople/update', $data);
        }
    }
    
}
