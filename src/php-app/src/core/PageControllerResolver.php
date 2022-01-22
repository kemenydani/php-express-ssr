<?php


namespace src\core;

use src\interfaces\PageController;
use src\page\creditcard\CreditCardLandingPageController;
use src\page\giromoney\GiroMoneyLandingPageController;

final class PageControllerResolver {

    public function getPageController(string $page): ?PageController {
        switch ($page) {
            case Page::giroMoneyLandingPage:
                return new GiroMoneyLandingPageController();
            case Page::creditCardLandingPage:
                return new CreditCardLandingPageController();
            default:
                throw new PageControllerResolverException("Could not resolve the page {$page}");
        }
    }

}