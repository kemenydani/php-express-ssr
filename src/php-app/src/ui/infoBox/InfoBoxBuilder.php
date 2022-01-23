<?php


namespace src\ui\infoBox;


final class InfoBoxBuilder {

    public $text;

    public function withText(?string $text): void {
        $this->text = $text;
    }

    public function build(): InfoBox {
        $model = new InfoBox();
        $model->setText($this->text);
        return $model;
    }

}