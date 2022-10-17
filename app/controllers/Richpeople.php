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
                        <td><a href='" .URLROOT . "/RichPeople/delete/$value->Id'> <img src='" . URLROOT . "/app/views/RichPeople/img/b_drop.png'> </img> </a></td>
                    </tr>";
        }
        
        $data = [
            'title' => 'De vijf rijkste mensen ter wereld',
            'rows' => $rows
        ];

        $this->view('RichPeople/index', $data);


    }

    
}
