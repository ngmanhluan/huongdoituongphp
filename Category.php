<?php
class Category {
    protected $id;
    protected $name;
    protected $description;
    
    public function __construct($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
    
    public function displayCategoryInfo() {
        echo "Category ID: " . $this->id . "<br>";
        echo "Category Name: " . $this->name . "<br>";
        echo "Category Description: " . $this->description . "<br>";
    }
}

class Book extends Category {
    protected $isbn;
    protected $title;
    protected $publisher;
    protected $year;
    protected $price;
    
    public function __construct($isbn, $title, $publisher, $year, $price, $id, $name, $description) {
        parent::__construct($id, $name, $description);
        $this->isbn = $isbn;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->price = $price;
    }
    
    public function displayBookInfo() {
        parent::displayCategoryInfo();
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Publisher: " . $this->publisher . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Price: " . $this->price . "<br>";
    }
}

class Author {
    protected $name;
    protected $gender;
    protected $birthDate;
    protected $address;
    
    public function __construct($name, $gender, $birthDate, $address) {
        $this->name = $name;
        $this->gender = $gender;
        $this->birthDate = $birthDate;
        $this->address = $address;
    }
    
    public function displayAuthorInfo() {
        echo "Author Name: " . $this->name . "<br>";
        echo "Gender: " . $this->gender . "<br>";
        echo "Birth Date: " . $this->birthDate . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}

class Library_Book extends Book {
    protected $id_lib_book;
    protected $shelfLocation;
    protected $dateAdded;
    protected $quantity;
    
    public function __construct($isbn, $title, $publisher, $year, $price, $id, $name, $description, $id_lib_book, $shelfLocation, $dateAdded, $quantity) {
        parent::__construct($isbn, $title, $publisher, $year, $price, $id, $name, $description);
        $this->id_lib_book = $id_lib_book;
        $this->shelfLocation = $shelfLocation;
        $this->dateAdded = $dateAdded;
        $this->quantity = $quantity;
    }
    
    public function getSoluong() {
        return $this->quantity;
    }
    
    public function setSoluong($quantity) {
        $this->quantity = $quantity;
    }
    
    public function displayLib_BookInfo() {
        parent::displayBookInfo();
        echo "Library Book ID: " . $this->id_lib_book . "<br>";
        echo "Shelf Location: " . $this->shelfLocation . "<br>";
        echo "Date Added: " . $this->dateAdded . "<br>";
        echo "Quantity: " . $this->quantity . "<br>";
    }
}

class Loan {protected $id_loan;
    protected $borrowDate;
    protected $numBooks;
    
    public function __construct($id_loan, $borrowDate, $numBooks) {
        $this->id_loan = $id_loan;
        $this->borrowDate = $borrowDate;
        $this->numBooks = $numBooks;
    }
    
    public function displayLoan_BookInfo() {
        echo "Loan ID: " . $this->id_loan . "<br>";
        echo "Borrow Date: " . $this->borrowDate . "<br>";
        echo "Number of Books: " . $this->numBooks . "<br>";
    }
}

class Library {
    protected $libId;
    protected $address;
    
    public function __construct($libId, $address) {
        $this->libId= $libId;
        $this->address = $address;
    }
    
    public function displayLibraryInfo() {
        echo "Library ID: " . $this->libId . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}

class Student {
    protected $studentId;
    protected $fullName;
    protected $birthDate;
    protected $class;
    protected $faculty;
    
    public function __construct($studentId, $fullName, $birthDate, $class, $faculty) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->birthDate = $birthDate;
        $this->class = $class;
        $this->faculty = $faculty;
    }
    
    public function displayStudentInfo() {
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Full Name: " . $this->fullName . "<br>";
        echo "Birth Date: " . $this->birthDate . "<br>";
        echo "Class: " . $this->class . "<br>";
        echo "Faculty: " . $this->faculty . "<br>";
    }
}

// Example usage:
$category = new Category(1, "Programming", "Books about programming");
$category->displayCategoryInfo();

echo "<br>";

$book = new Book("1234567890", "PHP Programming", "ABC Publisher", 2023, 29.99, 1, "Programming", "Books about programming");
$book->displayBookInfo();

echo "<br>";

$author = new Author("John Smith", "Male", "1990-01-01", "123 Main St");
$author->displayAuthorInfo();

echo "<br>";

$libraryBook = new Library_Book("1234567890", "PHP Programming", "ABC Publisher", 2023, 29.99, 1, "Programming", "Books about programming", 1, "Shelf A", "2023-08-14", 10);
$libraryBook->displayLib_BookInfo();

echo "<br>";

$loan = new Loan(1, "2023-08-14", 2);
$loan->displayLoan_BookInfo();

echo "<br>";

$library = new Library(1, "123 Library St");
$library->displayLibraryInfo();

echo "<br>";

$student = new Student(1, "John Doe", "2000-01-01", "Class A", "Computer Science");
$student->displayStudentInfo();

?>