<?php
  
  $obj = new account(1000);
  $obj->debit(100);
  $obj->credit(700);
  class account {
    
    public $starting_bal;
    public $current_bal;

    public function __construct($amount) {
      $this->starting_bal = $amount;
      $this->current_bal = $amount;
      }
    public function debit($amount){
      
      $this->current_bal = $this->current_bal - $amount;
      }
    public function credit($amount){
      $this->current_bal = $this->current_bal + $amount;
      $current = (array) $this->current_bal;
      print_r ($current);
    }
    public function __destruct() {
      echo '<br>Your starting balance was: ' . $this->starting_bal . '<br>';
      echo 'Your current balance is: ' . $this->current_bal . '<br>';
    }
  }
  print_r($obj);
?>
