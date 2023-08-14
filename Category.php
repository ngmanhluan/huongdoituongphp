<?php
    class Category {
        private $Category_code;
        private $Category_name;
        private $Describe;
    

    public function Category ($Category_code, $Category_name,$Describe) {
        $this->Category_code = $Category_code;
        $this->Category_name = $Category_name;
        $this->Describe = $Describe;
    }


    public function Display_Category_Info () {
        return 
          " Mã Category" . $this -> Category_code. "<br>".
          " Name Category" . $this -> Category_name. "<br>".
          " Describe Category" . $this -> Describe. "<br>";
    }
}
?>