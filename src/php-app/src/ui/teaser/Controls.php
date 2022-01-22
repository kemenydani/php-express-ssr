<?php


namespace src\ui\teaser;


use src\ui\button\Button;

final class Controls {

    public $button;

    public function setButton(?Button $button): void {
        $this->button = $button;
    }

}