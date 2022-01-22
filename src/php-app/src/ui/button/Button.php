<?php


namespace src\ui\button;


final class Button {

    public $text;

    public function setText(?string $text): void {
        $this->text = $text;
    }

}