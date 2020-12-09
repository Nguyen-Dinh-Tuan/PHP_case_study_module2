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
    function addStudent($product){
        $sql = "INSERT INTO `Students`( `id_class`, `NameStudent`, `Gender`, `Date`, `Address`) VALUES (:id_class,:NameStudent,:Gender,:Date,:Address)";
        $stmt = $this->DBConnect->prepare($sql);

        $stmt->bindParam(":id_class",$product->getIdClass());
        $stmt->bindParam(":NameStudent",$product->getName());
        $stmt->bindParam(":Gender",$product->getGender());
        $stmt->bindParam(":Date",$product->getDate());
        $stmt->bindParam(":Address",$product->getAddress());

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
        $sql = "DELETE FROM `Students` WHERE id_student =:id_student";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":id_student",$id);
        $stmt->execute();
    }
    public function search($key)
    {
        $sql = "SELECT * FROM  `Students` WHERE NameStudent LIKE :key";
        $stmt= $this->DBConnect->prepare($sql);
        $stmt->bindParam(":key",$key);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $item) {
            $student = new Students($item["id_class"],$item["NameStudent"],$item["Gender"],$item["Data"],$item["Address"]);
//            $product->setId($item['id']);
            $student->setId($item["id_student"]);
            array_push($arr, $student);
        }
        return $arr;
    }
    public function editStudent($newStudent){
       $sql=  "UPDATE `Students` SET  id_class=:id_class,`NameStudent`=:NameStudent,`Gender`=:Gender,`Date`=:Date,`Address`=:Address WHERE id_student=:id_student";
       $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id_class',$newStudent->getIdClass());
        $stmt->bindParam(':NameStudent',$newStudent->getName());
        $stmt->bindParam(':Gender',$newStudent->getGender());
        $stmt->bindParam(':Date',$newStudent->getDate());
        $stmt->bindParam(':Address',$newStudent->getAddress());
//        $stmt->bindParam(':img', $newStudent->getImg());
        $stmt->bindParam(':id_student',$newStudent->getId());
        $stmt->execute();
    }
}