<?php 
class Loan {
    public $id_loan;
    public $date;
    public $num;

    public function __construct($id, $date, $num) {
        $this->id_loan = $id;
        $this->date = $date;
        $this->num = $num;
    }

    public function displayLoan_BookInfo() {
        echo "Loan ID: " . $this->id_loan . "<br>";
        echo "Date: " . $this->date . "<br>";
        echo "Number of Books: " . $this->num . "<br>";
    }
}
?>