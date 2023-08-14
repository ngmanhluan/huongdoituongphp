<?php
include "./student.php.php";
$student = new student("123", "t dung", "29-03-04", "SE_student", "CNTT");
echo $student->Display_student();
echo "###-----###" . "<br>";
?>