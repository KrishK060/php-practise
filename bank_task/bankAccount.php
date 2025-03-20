<?php
namespace Bank_task;
abstract class bankAccount {
    public $accountNumber;
    public $balance;
    use message; 

    public static $total_account = 0;
    public static $total_transaction = 0;

    public function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        self::$total_account++;
        $this->log("Account {$this->accountNumber} created with balance {$this->balance}.");
    }

    function getaccountID(){
        return $this->accountNumber;
    }

    function getBalance(){
        return $this->balance;
    }

    public static function getTotalAccounts(){
        return self::$total_account;
    }

    public static function getTotalTransaction(){
        return self::$total_transaction;
    }

    abstract public function deposit(float $amount);
    abstract public function withdraw(float $amount);
}
?>
