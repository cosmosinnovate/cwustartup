<?php

/*
 *  Author Taban Cosmos
 *  This queue can acts as stacks
 *  It can be changed at the intert mathod which makes it a stack
 */

class Queue {

    private $Queue = array(); //Init

    public function clear() { //Clears the Queue
        $this->Queue = array();
    }

    public function isMember($item) { //Returns True if element is in the Queue
        foreach ($this->Queue as $x) {
            if ($item === $x) {
                return true;
            }
        }
        return false;
    }

    public function remove() { //Removes first element
        return array_shift($this->Queue);
    }

    public function add($item) { //Adds element to the end
        $this->Queue[] = $item;
    }

    public function first() { //Returns the first element
        return current($this->Queue);
    }

    public function printOut() { 
    //Writes down in order all the elements
    //
    //for ($i = 1; $i < count($this->Queue) + 1; $i++) {
    //    echo($i . ". " . $this->Queue[$i - 1] . "<br>");
    //     }
        foreach ($this->Queue AS $str) {
            echo '<li>' . ucfirst($str) . '</li>';
        }   
    }

    public function length() { //Returnts length
        return count($this->Queue);
    }

    public function invert() { //Reverts the Queue
        $newQueue = array();
        $length = count($this->Queue); //use count in php to find the length
        
        for ($i = 0; $i < $length + 1; $i++) {
            $newQueue[$i] = $this->Queue[$length - 1 - $i];
            echo $newQueue[$i] . '<br/>';
        }
    }
    
}
