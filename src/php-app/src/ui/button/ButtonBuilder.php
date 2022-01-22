<?php


namespace src\ui\button;


final class ButtonBuilder {

    public $text;

    public function withText(?string $text): void {
        $this->text = $text;
    }

    public function build(): Button {
        $model = new Button();
        $model->setText($this->text);
        return $model;
    }

}