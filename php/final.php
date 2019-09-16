<?php
error_reporting(E_ALL);
class BaseClass { 
    public function test() { 
        echo "BaseClass::test() called\n"; 
    } 
    public function moreTesting() { 
        echo "BaseClass::moreTesting() called\n"; 
    } 
} 

class ChildClass extends BaseClass { 
    final public function moreTesting() { 
        echo "ChildClass::moreTesting() called\n"; 
    } 
}