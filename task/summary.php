<?php


use Basics\transaction;
include "user.php";


$transactions=[
    new transaction("abc","200","withdrawal"),
    new transaction("def","100","deposit"),
    new transaction("abc","200","deposit"),
    new transaction("def","50","withdrawal")
];



$users = [];


foreach ($transactions as $transaction) {
    if (!isset($users[$transaction->user])) {
        $users[$transaction->user] = new User($transaction->user);
    }
    $users[$transaction->user]->add_transaction($transaction);
}
foreach ($users as $user) {
    echo  "User: " . $user->name ,"\n". "total balance:".$user->calculate_balance(),"\n";
    $totals = $user->calculate_total_deposite_total_withdrawl();
    echo "Total Deposits: " . $totals['deposit'] ,"\n";
    echo "Total Withdrawals: " . $totals['withdrawal'] ,"\n";
    echo "largest transaction:".$user->largest_transaction(),"\n";
}




