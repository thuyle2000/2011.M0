<?php 
//dinh nghia namespace ten la M02011
namespace M02011;


//dinh nghia class Student namespace nay
class Student{
    //khai bao 2 thuoc tinh id, name
    public $id, $name;

    //ham dung
    public function __construct($ms="S01", $tensv="Phat"){
        $this->id = $ms;
        $this->name = $tensv;
    }

    //ham in thong tin chi tiet cua sinh vien
    public function display(){
        echo "Thong tin sinh vien: id = $this->id, ten= $this->name <br>";
    }
}

//dinh nghia ham tinh giai thua n
function factorial($n){
    $r = 1;
    for ($i=1;  $i<=$n; $i++) {    
        $r *= $i;
    }

    echo ">> $n! = $r <br>";
}


?>