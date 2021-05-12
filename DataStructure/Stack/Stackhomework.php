<?php
class Stack {
    /** @var array stack element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize stack element
    }

    /**
    * insert an element
    * @param string num
    */
    public function push($ele)
    {
        $this->elements[] = $ele;
    }

    /**
    * delete top element
    */
    public function pop()
    {
        if (!$this->isEmpty()) { //check if stack is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // unset use to destroy a variable (https://www.php.net/manual/en/function.unset)
        }
    }

    /**
    * get top element
    * @return string
    */
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }

        return null;
    }

    /**
    * check stack is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function size()
    {
    return sizeof($this->elements);
    }

}

function removeCoupleOfWords($worlds)
{
    $stack = new Stack();
  
    for ($i = 0; $i < count($worlds); $i++) {
        if ($stack->isEmpty())
            $stack->push($worlds[$i]);
        else
        {
            $str = $stack->top();
            if ($worlds[$i] == $str) {
                $stack->pop();
            } else {
                $stack->push($worlds[$i]);
            }
        }
    }
    return $stack->size();
}

$worlds = ["ab", "aa", "aa", "bcd", "ab"];
//$worlds = ["hello", "world", "world", "hello"];
echo removeCoupleOfWords($worlds);

?>
