<?php
class Node
{
    public $element;
    public $next;
}

class LinkedList
{
    public $head;
    public $tail;
    public $count;

    public function insertAtFirst($node)
    {
        $node->next = $this->head;
        $this->head = $node;
    }

    public function insertAtLast($node)
    {
        $this->tail->next = $node;
    }

    function removeAtFirst()
    {
        $this->head = $this->head->next;
    }
    function get()
    {

    }
    function remove($o,$a,$b)
    {
        $a->next = $o;
        $o->next = $b;
        $a->next = $b;
    }
}