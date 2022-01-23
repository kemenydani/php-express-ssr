<?php

namespace src\page\timemoney;

use src\ui\button\Button;
use src\ui\infoBox\InfoBox;

class SSRViewModel {
    public ?InfoBox $infoBox = null;
    public ?InfoBox $infoBoxLeft = null;
    public ?InfoBox $infoBoxRight = null;
    public ?Button $resultPageButton = null;

    public function setInfoBox(?InfoBox $infoBox): void {
        $this->infoBox = $infoBox;
    }

    public function setResultPageButton(?Button $resultPageButton): void {
        $this->resultPageButton = $resultPageButton;
    }

    public function setInfoBoxLeft(?InfoBox $infoBoxLeft): void {
        $this->infoBoxLeft = $infoBoxLeft;
    }

    public function setInfoBoxRight(?InfoBox $infoBoxRight): void {
        $this->infoBoxRight = $infoBoxRight;
    }
}