<?php

namespace Bank_task;

class savingAccount extends bankAccount {
    public function deposit(float $amount){
        $this->balance += $amount;   
        self::$total_transaction++; 
        $this->log("Account {$this->accountNumber} deposited {$amount} into saving account.");
    }

    public function withdraw(float $amount){
        if ($amount > $this->balance) {
            $this->balance -= $amount;
            echo "The amount you want to withdraw is greater than your current balance, but still you can withdraw the amount.<br>";
            self::$total_transaction++;
            $this->log("Account {$this->accountNumber} withdrew {$amount} from saving account.");
        }
    }
}
?>
