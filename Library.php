<!DOCTYPE html>
<html>
<body>

<?php
class Library {
  private $id;
  private $addr;

public function Library($id,$addr){
    $this->id = $id;
    $this->addr = $addr;
   
}
public function Display_Library()
{
    return
        "Mã lib".$this->id."<br>".
        "Địa Chỉ".$this->addr."<br>";
   
} 
  
}
?>
 
</body>
</html>
