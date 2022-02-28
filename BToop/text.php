<?php
class Person
{
  public $name;
  public $age;
  public $phone;
  //thiet lap gia tri thuoc tinh
  function __construct($name, $age, $phone){
    echo __METHOD__;
    $this->name = $age;
    $this->phone = $name;
    $this->age = $phone;

}
  // function setName($name): void
  // {
  //   $this->name = $name;
  // }
  // //tra ve gia tri thuoc tinh
  // function getName(): string
  // {
  //   // return $this->name;
  // }
  // function setAge($age)
  // {
  //   $this->age = $age;
  // }
  // function getAge()
  // {
  //   return $this->age;
  // }
  // function setPhone($phone){
  //   $this->phone = $phone;
  // }
  // function getPhone(){
  //   return $this->phone;
  // }
  
}

// khoi tao doi tuong
$objPerson = new Person("Toàn",19,1015151);
// $objPerson->setAge(19);
// $objPerson->setPhone(5151515);
//truy cập phương thức setName
// $objPerson->setName();
//truy cap phuong thuc getName
// echo "Tên của bạn là: " . $objPerson->getName();
echo '<pre>';
print_r($objPerson);
echo '</pre>';
