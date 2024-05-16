<?php
trait Color {
    public $color;

    public function getColor() {
        return $this->color;
    }

    public function setColor($newColor) {
        $this->color = $newColor;
    }
}
?>