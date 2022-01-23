<?php

namespace src\page\timemoney;

use src\interfaces\PageViewModel;

final class TimeMoneyLandingPageViewModel implements PageViewModel {

    public string $title = 'apache';
    public string $reactHTML = '';
    public array $pageSections = [];

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
