<?php 

//initiate the class to start the app
$expences = new ExpenceTracker();
$expences->start();

class ExpenceTracker{
    public int $userInput;
    public array $options = [
        "1. Add income",
        "2. Add expense",
        "3. View incomes",
        "4. View expenses",
        "5. View savings",
        "6. View categories",
    ];

    public function __construct(){
        //todo something
    }
    public function start(){
        $this->showAllOptions();
    }
    public function showAllOptions(){
        printf(  "\n\nSelect Your choise \n\n" );
        array_map(function($value){
            printf( $value.",\n" );
        },$this->options); 
     
        $this->getUserInput();
    }

    private function getUserInput(){
        $this->userInput = readline("\nEnter your option:");
        $this->manupulateActions($this->userInput);
    }

    private function manupulateActions($type){
        printf( $type );
        // $this->showAllOptions();
        $result = new InputManupulation($type);

        return $result;
    }

}

class InputManupulation{
    public int $type;
    public function __construct($type){
        $this->type = $type;
    }
    public function checkInput(){
        
    }
}
