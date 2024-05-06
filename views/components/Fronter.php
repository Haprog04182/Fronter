<?php 
class Fronter{

    public function __construct($tag = "div", $innerHTML = "", $attr = []){
        $this->tag = $tag;
        $this->innerHTML = $innerHTML;
        $this->attr = $attr;
        
    }


    public function get_elem(){
        $this->elem .= "<$this->tag ";

        foreach($this->attr as $type => $val){
            $this->elem .= " ". $type ."= '". $val . "' ";
        }

        $this->elem .= ">$this->innerHTML</$this->tag>";

        return $this->elem;
    }
    public function render(){
        echo $this->get_elem();
    }

    public function get_attr(){
        return $this->attr;
    }
    public function get_innerHTML(){
        return $this->innerHTML;
    }
 
    public function get_tag(){
        return $this->tag;
    }

    public function add_innerHTML($data) {
        $this->innerHTML .= $data;
    }

    public function set_class($data){
        $class = "";
        if(is_array($data)){
            foreach($data as $val){
                $class .= " $val"; 
            }
        }
        $this->attr['class'] = $class;
    }
}
?>