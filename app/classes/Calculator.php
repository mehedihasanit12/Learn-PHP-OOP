<?php


namespace App\classes;


class Calculator
{
    public $firstNumber,$lastNumber,$your_choice,$result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'] ;
        $this->lastNumber = $post['last_number'] ;
        $this->your_choice = $post['your_choice'] ;
    }

    public function index()
    {
        if ($this->your_choice == '+') {
            $this->result = $this->firstNumber + $this->lastNumber;
        }
        elseif ($this->your_choice== '-')
        {
            $this->result = $this->firstNumber - $this->lastNumber;
        }
        elseif ($this->your_choice== '*')
        {
            $this->result = $this->firstNumber * $this->lastNumber;
        }
        elseif ($this->your_choice== '/')
        {
            $this->result = $this->firstNumber / $this->lastNumber;
        }

        header("Location: web.php?page=calculator&&result= $this->result");
    }
}