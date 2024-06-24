<?php
require_once "autoload.php";

class Cli_APP{
  public $filePath = "Income.txt";
  public $filePath2 = "Expense.txt";
    private const Add_income = 1;
    private const Add_expense = 2;
    private const view_income = 3;
    private const view_expense = 4;
    private const view_savings = 5;
    private const view_category = 6;
    private const exit =7;
    private array $options = [
        self::Add_income => "Add income",
        self:: Add_expense => "Add expense",
        self::view_income => 'View income',
        self::view_expense => 'View expense',
        self::view_savings => 'View savings',
        self::view_category => 'View categories',
        self::exit=> 'Exit'
    ];
    public function choice_option():void
    {
        while(true)
         {
            echo "\n";
            foreach($this->options as $option => $lable)
            {
                printf("%d. %s\n", $option, $lable);
               

                
            }
            echo"-----------------------";
                  echo "\n";
            $insert_option = intval(readline("Enter your choices: "));
            switch($insert_option)
            {
                case self::Add_income:
                    $income = (float)(readline("Enter income amount : "));
                    $choice_lable = trim(readline("Enter income category: "));
                    $b = new Add_income($this->filePath);
                    $mode = 'a';
                    $b->openFile($mode); 
                    $b->write([$income]);
                    $b->enter_amount($income, $choice_lable);
                    break;

                case self::Add_expense:
                    $b = new Add_expense($this->filePath2);
                    $mode = 'a';
                    $b->openFile($mode); 
                    $expense = (float)(readline("Enter expense amount : "));
                    $b->write([$expense]);
                   // $b->enter_amount($expense);
                    break;

                case self::view_income:
                    $c = new view_income();
                    $c->total_amount();
                    break;

                case self::view_expense:
                    $c = new view_expense();
                    $c->total_amount();
                   
                    break;
                case self::view_savings:
                   $s = new view_savings();
                  
                    break;
                case self::view_category:
                $c = new view_category();
                    break;
                case self::exit:
                   return;
                default:
                   echo "Invalid Option.\n";
                 
            }
            

         }
    }
}

$cli_app = new Cli_APP();
$cli_app->choice_option();

