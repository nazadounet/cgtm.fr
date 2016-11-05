<?php

/**
 * Created by PhpStorm.
 * User: omar
 * Date: 26/10/2016
 * Time: 12:30
 */
class Form{

    private $datas = [];

    public   function  __construct($datas = []){

        $this->datas = $datas;
    }
private function getValue($name){

    $value = "";
    if(isset($this->datas[$name])){
        return $this->datas[$name];
    }else{
        return '';
    }
}

    private function input($type, $name, $label){

        $value = $this->getValue($name);
        if($type == "textarea"){
            $input = "<textarea class=\"form-control\" id=\"input$name\" name=\"$name\">$value</textarea>";
        }else{
            $input = "<input type=\"$type\" class=\"form-control\" id=\"input$name\" name=\"$name\" value=\"$value\">";
        }


        return "<div class=\"form-group\">
                    <label for=\"input$name\" >$label</label>
                    $input
                </div>";

    }

    public function  text($name, $label){
        return $this->input('text', $name, $label);
    }
    public function  email($name, $label){

        return $this->input('email', $name, $label);
    }
    public function  textarea($name, $label){

        return $this->input('textarea', $name, $label);
}

}