<?php

class formulaire extends Form {

    protected function surround($html){

        return "<div class=\login-form\>{$html}</div>";
    
    }

    public function input($name){

        return $this->surround(
            '<label>' . $name . '</label>' . '<input type="' .$name . '" name="' . $name . '" value="' . $this->getValue($name) .'" class="form-control">');
    }
}