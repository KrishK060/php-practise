<?php
//user

use Basics\transaction;

include "transaction.php";
class user
{
    public $name;
    public $transactions = [];
    
    public function __construct($name){
        $this->name = $name;
    }

    public function add_transaction($transactions){
        $this->transactions[] = $transactions;

    }
    public function get_transactions(){
        return $this->transactions;
    }

    public function show_transaction(){
        $arr=[];
        foreach ($this->transactions as $transaction) {
            $arr[] = array($transaction->user, $transaction->amount, $transaction->type);
        }
        return $arr;
    }
    public function calculate_balance(){
        $balance = 0;
        foreach ($this->transactions as $transaction) {
            if($transaction->type == "deposit"){
                $balance += $transaction->amount; 
            } else {
                $balance -= $transaction->amount; 
            }
        }
        return $balance; 
    }

    public function calculate_total_deposite_total_withdrawl(){
        $deposit = 0;
        $withdrawal =0;
        foreach ($this->transactions as $transaction) {
            if($transaction->type == "deposit"){
                $deposit += $transaction->amount; 
            } else {
                $withdrawal += $transaction->amount; 
            }
        }
        return ['deposit' => $deposit, 'withdrawal' => $withdrawal];
    }

    public function largest_transaction(){
        $largest = 0;
        foreach ($this->transactions as $transaction) {
            if($transaction->amount > $largest){
                $largest = $transaction->amount;
            }
        }
        return $largest;
    }
    

}
?>