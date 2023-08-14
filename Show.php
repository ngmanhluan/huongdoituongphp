<?php
include "./Author.php" ;
include "./Loan.php";
include "./student.php";

$Author = new Author(" Hà Phi Dũng", "nam", " 1-9-2004", " TTAL");
echo $Author->Display_Author();
echo "###------###" . "<br>";



$loan = new Loan("id", "date", "num");
$loan->displayLoan_BookInfo();
echo "### __________###" . "<br>";



$student = new student("123", "t dung", "29-03-04", "SE_student", "CNTT");
echo $student->Display_student();
echo "###-----###" . "<br>";
?>