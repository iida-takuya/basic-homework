<?php
class Node {
    /** @var int */
    private $data;
    /** @var Node */ 
    private $next;

    private $before;

    /**
    * Constructor Node class
    */
    public function __construct($data = 0, $next = null, $before = null)  // default value of $data is 0, $next is null
    {
        $this->data = $data; // initial $data
        $this->next = $next;  // initial $next
        $this->before = $before;
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


    public function getBefore()
    {
        return $this->before;
    }

    public function setBefore($before)
    {
        $this->before = $before;
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
            $newNode->setBefore($last);
        }
    }

    public function reverse()
    {
        $currNode = $this->head;

        echo "Linked List: ";

        while ($currNode->getNext() !== null) {
            $currNode = $currNode->getNext();
        }

        while ($currNode !== null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getBefore();
        }
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
