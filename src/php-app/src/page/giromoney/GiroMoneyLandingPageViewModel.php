<?php

namespace src\page\giromoney;

use src\interfaces\PageViewModel;

final class GiroMoneyLandingPageViewModel implements PageViewModel {

    public $title = 'apache';
    public $pageSections = [];

    public function getPageSections(): array {
        return $this->pageSections;
    }

    public function setPageSections(array $pageSections): void {
        $this->pageSections = $pageSections;
    }

}