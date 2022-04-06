<?php

class password extends Form {

    protected function surround($html){

        return "<div class=\login-form\>{$html}</div>";
    
    }

    public function input($name){

        return $this->surround(
            '<label>' . $name . '</label>' . '<input type="password" name="' . $name . '" value="' . $this->getValue($name) .'" class="form-control">');
    }
}