<?php
class Customer {
    public $FirstName;
    public $LastName;
    public $Email;
    public $Accounts = [];

// constructor 
    public function __construct($FirstName, $LastName, $Email, $Accounts = []) {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Email = $Email;
        $this->Accounts = $Accounts;}

// for customer's full name
    public function getFullName() {
        return $this->FirstName . ' ' . $this->LastName;}

// for adding acc
    public function addAccount($Accounts) {
        $this->Accounts[] = $Accounts;}

// for total balance    
    public function getTotalBalance() {
    $total = 0;
    foreach ($this->Accounts as $Account) {
        $total += $Account->getBalance(); 
    }
    return $total;}

// for get account
    public function getAccounts() {
        return $this->Accounts;}
}
?>