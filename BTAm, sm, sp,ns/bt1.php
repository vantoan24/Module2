<?php

class User
{
    protected string $name;
    protected string $email;
    public int $role;
    public function __construct($name, $email, $role){
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    // function setName($name){
    //     $this->name =$name;
    // }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getRole(int $role){
        return $this->role;
    }
    function getInfo(){
      return $this->name ;
    }
    function setInfo($info){
        $this->role = $info;
    }
    function isAdmin() {
        if($this->role == 1){
            return "Tài khoản ". $this->name." là Admin";
        }else if($this->role == 2){
            return $this->name." Là Người dùng";
        }else{
            return $this->name. " Không Tồn tại ";
        }
    }
}
$user = new User("Toàn","sadjbdsajsaj",1);
echo $user->isAdmin();
