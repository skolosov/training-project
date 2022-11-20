<?php


trait InputTrait {
    public function getInput()
    {
        echo "<input type=\"$this->type\" name=\"$this->name\" placeholder=\"$this->placeholder\"/>";
    }
}