<?php


namespace src\core;


use src\interfaces\PageController;

final class PageTemplateResolver {

    public function getPageTemplatePath(string $page): ?string {
        switch ($page) {
            case Page::timeMoneyLandingPage:
                return __DIR__ . '/../templates/page/timemoney/timeMoneyLandingPage.phtml';
            default:
                return null;
        }
    }

}