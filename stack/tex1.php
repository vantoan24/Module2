<?php
class MyStack{
    protected $stack;
    protected $limit;
    public function __construct($limit=5){
        $this->stack =array();
        $this->limit = $limit;
    }
    //lưu giữ một phần tử trên ngăn xếp
    public function push($item){
        if($this->isFull()){
            echo "Stack is full";
        } else{
            array_unshift($this->stack,$item);
        }
    
    }
    // Xoá một phần tử từ ngăn xếp
    public function pop() {
      array_shift($this->stack);
    }
    //lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này
    public function peek() {
        return current($this->stack);
    }
    //Kiểm tra rỗng
    public function isEmpty() {
        if( count($this->stack) == 0){
            return true;
        }
        return false;
    }
    //kiểm tra xem ngăn xếp đã đầy hay chưa
    public function isFull() {
        if(count($this->stack ) == $this->limit){
            return true;
        }
        return false;
    }
}
$objmystack = new MyStack(5);
$objmystack->push("Văn");
$objmystack->push("Sử");
$objmystack->push("Địa");
$objmystack->push("Toán");
$objmystack->push("Lý");
$objmystack->push("Hóa");
echo "<pre>";
print_r($objmystack);
die();





