<?php
class Queue {
    /** @var array queue element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize queue element
    }

    /**
    * insert an element
    * @param string $ele
    * @return void
    */
    public function enqueue($ele)
    {
        array_unshift($this->elements, $ele); 
    }

    /**
    * delete front element
    * @return void
    */
    public function dequeue()
    {
        if (!$this->isEmpty()) { //check if queue is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // same to pop function in stack
        }
    }

    /**
    * get front element
    * @return string
    */
    public function front()
    {
            if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1]; // same to top function in stack
        }

        return null;
    }

    /**
    * check queue is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

$priority = new Queue();
$dependent = new Queue();

$time = 0;

$priority->enqueue(2);
$priority->enqueue(1);
$priority->enqueue(3);

$dependent->enqueue(1);
$dependent->enqueue(2);
$dependent->enqueue(3);

while (!$priority->isEmpty()) {
    if ($priority->front() == $dependent->front()) {
        $time += 2;
        $priority->dequeue();
        $dependent->dequeue();
    } else {
        $time += 1;
        $priority->enqueue($priority->front());
        $priority->dequeue();
    }
}

echo $time;
?>
