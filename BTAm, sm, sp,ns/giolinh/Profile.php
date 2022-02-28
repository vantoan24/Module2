<?php
namespace giolinh;
class Profile
{
    public $name = "toàn gio linh";
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
