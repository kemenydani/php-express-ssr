<?php

namespace src\page\creditcard;

use src\ui\button\Button;
use src\ui\infoBox\InfoBox;

class SSRViewModel {
    public ?InfoBox $infoBox = null;
    public ?Button $resultPageButton = null;

    public function setInfoBox(?InfoBox $infoBox): void {
        $this->infoBox = $infoBox;
    }

    public function setResultPageButton(?Button $resultPageButton): void {
        $this->resultPageButton = $resultPageButton;
    }
}