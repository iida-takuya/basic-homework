<?php
class Node {
    /** @var int */
    private $data;
    /** @var Node */ 
    private $next; 

    /**
    * Constructor Node class
    */
    public function __construct($data = 0, $next = null)  // default value of $data is 0, $next is null
    {
        $this->data = $data; // initial $data
        $this->next = $next;  // initial $next
    }

    /**
    * get data
    * @return int
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * set data
    * @param int $data
    */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
    * get next
    * @return Node
    */
    public function getNext()
    {
        return $this->next;
    }

    /**
    * set next
    * @param Node $next
    */
    public function setNext($next)
    {
        $this->next = $next;
    }
    


    public function insertToHead($node)
    {
        $node->setNext($this->head);
        $this->head = $node;
    }

    /**
    * return head
    */
    public function getHead()
    {
        return $this->head;
    }



} 

class LinkedList { 
    /** @var Node  head node */
    private $head;

    /**
    *@param int $data
    */
    public function insert($data)
    {
        $newNode = new Node($data); // create a Node
        if ($this->head == null) {
            // if the head is null, that mean linked list is empty, so the first node is head
            $this->head = $newNode;
        } else {
            // if linked list is not null, new node will be add to end of list
            // find the last node
            $last = $this->head; 
            while ($last->getNext() != null) { 
                $last = $last->getNext();
            }
            // insert new node to at last node
            $last->setNext($newNode);
        }
    }

    /**
    * traversal linked list
    */
    public function visit()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }
    /**
    * traversal linked list
    */
    public function reverse()
    {
        $preNode = null;
        $currNode = $this->head;
        $nextNode = null;

        echo "Linked List: ";

        while ($currNode != null) { //stop when node is NULL
            $nextNode = $currNode->getNext(); 
            $currNode->setNext($preNode);
            $preNode = $currNode;
            $currNode = $nextNode;
        }
        $this->head =$preNode;
        echo $this->visit();
    }
}

$list = new LinkedList();

$list->insert(1); 
$list->insert(2); 
$list->insert(3); 
$list->insert(4);
$list->insert(5);

$list->reverse();
?>
