<?php
class Account {
    private $accNumber;
    private $accType;
    private $balance;
// constructor
    public function __construct($accNumber, $accType, $balance) {
        $this->accNumber = $accNumber;
        $this->accType = $accType;
        $this->balance = $balance;
    }
// Add these getter methods
    public function getAccNumber() {
        return $this->accNumber;}
    public function getAccType() {
        return $this->accType;}
// check balance method
    public function getBalance() {
        return $this->balance;}
// withdraw money method
    public function withdraw($amount) {
    if ($amount <= 0) {
        return false;
    }

    if ($amount > $this->balance) {
        return false;
    }

    $this->balance = $this->balance - $amount;
    return true;
}

// deposit money method
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;}
// use to check if negative balance account
    public function isOverdrawn() {
        return $this->balance < 0;}
}
?>