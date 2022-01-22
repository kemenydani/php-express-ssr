<?php


namespace src\ui\teaser;


use src\ui\button\Button;

final class ControlsBuilder {

    public $button;

    public function withButton(?Button $button): void {
        $this->button = $button;
    }

    public function build(): Controls {
        $model = new Controls();
        $model->setButton($this->button);
        return $model;
    }

}