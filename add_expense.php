<?php
require_once "autoload.php";


class Add_expense{
  public $expense = 0;
  public $filenameN;
  public $filePath;
  public $file;
  public $fileHandle;
  public  $fileContents=0;

public function __construct($filePath2) {
       $this->filePath = $filePath2;
   }

   public function openFile($mode = 'a') {
       $this->fileHandle = fopen($this->filePath, $mode);

       if (!$this->fileHandle) {
           throw new Exception("Error opening file: " . $this->filePath);
       }
   }
public function write($expense){
if ($this->fileHandle) {
    // Iterate through the data array and write each row to the CSV file
   
    if (fputcsv($this->fileHandle, $expense) == FALSE) {
            echo "Error writing to text file";
            
        }
        echo "You expense successfully";
          echo " \n";
          
    fclose($this->fileHandle);

}

       }
      }
 
