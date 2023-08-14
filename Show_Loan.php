<?php
include "./Loan.php";
$loan = new Loan("id", "date", "num");
$loan->displayLoan_BookInfo();
echo "### __________###" . "<br>";
?>