<?php
class User
{
    protected string $name;
    protected string $email;
    public int $role;
    function __construct($name, $email, $role)
    
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    function getName()
    {
        return $this->name;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getRole()
    {
        return $this->role;
    }
    function getInfo()
    {
        return $this->info;
    }
    function setInfo($info)
    {
        $this->info = $info;
    }
    function isAdmin()
    {
        if ($this->role == 1) {
            return "Tài khoản".  $this->name."là admin";
        }elseif ($this->role == 2) {
            return $this->name. "Người dùng bình thường";
        }else{
            return $this->name. "M là hacker";
        }
    }
}
$user = new User("Toàn","@gmail.com",3);
echo $user->isAdmin();