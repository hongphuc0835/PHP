<?php

//lop sinh vien
class student
{
    public $id;
    public $name;
    public $addred;

    public function __construct($id, $name, $addred)
    {
        $this->id = $id;
        $this->name = $name;
        $this->addred = $addred;

    }
}

//class"trien khai chuong trinh
class MainApplication
{
//khai bao mot mang sinh vien (tao ra nhieu doi tuong sv vaf luu vao mang nay)
    public $students = array();

    public function add_student($id, $name, $addred)
    {
        //tao mot doi tuong sinh vien cu the thong qua ten cuar class la student va __construct cua Student
        //toan tu "new" thong bao cho he dieu hanh cap phat bo nho cho doi tuong $student
        $student = new Student($id, $name, $addred);
        //gan doi tuong vua tao xong vao array.phan biet cac doi tuong thong id(duy nhat)
        //phai truyen them id vao mang de phan biet doi tuong
        $this->students[$id] = $student;
    }
    // de doc duoc thong tin  cua mot doi tuong cu the
    //phai biet id la gi
    public function getstudent($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];//chi tra ve neu co du lieu trong mang
        } else {
            return null;
        }
    }

    public function update_student($id, $name, $addred)
    {
        if (isset($this->students[$id])) {
            $this->students[$id]->name = $name;
            $this->students[$id]->addred = $addred;
            echo 'UPDATE thanh cong';
        } else {
            echo "khong tim thay ";
        }
    }

    public function delete_student($id)
    {
        if (isset($this->students[$id])) {
            unset($this->students[$id]);
            echo "xoas sv co $id thanh cong";
        } else {
            echo "xoa sv k thanh cong";
        }
    }

    //dung vong lap foreach de hien thi toan bo sinh vien trong chuong trinh
    public function displayAllStudents()
    {
        echo "All Students Information:\n";
        foreach ($this->students as $student) {
            echo "ID:{$student->id}\n";
            echo "Name:{$student->name}\n";
            echo "addred:{$student->addred}";
        }
    }
}

//tao 3 doi tuong sv tu ham add_student() ,ham nay goi den __construct($id,$name,$addred)
$mainApplication = new MainApplication();
$mainApplication->add_student(1, "phuc", "hanoi");
$mainApplication->add_student(2, "phuca", "hanoi");
$mainApplication->add_student(3, "phucs", "hanoi");
//tim kiem thong tin sv
$student1 = $mainApplication->getstudent(3);
if ($student1 !== null) {
    echo "Student infomattion\n";
    echo "ID:{$student1->id}";
    echo "Name:{$student1->name}";
    echo "addred:{$student1->addred}";

} else {
    echo "khong tim thay sv";
}
//update_student
$mainApplication->update_student(1, "hongphuc", "thanhhoa");
//delete_student
$mainApplication->delete_student(3);
//dung ham foreach de lap trong mot tap hop doi tuong (mang)
$mainApplication->displayAllStudents();
