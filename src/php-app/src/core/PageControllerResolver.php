<?php


namespace src\core;

use src\interfaces\PageController;
use src\page\timemoney\TimeMoneyLandingPageController;

final class PageControllerResolver {

    public function getPageController(string $page): ?PageController {
        switch ($page) {
            case Page::timeMoneyLandingPage:
                return new timeMoneyLandingPageController();
            default:
                throw new PageControllerResolverException("Could not resolve the page {$page}");
        }
    }

}