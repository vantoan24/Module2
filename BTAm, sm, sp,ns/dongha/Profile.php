<?php
namespace dongha;
class Profile
{
    public $name = "toàn dong ha";
    private $email = "vantoan@gmail.com";
    protected $gender = "Nam";
    static $status = "buồn";
    public function getEmail()
    {
        return $this->email;
    }
   public static function getInfo()
    {
        return self::$status;
    }
}

