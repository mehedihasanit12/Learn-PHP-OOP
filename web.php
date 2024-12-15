<?php


require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Calculator;
use App\classes\SumCalculator;
use App\classes\FullName;

$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'about')
    {
        $home->about();
    }
    elseif ($_GET['page'] == 'portfolio')
    {
        $home->portfolio();
    }
    elseif ($_GET['page'] == 'gallery')
    {
        $home->gallery();
    }
    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }

    elseif ($_GET['page']=='details')
    {
        $home->details($_GET['id']);
    }
    elseif ($_GET['page']=='calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page']=='sum_calculator')
    {
        $home->sum_calculator();
    }
    elseif ($_GET['page']=='fullname'){
        $home->fullname();
    }
}
elseif (isset($_POST['calculator_result_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->index();
}
elseif (isset($_POST['sum_result_btn'])){
    $sumCalculator = new SumCalculator($_POST);
    $sumCalculator->index();
}
elseif (isset($_POST['fullName_btn']))
{
    $fullname = new FullName($_POST);
    $fullname->index();
}