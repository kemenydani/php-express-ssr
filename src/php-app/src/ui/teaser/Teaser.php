<?php


namespace src\ui\teaser;


final class Teaser {

    public $title;
    public $bullets = [];
    public $controls;

    public function setTitle(?string $title): void {
        $this->title = $title;
    }

    public function setBullets(array $bullets): void {
        $this->bullets = $bullets;
    }

    public function setControls(Controls $controls): void {
        $this->controls = $controls;
    }

}