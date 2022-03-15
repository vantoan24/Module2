<?php
    class ListNode {
        private $data;
        public  $next;

        public function __construct($data){
            $this->data = $data;
        }
    }

    class LinkedList {
        private $first_node = null;
        public function insert($item){
            $objListNode = new ListNode($item);

            if( $this->first_node == null ){
                $this->first_node = $objListNode;
            }else{
                $currentNode = $this->first_node;
                while ($currentNode->next !== null) {
                    $currentNode = $currentNode->next;
                }
                $currentNode->next = $objListNode;
            }
        }
    }

    $objLinkedList = new LinkedList();
    $objLinkedList->insert('Phước');
    $objLinkedList->insert('Toàn');
    $objLinkedList->insert('Hạnh');
    $objLinkedList->insert('Thùy');
    $objLinkedList->insert('An');

    echo '<pre>';
    print_r($objLinkedList);
    die();
