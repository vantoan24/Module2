<?php
    //Container: Lớp chứa dữ liệu
    class ArrayList {
        private $data = [];
        //Lấy về một phần tử tại một chỉ số
        public function get($index){
            return $this->data[$index];
        }
        //add(): Thêm một phần tử
        public function add($elm){
            array_push($this->data,$elm);
        }
         //size(): Lấy về số lượng phần tử
        public function size(){
            return count($this->data);
        }
        //isEmpty(): Lấy về số lượng phần tử
        public function isEmpty(){
            if( $this->size() == 0){
                return true;
            }
            return false;
        }

        //đưa 1 phần tử item vào 1 vị trí
        public function addAtPos($item,$index){
            array_splice($this->data,$index,0,$item);
        }

        //xóa phần tử tại 1 vị tri
        public function removeByIndex($index){
           unset($this->data[$index]);
        }

        //contains: kiểm tra phần tử có trong dữ liệu ko
        public function contains($item){
            return array_search($item,$this->data);
        }

        //toArray(): trả danh sách về mảng
        public function toArray(){
            return $this->data;
        }

        //shiftItemUp: di chuyển phần tử lên trên
        public function shiftItemUp($startIndex,$endIndex){

        }

        //shiftItemDown: di chuyển phần tử xuống dưới
        public function shiftItemDown($startIndex,$endIndex){
            
        }
    }

    $objArrayList = new ArrayList();
    $objArrayList->add('Phước');
    $objArrayList->add('Toàn');
    $objArrayList->add('Thùy');
    $objArrayList->add('Ngân');
    $objArrayList->add('An');

    echo '<br> Kích thước dữ liệu là '.$objArrayList->size();
    if( $objArrayList->isEmpty() ){
        echo '<br> Dữ liệu rỗng';
    }

    echo '<br> Chỉ số tại 0 :'.$objArrayList->get(0);
    echo '<br> Chỉ số tại 1 :'.$objArrayList->get(1);

    $objArrayList->addAtPos('Hạnh',2);

    // $objArrayList->removeByIndex(3);
    // $objArrayList->removeByIndex(4);
    // $objArrayList->removeByIndex(5);

    if( $objArrayList->contains('Toàn') ){
        echo '<br> Toàn có trong danh sách dữ liệu';
    }

    //$objArrayList->shiftItemUp(2,0);

    echo '<pre>';
    print_r($objArrayList->toArray());
    die();
