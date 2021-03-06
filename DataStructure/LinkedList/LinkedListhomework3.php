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

    public function mergeUtil($h1, $h2)
    {
        if ($h1->head->getNext() == null) {
            $h1->head->setNext($h2);
            return $h1;
        }

        $curr1 = $h1->head;
        $next1 = $h1->head->getNext();
        $curr2 = $h2->head;
        $next2 = $h2->head->getNext();

        while ($next1 != null && $curr2 != null) {
            if (($curr2->getData()) >= ($curr1->getData()) && ($curr2->getData()) <= ($next1->getData())) {
                $next2 = $curr2->getNext();
                $curr1->setNext($curr2);
                $curr2->setNext($next1);
                $curr1 = $curr2;
                $curr2 = $next2;
            }
            else {
                if ($next1->getNext() != null) {
                    $next1 = $next1->getNext();
                    $curr1 = $curr1->getNext();
                }
                else {
                    $next1->setNext($curr2);
                    return $h1;
                }
            }
        }
        return $h1;
    }
}

$list = new LinkedList();
$list->insert(1);
$list->insert(3);
$list->insert(10);

$list1 = new LinkedList();
$list1->insert(2);
$list1->insert(4);
$list1->insert(5);

$list2 = $list->mergeUtil($list, $list1);
$list2->visit();

?>
