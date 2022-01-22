<?php


namespace src\core;


use src\interfaces\PageController;

final class PageTemplateResolver {

    public function getPageTemplatePath(string $page): ?string {
        switch ($page) {
            case Page::creditCardLandingPage:
                return __DIR__ . '/../templates/page/creditcard/creditCardLandingPage.phtml';
            default:
                return null;
        }
    }

}