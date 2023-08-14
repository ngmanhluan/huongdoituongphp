<?php
class student{
    private $masv;
    private $hovaten;
    private $ngaysinh;
    private $lop;
    private $khoa;

    public function __construct($masv, $hovaten, $ngaysinh, $lop, $khoa){
        $this->masv = $masv;
        $this->hovaten = $hovaten;
        $this->ngaysinh = $ngaysinh;
        $this->lop = $lop;
        $this->khoa = $khoa;
    }

    public function Display_student(){
        return
        "Mã sinh viên: " . $this->masv . "<br>" .
        "Họ và tên: " . $this->hovaten . "<br>" .
        "Ngày sinh: " . $this->ngaysinh . "<br>" .
        "Lớp: " . $this->lop . "<br>" .
        "Khoa: " . $this->khoa . "<br>";
    }
}
?>