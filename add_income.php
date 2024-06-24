<?php
class Add_income{
  public $add_income = 0;
  public $savings=0;
  public $filePath;
  public $fileHandle;
  public  $fileContents=0;

public function __construct($filePath) {
       $this->filePath = $filePath;
   }

   public function openFile($mode = 'a') {
       $this->fileHandle = fopen($this->filePath, $mode);

       if (!$this->fileHandle) {
           throw new Exception("Error opening file: " . $this->filePath);
       }
   }
public function write($income){
if ($this->fileHandle) {
   
    if (fputcsv($this->fileHandle, $income) == FALSE) {
            echo "Error writing to text file";
            
        }
        echo "You added successfully";
          echo " \n";
    fclose($this->fileHandle);
       }
      }
 public function enter_amount($income, $choice_lable){
    
      echo "Your account type: ".$choice_lable ."  and added amount : ".$income."\n";
     
      echo "\n";
}
   
}


