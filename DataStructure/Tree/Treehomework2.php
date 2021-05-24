<?php
/**
* A node of Binary Tree (BT)
*/
class Node {
    /** @var int */
    private $data;

    /** @var Node left subtree */
    private $left;

    /** @var Node right subtree */
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
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
    * get left
    * @return Node
    */
    public function getLeft()
    {
        return $this->left;
    }

    /**
    * set left
    * @param Node $left
    */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
    * get right
    * @return Node
    */
    public function getRight()
    {
        return $this->right;
    }

    /**
    * set right
    * @param Node $right
    */
    public function setRight($right)
    {
        $this->right = $right;
    }
}



/**
* Binary Tree Class
*/
class BinaryTree {
    /** @var Node */ 
    private $root;
    private $arr;

    public function __construct($root = null)
    {
        $this->root = $root;
        $this->arr = array();
    }

    /**
    * get root
    * @return Node
    */
    public function getRoot()
    {
        return $this->root;
    }

    /**
    * set root
    * @param Node $root
    */
    public function setRoot($root)
    {
        $this->root = $root;
    }
    
    public function enqueue($num)
    {
        array_unshift($this->arr, $num);
    }

    public function front()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->arr);
        }
        return null;
    }

    public function isEmpty()
    {
        return empty($this->arr);
    }

    public function showTree() { 
        print_r($this->root);
    }


    public function addNewData($number) {
        $queue = new BinaryTree();
        if ($this->root == null) {
            $this->root = new Node($number);
            return;
        }
        $queue->enqueue($this->root);
        while(!$queue->isEmpty()) {
            $currNode = $queue->front();
            if ($currNode->getLeft() == null) {
                $currNode->setLeft(new Node($number));
                break;
            } else {
                $queue->enqueue($currNode->getLeft());
            }
            if ($currNode->getRight() == null) {
                $currNode->setRight(new Node($number));
                break;
            } else {
                $queue->enqueue($currNode->getRight());
            }
        }
    }
}

$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

$parent1 = new Node(11, $left1);
$parent2 = new Node(9, $left2, $left3);

$root = new Node(10, $parent1, $parent2);

$bt = new BinaryTree($root);

$bt->addNewData(12);
$bt->showTree();

?>
