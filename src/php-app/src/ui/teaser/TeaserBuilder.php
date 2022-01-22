<?php


namespace src\ui\teaser;


final class TeaserBuilder {

    public $title;
    public $bullets = [];
    public $controls;

    public function withTitle(?string $title): void {
        $this->title = $title;
    }

    public function withBullets(array $bullets): void {
        $this->bullets = $bullets;
    }

    public function withControls(Controls $controls): void {
        $this->controls = $controls;
    }

    public function build(): Teaser {
        $teaser = new Teaser();
        $teaser->setTitle($this->title);
        $teaser->setBullets($this->bullets);
        $teaser->setControls($this->controls);
        return $teaser;
    }
    
}