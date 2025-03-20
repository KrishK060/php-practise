<?php
// index.php

// Include the necessary class files
include_once 'message.php';
include_once 'bankAccount.php';
include_once 'savingAccount.php';
include_once 'currentAccount.php';

// Create a saving account and perform actions
$saving = new savingAccount(1, 200);
$saving->deposit(300);
$saving->withdraw(100);
$saving->withdraw(500);  // Insufficient funds

// Create a current account and perform actions
$current = new currentAccount(2, 500);
$current->deposit(200);
$current->withdraw(400);
$current->withdraw(300);  // Insufficient funds

// Show total bank accounts and transactions
echo "Total bank accounts: " . bankAccount::getTotalAccounts() . "<br>";
echo "Total bank transactions: " . bankAccount::getTotalTransaction() . "<br>";
?>
