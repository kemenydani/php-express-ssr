<?php


namespace src\ui\section;

use src\ui\teaser\Teaser;

final class Contents {

    public $teaser;

    public function setTeaser(?Teaser $teaser): void {
        $this->teaser = $teaser;
    }

}