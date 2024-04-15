<?php 
class CurrentBill { // Properties 
public $billName; 
public $billAmount; 
public $dueDate; 
public $paidStatus; 
public $billId; 
// Methods 
function setBillDetails($billName, $billAmount, $dueDate, $paidStatus, $billId) { 
$this->billName = $billName; 
$this->billAmount = $billAmount; 
$this->dueDate = $dueDate; 
$this->paidStatus = $paidStatus; 
$this->billId = $billId; } 

function getBillDetails() { 
return "Bill: ".$this->billName.", Amount: ".$this->billAmount.", Due Date: ".$this->dueDate.", Paid Status: ".$this->paidStatus.", Bill ID: ".$this->billId; } 
function payBill() { 
$this->paidStatus = true; 
return "The bill has been paid."; } 
}
// Create an object of CurrentBill 
$myBill = new CurrentBill(); 
$myBill->setBillDetails("Electricity", 100, "2024-03-01", false, "E001"); echo $myBill->getBillDetails(); echo $myBill->payBill();
?>