<?php

namespace src\page\creditcard;

use src\interfaces\PageViewModel;

final class CreditCardLandingPageViewModel implements PageViewModel {

    public $title = 'apache';
    public $reactHTML = '';
    public $pageSections = [];

    public function setReactHTML(string $reactHTML): void {
        $this->reactHTML = $reactHTML;
    }

    public function getReactHTML(): string {
        return $this->reactHTML;
    }

    public function getPageSections(): array {
        return $this->pageSections;
    }

    public function setPageSections(array $pageSections): void {
        $this->pageSections = $pageSections;
    }

}
