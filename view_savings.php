<?php
require_once "autoload.php";
class view_savings{
    public $a;
    public $b;
    public $c;
    public function __construct(){
       
$a = new view_income();
//$a->total_amount();
$b = new view_expense();
//$b->total_amount();
$this->c = $a->total_amount()- $b->total_amount();
echo "\n"."Present Savings: " .$this->c;
echo "\n--------------------------";

//$b->enter_amount($this->);

    }
   
}




?>