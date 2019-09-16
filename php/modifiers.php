<?php

class hello{
    
    protected function one(){       // will work inside the own class and sub class
        return 'It is protected';
    }

    private function two(){         // will work inside only its own class
        return 'It is private';
    }

    public function three(){        // will work inside and outside- anywhere

        return $this->one()." and ".$this->two()."<br>";
    }

}

$obj = new hello();
//echo $obj->one(); // does not work (protected)
//echo $obj->two(); // does not work (private)
echo $obj->three();

class world extends hello{
    public function four(){
        return $this->one();
    }

    public function five(){
        return $this->two();
    }
}

$obj1 = new world();
echo $obj1->four();
echo $obj1->five(); // does not work (private)