<?php
class MyQueue{
    protected $queue;
    protected $limit;
    function __construct($limit= 5){
        $this->queue =array();
        $this->limit = $limit;
    }
    //thêm hay lưu trữ một phần tử vào hàng đợi
    public function enqueue($item){
        if($this->isFull()){
            echo "queue is Full";
        }else{

        array_push($this->queue,$item);
    } 
    }
    //xóa một phần tử từ hàng đợi.
    public function dequeue(){
        array_shift($this->queue);
    }
    //lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này
    public function peek(){
        return current($this->stack);
    }
    //Kiểm tra rỗng
    public function isEmpty(){
        if(count($this->queue) == 0){
            return true;
        }
            return false;
    }
    //kiểm tra xem hàng đợi đã đầy hay chưa
    public function isFull(){
        if(count($this->queue) == $this->limit){
            return true;
        }
            return false;
    }
}
$obj = new MyQueue(5);
$obj->enqueue("Toán");
$obj->enqueue("Lý");
$obj->enqueue("Hóa");
$obj->enqueue("Văn");
$obj->enqueue("Sử");
$obj->enqueue("Địa");

echo "<pre>";
print_r($obj);
die();
