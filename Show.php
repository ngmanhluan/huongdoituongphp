<?php
 include "./Category.php";

 $category  = new Category ();
 $category -> Category ("1","danhmuc", "jjdsdjsjd");
 echo $category -> Display_Category_Info();
 echo "### .......####" . "<br>";
?>