<?php
namespace App\classes;


class FullName
{
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $fullName;
    public function __construct($data)
    {
        if (isset($_POST['btn']))
        {
            $this->firstName=$data['first_name'];
            $this->middleName=$data['middle_name'];
            $this->lastName=$data['last_name'];
        }
        else{
            header("Location: index.php");
        }
    }

    public function index()
    {
        header("Location: pages/index.php");
    }
    public function getNmame()
    {
        $this->fullName =$this->firstName." ".$this->middleName." ".$this->lastName;
        return $this->fullName;
    }
}