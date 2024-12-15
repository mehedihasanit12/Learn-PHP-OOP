<?php


namespace App\classes;


class SumCalculator
{
    public $firstNumber,$lastNumber,$result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'] ;
        $this->lastNumber = $post['last_number'];
    }

    public function index()
    {
        $this->result = $this->firstNumber+$this->lastNumber;
        header("Location: web.php?page=sum_calculator&&result=$this->result");
    }
}