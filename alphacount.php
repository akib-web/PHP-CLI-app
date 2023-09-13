<?php
/**
 * Hello There!
 */
while(true){
    (string) $user_string = readline('Enter the String: ');
    if($user_string == 0){
        break;
    }
    $count_string = new ManupulateString(str:$user_string);
    echo "==== ==== ===="."\n";
    printf('Your string is : %s'."\n", $user_string);
    printf('Total Alphabet Count : %d'."\n", $count_string->CountTotalAlphabet());
    echo "Break the operation: press '0'"."\n";
    echo "==== ==== ===="."\n";
}

class ManupulateString{
    private $string = '';
    function __construct($str)
    {   
        $this->string = $str;
    }
    public function ParseCleanAlphabet()
    {
        $string = $this->string;
        $clean_alphabets = str_replace(' ', '', $string);
        $clean_alphabets = preg_replace('/[^A-Za-z]/', '', $string);
        return $clean_alphabets;
    }
    public function CountTotalAlphabet(){
        $total_count_of_alphabets = $this->ParseCleanAlphabet();
        return strlen($total_count_of_alphabets);
    }
}
