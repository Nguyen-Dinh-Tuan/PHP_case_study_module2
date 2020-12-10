<?php


namespace QLD\Model;


class StudentModel
{
    protected $DBConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }

    function getAll()
    {
        $sql = "SELECT * FROM `Students`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Students($item["id_class"], $item["NameStudent"], $item["Gender"], $item["Date"], $item["Address"]);
            $student->setId($item["id_student"]);
            array_push($students, $student);
        }
        return $students;
    }
    function addStudent($student){
        $sql = "INSERT INTO `Students`( `id_class`, `NameStudent`, `Gender`, `Date`, `Address`) VALUES (:id_class,:NameStudent,:Gender,:Date,:Address)";
        $stmt = $this->DBConnect->prepare($sql);

        $stmt->bindValue(":id_class",$student->getIdClass());
        $stmt->bindValue(":NameStudent",$student->getName());
        $stmt->bindValue(":Gender",$student->getGender());
        $stmt->bindValue(":Date",$student->getDate());
        $stmt->bindValue(":Address",$student->getAddress());

        $stmt->execute();

    }
    function getByStudent($id)
    {
        $sql = "SELECT * FROM `Students` WHERE id_student =:id_student";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id_student',$id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }
    function deleteStudent($id){
//        $sql = "DELETE FROM `Students` WHERE id_student =:id_student";
//        $stmt = $this->DBConnect->prepare($sql);
//        $stmt->bindParam(":id_student",$id);
//        $stmt->execute();
        $sql1 = "DELETE FROM Point WHERE id_student = ?";
        $stmt = $this->DBConnect->prepare($sql1);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $sql = "DELETE FROM `Students` WHERE id_student = ?";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

    }
    public function search($key)
    {
        $sql = "SELECT * FROM  `Students` WHERE NameStudent LIKE $key";
        $stmt= $this->DBConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
//        $stmt->bindParam(":key",$key);
//        $stmt->execute();
//        $data = $stmt->fetchAll();
//        $arr = [];
//        foreach ($data as $item) {
//            $student = new Students($item["id_class"],$item["NameStudent"],$item["Gender"],$item["Data"],$item["Address"]);
////            $product->setId($item['id']);
//            $student->setId($item["id_student"]);
//            array_push($arr, $student);
//        }
//        return $arr;
    }
    public function editStudent($student){

       $sql=  "UPDATE `Students` SET  
                      id_class=:id_class,NameStudent=:NameStudent,Gender=:Gender,Date=:Date,Address=:Address 
                        WHERE id_student=:id_student";

        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindValue(":id_class",$student->getIdClass());
        $stmt->bindValue(":NameStudent",$student->getName());
        $stmt->bindValue(":Gender",$student->getGender());
        $stmt->bindValue(":Date",$student->getDate());
        $stmt->bindValue(":Address",$student->getAddress());
        $stmt->bindValue(":id_student",$student->getId());
        $stmt->execute();
//        echo "<pre>";
//        print_r($stmt);
//        die;

    }

}