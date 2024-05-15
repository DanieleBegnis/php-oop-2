<?php
class Category
{
    public $name;
    public $type;
    public $description;

    public function __construct($_name, $_type, $_description)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->description = $_description;
    }
}
