<?php
/**
 * Created by IntelliJ IDEA.
 * User: fer
 * Date: 10/23/17
 * Time: 1:22 PM
 */

class Collection
{
    private $empty = true;
    private $size = 0;

    public function isEmpty(){
        return $this->empty;
    }

    public function add($value){
        $this->empty = false;
        $this->size++;
    }

    public function size(){
        return $this->size;
    }


}