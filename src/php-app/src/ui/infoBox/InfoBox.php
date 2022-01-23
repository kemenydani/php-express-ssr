<?php


namespace src\ui\infoBox;


final class InfoBox {

    public $text;

    public function setText(?string $text): void {
        $this->text = $text;
    }

}