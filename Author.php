    <?php
    class Author {
        private $Ten_tac_gia ;
        private $Gioi_tinh ;
        private $Ngay_sinh ;
        private $Dia_chi ;

        public function __construct($Ten_tac_gia,$Gioi_tinh,$Ngay_sinh,$Dia_chi){
            $this->Ten_tac_gia=$Ten_tac_gia;
            $this->Gioi_tinh=$Gioi_tinh;
            $this->Ngay_sinh=$Ngay_sinh;
            $this->Dia_chi=$Dia_chi;
    }
    public function Display_Author()
    {
        return
           
           "Tên tác giả".$this->Ten_tac_gia."<br>".
           "Giới tính".$this->Gioi_tinh."<br>".
           "Ngày sinh".$this->Ngay_sinh."<br>".
           "Địa chỉ".$this->Dia_chi."<br>";
          
    }
    }
    ?>   
    
