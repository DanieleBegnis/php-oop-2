<?php
class Category
{
    public $name;
    public $type;
    public $description;
    public $image;

    public function __construct($_name, $_type, $_description, $_image)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->description = $_description;
        $this->image = $_image;
    }
}
