<?php 
    class Book{
        private $isbn;
        private $title;
        private $proceducer;
        private $year;
        private $price;
        function __construct($isbn,$title,$proceducer,$year,$price){
            $this->isbn = $isbn;
            $this->title = $title;
            $this->proceducer = $proceducer;
            $this->year = $year;
            $this->price = $price;
        }
        function displayBookInfo(){
            echo "<strong>ISBN:</strong> ".$this->isbn."<br>";
            echo "<strong>Title:</strong> ".$this->title."<br>";
            echo "<strong>Proceducer:</strong> ".$this->proceducer."<br>";
            echo "<strong>Year:</strong> ".$this->year."<br>";
            echo "<strong>Price:</strong> ".$this->price."<br>";
        }
    }
    class Library_Book extends Book
    {
        private $id_lib_book;
        private $position;
        private $date;
        private $quanity;
        function __construct($id_lib_book,$position,$date,$quanity,$isbn,$title,$proceducer,$year,$price){
            parent::__construct($isbn,$title,$proceducer,$year,$price);
            $this->id_lib_book = $id_lib_book;
            $this->position = $position;
            $this->date = $date;
            $this->quanity = $quanity;
        }
        function getQuanity(){
            return $this->quanity;
        }
        function setQuanity($quanity){
            $this->quanity = $quanity;
        }
        function displayLib_BookInfo(){
            parent::displayBookInfo();
            echo "<strong>ID: </strong> $this->id_lib_book <br>";
            echo "<strong>Position: </strong> $this->position <br>";
            echo "<strong>Date: </strong> $this->date <br>";
            echo "<strong>Quanity: </strong> $this->quanity <br>";
        }
    }
?>
