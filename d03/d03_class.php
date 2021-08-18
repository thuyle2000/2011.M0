<?php 
echo "<h2>Demo class </h2>";
echo "<hr>";

$sv1 = new Student;
$sv1->print();

$sv2 = new Student("S2","Ngan Tam", false);
$sv2->print();




//dinh nghia lop Sinh vien
class Student{
    public $id, $name, $gender;

    public function __construct($id="S1", $name="Phat", $gender=true)
    {
        $this->id = $id;
        $this->name =$name;
        $this->gender = $gender;
    }

    public function print(){
        echo "<p>Thong tin sinh vien </p>";
        echo " id: $this->id <br>";
        echo " ten: $this->name <br>";
        echo " gioi tinh: ". ($this->gender?"nam":"nu") ."<br>";
    }
}



//dinh nghia 1 bien kieu lop ko co ten - luu tru thong tin thanh vien cau lac bo noi tieng Anh
$eng_club = new class{
    public $id, $name, $gender;

    //cac ham set gia tri cho cac thuoc tinh id, name, gender
    public function setID($id){
        $this->id = $id;
    }

    public function setName($ten){
        $this->name = $ten;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function set($id, $name, $gender){
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
    }


    public function print(){
        echo "<br><b>Thong tin thanh vien </b><br>";
        echo " id: $this->id <br>";
        echo " ten: $this->name <br>";
        echo " gioi tinh: ". ($this->gender?"nam":"nu") ."<br>";
    }
};


$eng_club->set('M1','Kiet', true);
$eng_club->print();


?>