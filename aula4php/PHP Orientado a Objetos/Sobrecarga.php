<?php
  
class GFG {  
    public function __call($member, $arguments) {
        $numberOfArguments = count($arguments);
  
        if (method_exists($this, $function = $member.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
    
    private function multiply($argument1) {
        echo $argument1;
    }
  
    private function multiply2($argument1, $argument2) {
        echo $argument1 * $argument2;
    }
}
  
$class = new GFG;
$class->multiply(2); 
$class->multiply(5, 7);
  
?>