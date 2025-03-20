<?php
// currentAccount.php
include_once 'bankAccount.php';  // Include the bankAccount class

class currentAccount extends bankAccount {
    private $min_balance = 100;

    public function deposit(float $amount){
        $this->balance += $amount; 
        self::$total_transaction++; 
        $this->log("Account {$this->accountNumber} deposited {$amount} into current account.");
    }

    public function withdraw(float $amount){
        if ($amount >= $this->balance && $this->balance >= $this->min_balance) {
            echo "The amount you want to withdraw is greater than the minimum balance, so you can't withdraw the amount.<br>";
        } else {
            $this->balance -= $amount;
            self::$total_transaction++;
            $this->log("Account {$this->accountNumber} withdrew {$amount} from current account.");
        }
    }
}
?>
