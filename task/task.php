<?php
$transactions = [
    ['id' => 1, 'user' => 'Alice', 'amount' => 100, 'type' => 'deposit'],
    ['id' => 2, 'user' => 'Bob', 'amount' => 50, 'type' => 'withdrawal'],
    ['id' => 3, 'user' => 'Alice', 'amount' => 200, 'type' => 'deposit'],
    ['id' => 4, 'user' => 'Bob', 'amount' => 30, 'type' => 'deposit'],
];

echo '<h1>group transactions by user</h1>';
$categories = array();
foreach ($transactions as $type) {
    $categories[$type['user']][] = $type;
}
echo "<pre>";
print_r($categories);

// echo '<h1> user</h1>';
$user = array();
foreach ($transactions as $type) {
    $user[$type['user']][] = $type['amount'];
}

// print_r($user);

echo '<h1>calculate balance by user</h1>';
$sum = array();
foreach ($user as $amount) {
    $sum[key($user)] = array_sum($amount);
    next($user);
}
print_r($sum);

echo '<h1>Get a List of Unique User (you must use array function)</h1>';
$uniqueUser = array_unique(array_column($transactions, "user"));
print_r($uniqueUser);

echo '<h1>Find the Largest Transaction for Each User</h1>';
$max_transaction = array();
reset($user);
foreach ($user as $maximum) {
    $max_transaction[key($user)] = max($maximum);
    next($user);
}
print_r($max_transaction);

echo '<h1>Calculate Total Deposits and Withdrawals Per Use</h1>';
$final_amount = array();
foreach ($categories as $value) {
    foreach ($value as $val) {
        if ($val['type'] === 'deposit') {
            $final_amount[$val['user']]['balance'] += $val['amount'];
        } else {
            $final_amount[$val['user']]['balance'] -= $val['amount'];
        }
    }
}
print_r($final_amount);

