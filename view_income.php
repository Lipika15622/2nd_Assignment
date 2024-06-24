
<?php
class view_income {
    public $filename;
    public $file;
    
    public function total_amount() { 
        $this->filename = "Income.txt";
        $this->file = fopen($this->filename, "r");
        
        if ($this->file) {
            $total = 0;

            
            $integers = [];

            $number = '';
            while (($char = fgetc($this->file)) !== false) {
                if (is_numeric($char) || $char === '-') {
                
                    $number .= $char;
                } else {
                  
                    if ($number !== '' && $number !== '-') {
                        $integers[] = (int)$number;
                        $number = ''; 
                    }
                }
            }
           
            foreach($integers as $value)
            {
                echo "Added :" .$value;
                echo "\n";
            }
        echo "\n";
         
            fclose($this->file);
        $add =0;
         
            foreach ($integers as $integer) {
            
                $add+= $integer;
                }
                echo "Total Income: ".$add. "\n-------------------";
                echo "\n";
                return $add;
                
        } else {
            echo "Error opening the file";
        }
    }
   
}

 

    
    


?>